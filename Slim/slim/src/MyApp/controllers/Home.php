<?php

namespace MyApp\controllers;

class Home{

      //protected $container;
      protected $View;
      public function __construct($View){
            $this->View = $View;
      }

      public function index($request, $response){
            //$View = $this->container->get('View');
            var_dump($this->View);
            return $response->write("teste index");
      }
}
