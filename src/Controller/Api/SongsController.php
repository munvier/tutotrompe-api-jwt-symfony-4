<?php

namespace App\Controller\Api;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\Song;

/**
 * Movie controller.
 * @Route("/", name="api_songs")
 */
class SongsController extends AbstractFOSRestController
{
    /**
     * Lists all songs.
     * @Rest\Get("/songs", name="_get_songs")
     *
     * @return Response
     */
    public function getSongs()
    {
        $repository = $this->getDoctrine()->getRepository(Song::class);
        $songs = $repository->findAll();
        return $this->handleView($this->view($songs));
    }
}
