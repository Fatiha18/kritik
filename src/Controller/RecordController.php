<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Entity\Label;
use App\Entity\Record;
use App\Repository\ArtistRepository;
use App\Repository\RecordRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecordController extends AbstractController
{
    /**
     * listes des artistes
     * @Route("/artist", name="artist_list")
     */
    public function index(ArtistRepository $repository)
    {
        return $this->render('record/artist_list.html.twig', [
            'artist_list' => $repository->findAll(),
        ]);
    }

     /**
     * page d'un artiste
     * @Route("/artist/{id}", name="artist_page")
     */
    public function artistPage(Artist $artist)
    {

        return $this->render('record/artist_page.html.twig', [
            'artist' => $artist

        ]);
    }

    /**
     * pade d'un album
     * @Route("/record/{id}", name="record_page")
     */

     public function recordPage(Record $record)
     {

        return $this->render('record/record_page.html.twig', [
            'record' =>$record
        ]);

     }

  /**
     * Nouveau album
     * @Route("/news", name="record_news")
     */
    public function recordNews(RecordRepository $repository)
    {
        return $this->render('record/record_news.html.twig', [
               'record_news' => $repository->findNews(),          
                ]);
    }



     /**
     * page d'un label
     * @Route("/label/{id}", name="label_page")
     */
    public function labelPage(Label $label)
    {
        return $this->render('record/label_page.html.twig', [
               'label' => $label          
                ]);
    }

}
