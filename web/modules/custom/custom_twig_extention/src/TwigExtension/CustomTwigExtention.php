<?php

namespace Drupal\custom_twig_extention\TwigExtension;

use Twig_Extension;
use Twig_SimpleFilter;

class CustomTwigExtention extends \Twig_Extension  {
    public function getName() {
        return 'custom_twig_extention.twig_extension';
    }

    public function getFilters() {
        return [ 
          new Twig_SimpleFilter('type', [$this, 'varType']),
          new Twig_SimpleFilter('getVar', [$this, 'Array_process']),
        ];
      }

    public function varType($val) {
        $val = gettype($val);
    }

    public function Array_process($val){
      
       $val = json_encode($val);
       return $val;

    }

}