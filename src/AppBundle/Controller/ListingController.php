<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use AppBundle\Entity\Flight;
use AppBundle\Entity\PlaneModel;
use AppBundle\Entity\Reservation;


/**
 * @Route("/listing")
 */
class ListingController extends Controller
{

    /**
     * List one reservation with one flight and one planemodel, with few IDs.
     *
     * @Route("/{reservation_id}/flight/{flight_id}/planemodel/{planeModel_id}", name="listing_index", requirements={"reservation_id": "\d+"})
     * @Method("GET")
     * @ParamConverter("reservation", options={"mapping": {"reservation_id": "id"}})
     * @ParamConverter("flight", options={"mapping": {"flight_id": "id"}})
     * @ParamConverter("planeModel", options={"mapping": {"planeModel_id": "id"}})
     */
    public function indexAction(Reservation $reservation, Flight $flight, PlaneModel $planeModel)
    {
        return $this->render('listing/index.html.twig', array(
            'reservation' => $reservation,
            'flight' => $flight,
            'planeModel' => $planeModel
        ));
    }

}
