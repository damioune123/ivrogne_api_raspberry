<?php
namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\SimplePreAuthenticatorInterface;
use Symfony\Component\Security\Http\HttpUtils;

class AuthTokenAuthenticator implements SimplePreAuthenticatorInterface, AuthenticationFailureHandlerInterface
{
    /**
     * Durée de validité du token en secondes, 12 heures
     */
    const TOKEN_VALIDITY_DURATION = 12 * 3600;

    protected $httpUtils;

    public function __construct(HttpUtils $httpUtils)
    {
        $this->httpUtils = $httpUtils;
    }

    public function createToken(Request $request, $providerKey)
    {

        $targetUrl1 = '/api/auth-tokens';
        $targetUrl2='/api/users';
        $targetUrl3='/api/user-accounts';
        $targetUrl4 = '/api/rfid-auth-tokens';
        $targetUrl5 = '/api/scripts/relais/{name}';
        $targetUrl6='/api/spending-account';
        $targetUrl7='/api/lost-account';
        $targetUrl8='/api/promotions';
        $targetUrl9='/api/doc';
        // Si la requête est une création de token, aucune vérification n'est effectuée
        if ($this->httpUtils->checkRequestPath($request, $targetUrl1)
            or $this->httpUtils->checkRequestPath($request, $targetUrl2)
            or $this->httpUtils->checkRequestPath($request, $targetUrl3)
            or $this->httpUtils->checkRequestPath($request, $targetUrl4)
            or $this->httpUtils->checkRequestPath($request, $targetUrl5)
            or $this->httpUtils->checkRequestPath($request, $targetUrl6)
            or $this->httpUtils->checkRequestPath($request, $targetUrl7)
            or $this->httpUtils->checkRequestPath($request, $targetUrl8)
            or $this->httpUtils->checkRequestPath($request, $targetUrl9)
		    or $request->get('script_name') != null
               ) {
            return;
        }

        $authTokenHeader = $request->headers->get('X-Auth-Token');

        if (!$authTokenHeader) {
            throw new BadCredentialsException('X-Auth-Token header is required');
        }

        return new PreAuthenticatedToken(
            'anon.',
            $authTokenHeader,
            $providerKey
        );
    }

    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {
        if (!$userProvider instanceof AuthTokenUserProvider) {
            throw new \InvalidArgumentException(
                sprintf(
                    'The user provider must be an instance of AuthTokenUserProvider (%s was given).',
                    get_class($userProvider)
                )
            );
        }

        $authTokenHeader = $token->getCredentials();
        $authToken = $userProvider->getAuthToken($authTokenHeader);

        if (!$authToken || !$this->isTokenValid($authToken)) {
            throw new BadCredentialsException('Invalid authentication token');
        }

        $user = $authToken->getUser();
        $pre = new PreAuthenticatedToken(
            $user,
            $authTokenHeader,
            $providerKey,
            array($user->getRole())
        );

        // Nos utilisateurs n'ont pas de role particulier, on doit donc forcer l'authentification du token
        $pre->setAuthenticated(true);

        return $pre;
    }

    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof PreAuthenticatedToken && $token->getProviderKey() === $providerKey;
    }

    /**
     * Vérifie la validité du token
     */
    private function isTokenValid($authToken)
    {
        return (time() - $authToken->getCreatedAt()->getTimestamp()) < self::TOKEN_VALIDITY_DURATION;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // Si les données d'identification ne sont pas correctes, une exception est levée
        throw $exception;
    }
}
