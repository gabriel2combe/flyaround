<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


/**
 * @Route("/review")
 */
class ReviewController extends Controller
{
    /**
     * Lists all review.
     *
     * @Route("/", name="review_index")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reviews = $em->getRepository('AppBundle:Review')->findAll();
        return $this->render('review/index.html.twig', array(
            'reviews' => $reviews,
        ));
    }

    /**
     * New
     *
     * @Route ("/new", name="review_new")
     * @Method({"GET", "POST"})
     */
    public function newAction()
    {
        return $this->render('review/new.html.twig');
    }




}
