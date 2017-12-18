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
	 * @Route("/", name="welcome")
	 *
	 * @return Response
	 */
	public function main()
	{
        return $this->render(
            'default/index.html.twig',
            [
            ]
        );
	}
}
