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

      /**
      * @Route("/deportes/{slug}")
      */
      public function mostrar($slug) {
      return new Response(sprintf(
         'Mi artículo en mi pagina de deportes: ruta %s',
         $slug));
    }

    /**
     * @Route("/deportes/{seccion}/{pagina}", name="lista_paginas",
     *      requirements={"pagina"="\d+"}
     *      defaults={"seccion":"tenis"})
     *
     */
    public function lista($seccion,$pagina=1) {
        return new Response(sprintf('Deportes seccion: seccion %s, listado de noticias página %s', $seccion, $pagina));
    }

    /**
     * @Route("/deportes/{seccion}/{slug} ",
     * defaults={"seccion":"tenis"})
     */
    public function noticia($slug, $seccion) {

        return new Response(sprintf(
            'Noticia de %s, con url dinámica=%s',
            $seccion, $slug));
    }



}
