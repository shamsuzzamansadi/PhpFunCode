<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class MyFunCodeController extends AbstractController
{
    #[Route('/my/fun/code', name: 'my_fun_code')]
    public function funNumber() 
    {
        $numbers = range(1,100,1);
        while($numbers){
            echo $numbers;
            if($numbers/3 === true){
                echo "Fizz" ;
            }elseif($numbers/5 === true){
                echo "Buzz";
            }elseif($numbers/3 === true && $numbers/5 === true){
                echo "FizzBuzz";
            }
            echo "<br>";
        }
        

        die;
    }
}
