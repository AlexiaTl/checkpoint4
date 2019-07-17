<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Prices;
use App\Entity\PublicType;
use App\Entity\Period;

class PricesController extends AbstractController
{
    /**
     * @Route("/prices", name="prices")
     */
    public function prices()
    {
        $prices = $this->getDoctrine()
            ->getRepository(Prices::class)
            ->findAll();

        $public = $this->getDoctrine()
            ->getRepository(PublicType::class)
            ->findAll();

        $period = $this->getDoctrine()
            ->getRepository(Period::class)
            ->findAll();

        return $this->render(
                'index/prices.html.twig',
                ['prices' => $prices, 'publics' => $public, 'periods' => $period]
        );
    }
}
