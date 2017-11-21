<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Service\FibonacciService;

class ComputeController extends Controller
{

    /**
     * @Route("/fibonacci/{n}", defaults={"n" = "0"}, requirements={"n": "\d+"})
     */
    public function fibonacciAction($n)
    {
        $service = new FibonacciService();
        
        return $this->render('AppBundle:Compute:fibonacci.html.twig', [
            'result' => $service->compute($n)
        ]);
    }
}
