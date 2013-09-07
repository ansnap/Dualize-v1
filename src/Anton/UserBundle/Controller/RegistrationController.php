<?php

namespace Anton\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationController extends Controller
{

	/**
	 * @Assert\NotBlank
	 * @return type
	 */
	public function registerAction()
	{
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($task);
			$em->flush();

			return $this->redirect($this->generateUrl('task_success'));
		}
	}

	public function confirmEmailAction($token)
	{
		return $this->render('AntonUserBundle:Default:index.html.twig', array('name' => "HI"));
	}

}
