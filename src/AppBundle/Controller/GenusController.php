<?php
/**
 * Created by PhpStorm.
 * User: mikey
 * Date: 6/16/2017
 * Time: 2:28 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
  /**
   * @Route("/genus/{genusName}")
   */
  public function showAction($genusName)
  {
    return new Response('The genus: ' . $genusName);
  }
}