<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/users')) {
                // post_user
                if ($pathinfo === '/api/users') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_user;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::postUserAction',  '_format' => NULL,  '_route' => 'post_user',);
                }
                not_post_user:

                // get_user_by_user
                if (preg_match('#^/api/users/(?P<user_id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_user_by_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_by_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::getUserByUserAction',  '_format' => NULL,));
                }
                not_get_user_by_user:

                // remove_user_by_user
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_remove_user_by_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_user_by_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::removeUserByUserAction',  '_format' => NULL,));
                }
                not_remove_user_by_user:

                // update_user_by_user
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_update_user_by_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_user_by_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::updateUserByUserAction',  '_format' => NULL,));
                }
                not_update_user_by_user:

                // patch_user_by_user
                if (preg_match('#^/api/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_patch_user_by_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_user_by_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController::patchUserByUserAction',  '_format' => NULL,));
                }
                not_patch_user_by_user:

            }

            // get_users_by_admin
            if ($pathinfo === '/api/admin/users') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_users_by_admin;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::getUsersByAdminAction',  '_format' => NULL,  '_route' => 'get_users_by_admin',);
            }
            not_get_users_by_admin:

            // get_limited_users
            if ($pathinfo === '/api/limited-users') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_limited_users;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::getLimitedUsersAction',  '_format' => NULL,  '_route' => 'get_limited_users',);
            }
            not_get_limited_users:

            // get_user_by_admin
            if (0 === strpos($pathinfo, '/api/admin/users') && preg_match('#^/api/admin/users/(?P<user_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_user_by_admin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_by_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::getUserByAdminAction',  '_format' => NULL,));
            }
            not_get_user_by_admin:

            // remove_user_by_super_admin
            if (0 === strpos($pathinfo, '/api/super-admin/users') && preg_match('#^/api/super\\-admin/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_remove_user_by_super_admin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_user_by_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::removeUserBySuperAdminAction',  '_format' => NULL,));
            }
            not_remove_user_by_super_admin:

            if (0 === strpos($pathinfo, '/api/a')) {
                if (0 === strpos($pathinfo, '/api/admin/users')) {
                    // update_user_by_super_admin
                    if (preg_match('#^/api/admin/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_update_user_by_super_admin;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_user_by_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::updateUserBySuperAdminAction',  '_format' => NULL,));
                    }
                    not_update_user_by_super_admin:

                    // patch_user_by_super_admin
                    if (preg_match('#^/api/admin/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_patch_user_by_super_admin;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_user_by_super_admin')), array (  '_controller' => 'AppBundle\\Controller\\UserController::patchUserBySuperAdminAction',  '_format' => NULL,));
                    }
                    not_patch_user_by_super_admin:

                }

                // post_auth_tokens
                if ($pathinfo === '/api/auth-tokens') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_auth_tokens;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AuthTokenController::postAuthTokensAction',  '_format' => NULL,  '_route' => 'post_auth_tokens',);
                }
                not_post_auth_tokens:

            }

            if (0 === strpos($pathinfo, '/api/rfid-auth-tokens')) {
                // post_rfid_auth_tokens
                if ($pathinfo === '/api/rfid-auth-tokens') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_rfid_auth_tokens;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AuthTokenController::postRfidAuthTokensAction',  '_format' => NULL,  '_route' => 'post_rfid_auth_tokens',);
                }
                not_post_rfid_auth_tokens:

                // get_rfid_auth_tokens
                if ($pathinfo === '/api/rfid-auth-tokens') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_rfid_auth_tokens;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AuthTokenController::getRfidAuthTokensAction',  '_format' => NULL,  '_route' => 'get_rfid_auth_tokens',);
                }
                not_get_rfid_auth_tokens:

            }

            // remove_auth_token
            if (0 === strpos($pathinfo, '/api/auth-tokens') && preg_match('#^/api/auth\\-tokens/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_remove_auth_token;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_auth_token')), array (  '_controller' => 'AppBundle\\Controller\\AuthTokenController::removeAuthTokenAction',  '_format' => NULL,));
            }
            not_remove_auth_token:

            if (0 === strpos($pathinfo, '/api/orders')) {
                // get_orders
                if ($pathinfo === '/api/orders') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_orders;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\OrderController::getOrdersAction',  '_format' => NULL,  '_route' => 'get_orders',);
                }
                not_get_orders:

                // get_order
                if (preg_match('#^/api/orders/(?P<order_id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_order;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_order')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::getOrderAction',  '_format' => NULL,));
                }
                not_get_order:

            }

            // get_order_by_admin
            if (0 === strpos($pathinfo, '/api/admin/orders') && preg_match('#^/api/admin/orders/(?P<order_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_order_by_admin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_order_by_admin')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::getOrderByAdminAction',  '_format' => NULL,));
            }
            not_get_order_by_admin:

            // post_self_order_transaction
            if ($pathinfo === '/api/client-self-order') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_self_order_transaction;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderController::postSelfOrderTransactionAction',  '_format' => NULL,  '_route' => 'post_self_order_transaction',);
            }
            not_post_self_order_transaction:

            if (0 === strpos($pathinfo, '/api/admin')) {
                if (0 === strpos($pathinfo, '/api/admin/orders')) {
                    // post_order
                    if ($pathinfo === '/api/admin/orders/order-someone-else') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_order;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::postOrderAction',  '_format' => NULL,  '_route' => 'post_order',);
                    }
                    not_post_order:

                    // post_order_by_cash
                    if ($pathinfo === '/api/admin/orders/cash') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_order_by_cash;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::postOrderByCashAction',  '_format' => NULL,  '_route' => 'post_order_by_cash',);
                    }
                    not_post_order_by_cash:

                    // get_orders_byadmin
                    if ($pathinfo === '/api/admin/orders') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_orders_byadmin;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\OrderController::getOrdersByadminAction',  '_format' => NULL,  '_route' => 'get_orders_byadmin',);
                    }
                    not_get_orders_byadmin:

                    // removeorder
                    if (preg_match('#^/api/admin/orders/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_removeorder;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'removeorder')), array (  '_controller' => 'AppBundle\\Controller\\OrderController::removeorderAction',  '_format' => NULL,));
                    }
                    not_removeorder:

                }

                // post_product_categories
                if ($pathinfo === '/api/admin/product-categories') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_product_categories;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProductCategoryController::postProductCategoriesAction',  '_format' => NULL,  '_route' => 'post_product_categories',);
                }
                not_post_product_categories:

            }

            if (0 === strpos($pathinfo, '/api/product-categories')) {
                // get_product_categories
                if ($pathinfo === '/api/product-categories') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_product_categories;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ProductCategoryController::getProductCategoriesAction',  '_format' => NULL,  '_route' => 'get_product_categories',);
                }
                not_get_product_categories:

                // get_product_category
                if (preg_match('#^/api/product\\-categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_product_category;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_product_category')), array (  '_controller' => 'AppBundle\\Controller\\ProductCategoryController::getProductCategoryAction',  '_format' => NULL,));
                }
                not_get_product_category:

            }

            if (0 === strpos($pathinfo, '/api/admin/product')) {
                if (0 === strpos($pathinfo, '/api/admin/product-categories')) {
                    // update_product_category
                    if (preg_match('#^/api/admin/product\\-categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_update_product_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_product_category')), array (  '_controller' => 'AppBundle\\Controller\\ProductCategoryController::updateProductCategoryAction',  '_format' => NULL,));
                    }
                    not_update_product_category:

                    // patch_product_category
                    if (preg_match('#^/api/admin/product\\-categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_patch_product_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_product_category')), array (  '_controller' => 'AppBundle\\Controller\\ProductCategoryController::patchProductCategoryAction',  '_format' => NULL,));
                    }
                    not_patch_product_category:

                    // remove_product_category
                    if (preg_match('#^/api/admin/product\\-categories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_remove_product_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_product_category')), array (  '_controller' => 'AppBundle\\Controller\\ProductCategoryController::removeProductCategoryAction',  '_format' => NULL,));
                    }
                    not_remove_product_category:

                }

                if (0 === strpos($pathinfo, '/api/admin/products')) {
                    // post_product
                    if ($pathinfo === '/api/admin/products') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_product;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProductController::postProductAction',  '_format' => NULL,  '_route' => 'post_product',);
                    }
                    not_post_product:

                    // get_products
                    if ($pathinfo === '/api/admin/products') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_products;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\ProductController::getProductsAction',  '_format' => NULL,  '_route' => 'get_products',);
                    }
                    not_get_products:

                }

            }

            // get_product
            if (0 === strpos($pathinfo, '/api/products') && preg_match('#^/api/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_product;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_product')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::getProductAction',  '_format' => NULL,));
            }
            not_get_product:

            if (0 === strpos($pathinfo, '/api/admin/products')) {
                // update_product
                if (preg_match('#^/api/admin/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_update_product;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_product')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::updateProductAction',  '_format' => NULL,));
                }
                not_update_product:

                // patch_product
                if (preg_match('#^/api/admin/products/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_patch_product;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_product')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::patchProductAction',  '_format' => NULL,));
                }
                not_patch_product:

                // remove_product
                if (preg_match('#^/api/admin/products/(?P<barcode>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_remove_product;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_product')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::removeProductAction',  '_format' => NULL,));
                }
                not_remove_product:

            }

            // post_order_line
            if ($pathinfo === '/api/order-lines') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_order_line;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\OrderLineController::postOrderLineAction',  '_format' => NULL,  '_route' => 'post_order_line',);
            }
            not_post_order_line:

            if (0 === strpos($pathinfo, '/api/admin/order-lines')) {
                // get_order_lines
                if ($pathinfo === '/api/admin/order-lines') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_order_lines;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\OrderLineController::getOrderLinesAction',  '_format' => NULL,  '_route' => 'get_order_lines',);
                }
                not_get_order_lines:

                // get_order_line
                if (preg_match('#^/api/admin/order\\-lines/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_order_line;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_order_line')), array (  '_controller' => 'AppBundle\\Controller\\OrderLineController::getOrderLineAction',  '_format' => NULL,));
                }
                not_get_order_line:

                // update_order_line
                if (preg_match('#^/api/admin/order\\-lines/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_update_order_line;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_order_line')), array (  '_controller' => 'AppBundle\\Controller\\OrderLineController::updateOrderLineAction',  '_format' => NULL,));
                }
                not_update_order_line:

                // patch_order_line
                if (preg_match('#^/api/admin/order\\-lines/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_patch_order_line;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_order_line')), array (  '_controller' => 'AppBundle\\Controller\\OrderLineController::patchOrderLineAction',  '_format' => NULL,));
                }
                not_patch_order_line:

                // remove_order_line
                if (preg_match('#^/api/admin/order\\-lines/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_remove_order_line;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_order_line')), array (  '_controller' => 'AppBundle\\Controller\\OrderLineController::removeOrderLineAction',  '_format' => NULL,));
                }
                not_remove_order_line:

            }

            // post_money_flow
            if ($pathinfo === '/api/money-flows') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_money_flow;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MoneyFlowController::postMoneyFlowAction',  '_format' => NULL,  '_route' => 'post_money_flow',);
            }
            not_post_money_flow:

            if (0 === strpos($pathinfo, '/api/admin/money-flows')) {
                // get_money_flows
                if ($pathinfo === '/api/admin/money-flows') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_money_flows;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MoneyFlowController::getMoneyFlowsAction',  '_format' => NULL,  '_route' => 'get_money_flows',);
                }
                not_get_money_flows:

                // get_money_flow
                if (preg_match('#^/api/admin/money\\-flows/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_money_flow;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_money_flow')), array (  '_controller' => 'AppBundle\\Controller\\MoneyFlowController::getMoneyFlowAction',  '_format' => NULL,));
                }
                not_get_money_flow:

                // remove_money_flow
                if (preg_match('#^/api/admin/money\\-flows/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_remove_money_flow;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_money_flow')), array (  '_controller' => 'AppBundle\\Controller\\MoneyFlowController::removeMoneyFlowAction',  '_format' => NULL,));
                }
                not_remove_money_flow:

            }

            // get_user_account
            if (0 === strpos($pathinfo, '/api/user-accounts') && preg_match('#^/api/user\\-accounts/(?P<user_account_id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_user_account;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user_account')), array (  '_controller' => 'AppBundle\\Controller\\UserAccountController::getUserAccountAction',  '_format' => NULL,));
            }
            not_get_user_account:

            // getlost_account
            if ($pathinfo === '/api/lost-account') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_getlost_account;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserAccountController::getlostAccountAction',  '_format' => NULL,  '_route' => 'getlost_account',);
            }
            not_getlost_account:

            // getspending_account
            if ($pathinfo === '/api/spending-account') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_getspending_account;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserAccountController::getspendingAccountAction',  '_format' => NULL,  '_route' => 'getspending_account',);
            }
            not_getspending_account:

            // post_user_account
            if ($pathinfo === '/api/user-accounts') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_user_account;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserAccountController::postUserAccountAction',  '_format' => NULL,  '_route' => 'post_user_account',);
            }
            not_post_user_account:

            // get_script_relais_frigo
            if ($pathinfo === '/api/admin/scripts/relaisfrigo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_script_relais_frigo;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ScriptController::getScriptRelaisFrigoAction',  '_format' => NULL,  '_route' => 'get_script_relais_frigo',);
            }
            not_get_script_relais_frigo:

            // get_script_frigo
            if (0 === strpos($pathinfo, '/api/scripts/relais') && preg_match('#^/api/scripts/relais/(?P<script_name>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_script_frigo;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_script_frigo')), array (  '_controller' => 'AppBundle\\Controller\\ScriptController::getScriptFrigoAction',  '_format' => NULL,));
            }
            not_get_script_frigo:

            // get_promotions
            if ($pathinfo === '/api/promotions') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_promotions;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PromotionController::getPromotionsAction',  '_format' => NULL,  '_route' => 'get_promotions',);
            }
            not_get_promotions:

            if (0 === strpos($pathinfo, '/api/super-admin/promotions')) {
                // update_promotion
                if (preg_match('#^/api/super\\-admin/promotions/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_update_promotion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_promotion')), array (  '_controller' => 'AppBundle\\Controller\\PromotionController::updatePromotionAction',  '_format' => NULL,));
                }
                not_update_promotion:

                // patch_promotion
                if (preg_match('#^/api/super\\-admin/promotions/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PATCH') {
                        $allow[] = 'PATCH';
                        goto not_patch_promotion;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_promotion')), array (  '_controller' => 'AppBundle\\Controller\\PromotionController::patchPromotionAction',  '_format' => NULL,));
                }
                not_patch_promotion:

            }

            // get_rfid_to_match
            if ($pathinfo === '/api/rfid-to-match') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_rfid_to_match;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\RfidToMatchController::getRfidToMatchAction',  '_format' => NULL,  '_route' => 'get_rfid_to_match',);
            }
            not_get_rfid_to_match:

            // getorder_stat
            if ($pathinfo === '/api/admin/orders_stat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_getorder_stat;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\StatisticController::getorderStatAction',  '_format' => NULL,  '_route' => 'getorder_stat',);
            }
            not_getorder_stat:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
