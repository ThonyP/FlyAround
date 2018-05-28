<?php
<<<<<<< HEAD

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Review;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
=======
/**
 * Created by PhpStorm.
 * User: wilder20
 * Date: 14/05/18
 * Time: 14:14
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Review;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
/**
 * Review controller.
 *
 * @Route("review")
 */
<<<<<<< HEAD
class ReviewController extends Controller
{
    /**
=======

class ReviewController extends Controller
{
     /**
>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
     * Lists all review entities.
     *
     * @Route("/", name="review_index")
     * @Method("GET")
     */
<<<<<<< HEAD
=======

>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reviews = $em->getRepository('AppBundle:Review')->findAll();
<<<<<<< HEAD
=======

>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
        return $this->render('review/index.html.twig', array(
            'reviews' => $reviews,
        ));
    }
<<<<<<< HEAD
=======

>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
    /**
     * Creates a new review entity.
     *
     * @Route("/new", name="review_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $review = new Review();
        $form = $this->createForm('AppBundle\Form\ReviewType', $review);
        $form->handleRequest($request);
<<<<<<< HEAD
=======

>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();
<<<<<<< HEAD
            return $this->redirectToRoute('review_show', array('id' => $review->getId()));
        }
=======

            return $this->redirectToRoute('review_index', array('id' => $review->getId()));
        }

>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
        return $this->render('review/new.html.twig', array(
            'review' => $review,
            'form' => $form->createView(),
        ));
    }
<<<<<<< HEAD
    /**
     * Finds and displays a review entity.
     *
     * @Route("/{id}", name="review_show")
     * @Method("GET")
     */
    public function showAction(Review $review)
    {
        $deleteForm = $this->createDeleteForm($review);
        return $this->render('review/show.html.twig', array(
            'review' => $review,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Displays a form to edit an existing review entity.
     *
     * @Route("/{id}/edit", name="review_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Review $review)
    {
        $deleteForm = $this->createDeleteForm($review);
        $editForm = $this->createForm('AppBundle\Form\ReviewType', $review);
        $editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('review_edit', array('id' => $review->getId()));
        }
        return $this->render('review/edit.html.twig', array(
            'review' => $review,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a review entity.
     *
     * @Route("/{id}", name="review_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Review $review)
    {
        $form = $this->createDeleteForm($review);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($review);
            $em->flush();
        }
        return $this->redirectToRoute('review_index');
    }
    /**
     * Creates a form to delete a review entity.
     *
     * @param Review $review The review entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Review $review)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('review_delete', array('id' => $review->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}
=======

}
>>>>>>> 996c611a09205c2a960c08c0fe9a0b0de2a8465f
