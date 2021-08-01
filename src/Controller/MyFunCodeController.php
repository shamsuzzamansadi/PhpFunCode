<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyFunCodeController extends AbstractController
{
    #[Route('/my/fun/code', name: 'my_fun_code')]
    public function fizprocess($numbers)
    {   
        if(empty($numbers)){
            $numbers = range(1,100,1);
        }
        
        $results = array();
        
        foreach(numbers as $number){
            $outputValue = '';

            if($number%3 == 0 && $number%5 == 0){
                $outputValue = "FizzBuzz" ;
            }elseif($numbers%3 == 0){
                $outputValue = "Fizz";
            }elseif($numbers%5 == 0){
                $outputValue = "Buzz";
            }else{
                $outputValue = $number;
            }
            $results[] = $outputValue;
        }

        return $this->render('my_fun_code/index.html.twig', [
            'controller_name' => 'MyFunCodeController',
            'results' => $results,
        ]);
    }
}
