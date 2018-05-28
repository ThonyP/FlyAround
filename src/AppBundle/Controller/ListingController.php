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
 * Listing controller.
 *
 * @Route("listing")
 */
<<<<<<< HEAD
class ListingController extends Controller
=======

class ListingController extends Controller

>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
{
    /**
     * List one reservation with one flight and one planemodel, with few IDs.
     *
     * @Route("/{reservation_id}/flight/{flight_id}/planemodel/{planemodel_id}", name="listing_index", requirements={"reservation_id": "\d+"})
     * @Method("GET")
     * @ParamConverter("reservation", options={"mapping": {"reservation_id": "id"}})
     * @ParamConverter("flight", options={"mapping": {"flight_id": "id"}})
     * @ParamConverter("planemodel", options={"mapping": {"planemodel_id": "id"}})
     */

<<<<<<< HEAD
    public function indexAction(Reservation $reservation, Flight $flight, PlaneModel $planeModel)
    {
        return $this->render('listing/index.html.twig', array(
            'reservation' => $reservation,
            'flight' => $flight,
            'planeModel' => $planeModel
        ));
    }

}
=======
    public function indexAction(Reservation $reservation, Flight $flight, PlaneModel $planemodel)
    {
        return $this->render('listing/review', array(
            'reservation' => $reservation,
            'flight' => $flight,
            'planemodel' => $planemodel
        ));
    }

}
>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
