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
use Nelmio\ApiDocBundle\Annotation\ApiDoc;


class ScriptController extends Controller
{

    /**
     * This URL aims to call a script that is located in the web/scripts direcotry (Only admin).
     *
     * @ApiDoc(
     *  resource=true,
     *  section="scripts",
     *  description="Call a script in the web/scripts directory (Only admin)"
     * )
     * @Rest\View()
     * @Rest\Get("/admin/scripts/{script_name}")
     */
    public function getScriptAction(Request $request)

    {
        $process = new Process('sudo /usr/bin/python scripts/'.$request->get('script_name').' &');
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        return $process->getOutput();

    }
    
}
