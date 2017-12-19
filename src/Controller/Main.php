<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 12.12.17
 * Time: 08:15
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Main extends Controller
{
	/**
	 * @Route("/", name="hello")
	 *
	 * @return Response
	 */
	public function hello()
	{
        return $this->render(
            'default/index.html.twig',
            [
            ]
        );
	}

    /**
     * @Route("/world", name="world")
     * @return Response
     */
    public function world()
    {
        return $this->render(
            'default/world.html.twig',
            [
            ]
        );
	}
}
