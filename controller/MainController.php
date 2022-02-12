<?php 
namespace App\Controller;

class MainController
{
    public function index()
    {
        echo "Hello World";
    }
    
    /*
     * @Route("Route", name="RouteName")
     */
    public function FunctionName(): Response
    {
        return $this->render('$0.html.twig', []);
    }
}