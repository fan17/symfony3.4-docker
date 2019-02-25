<?php
namespace App\Controller; 

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller {

     public function numberAction() { 
         $number = rand(0, 100); 
            var_dump($number); exit;
     }

}
