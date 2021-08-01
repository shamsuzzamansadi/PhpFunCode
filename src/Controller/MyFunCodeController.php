<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyFunCodeController extends AbstractController
{
    #[Route('/my/fun/code', name: 'my_fun_code')]
    public function index(): Response
    {   
        foreach(range(1,100,1) as $numbers){

            if($numbers%3 == 0 && $numbers%5 == 0){
                echo "FizzBuzz" ;
            }elseif($numbers%3 == 0){
                echo "Fizz";
            }elseif($numbers%5 == 0){
                echo "Buzz";
            }else{
                echo $numbers;
            }
            echo "<br>";
        }
        
        return $this->render('my_fun_code/index.html.twig', [
            'controller_name' => 'MyFunCodeController',
        ]);
    }
}
