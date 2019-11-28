<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeportesController {
      /**
       * @Route("/deportes")
       */
      public function inicio() {
          return new Response('Mi primera pagina en Symfony!');
      }

}
