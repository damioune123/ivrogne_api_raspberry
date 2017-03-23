<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\ProductCategory;
use AppBundle\Form\Type\ProductCategoryType;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ScriptController extends Controller
{


    //ADMIN ONLY new Product creation ==>  seulement pour les barmans

    /**
     * @Rest\View()
     * @Rest\Get("/admin/scripts/relaisfrigo")
     */
    public function getScriptRelaisFrigoAction(Request $request)

    {

        $process = new Process('sudo python scripts/relaisfrigo.py');
        $process->run();


// executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $var = "OK";

        return $var;

    }

    /**
     * @Rest\View()
     * @Rest\Get("/scripts/relais/{script_name}")
     */
    public function getScriptFrigoAction(Request $request)

    {

        $process = new Process( 'sudo python scripts/'.$request->get('script_name').'.py &');
        $process->run();


// executes after the command finishes

        $var = "OK";

        return $var;

    }
    
}
