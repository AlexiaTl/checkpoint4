<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Panel;

class PanelController extends AbstractController
{
    /**
     * @Route("/circus-acts", name="panel")
     */
    public function panel()
    {
        $panel = $this->getDoctrine()
        ->getRepository(Panel::class)
        ->findAll();

        if (!$panel) {
            throw $this->createNotFoundException(
            'No circus acts found.'
            );
        }

        return $this->render(
                'index/panel.html.twig',
                ['panels' => $panel]
        );
    }
}
