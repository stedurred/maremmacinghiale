<?php

namespace MaremmaCinghialeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MaremmaCinghialeBundle\Entity\Squadra;
use MaremmaCinghialeBundle\Form\SquadraType;

/**
 * Squadra controller.
 *
 */
class SquadraController extends Controller
{
    /**
     * Lists all Squadra entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $squadras = $em->getRepository('MaremmaCinghialeBundle:Squadra')->findAll();

        return $this->render('squadra/index.html.twig', array(
            'squadras' => $squadras,
        ));
    }

    /**
     * Creates a new Squadra entity.
     *
     */
    public function newAction(Request $request)
    {
        $squadra = new Squadra();
        $form = $this->createForm('MaremmaCinghialeBundle\Form\SquadraType', $squadra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($squadra);
            $em->flush();

            return $this->redirectToRoute('squadra_show', array('id' => $squadra->getId()));
        }

        return $this->render('squadra/new.html.twig', array(
            'squadra' => $squadra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Squadra entity.
     *
     */
    public function showAction(Squadra $squadra)
    {
        $deleteForm = $this->createDeleteForm($squadra);

        return $this->render('squadra/show.html.twig', array(
            'squadra' => $squadra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Squadra entity.
     *
     */
    public function editAction(Request $request, Squadra $squadra)
    {
        $deleteForm = $this->createDeleteForm($squadra);
        $editForm = $this->createForm('MaremmaCinghialeBundle\Form\SquadraType', $squadra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($squadra);
            $em->flush();

            return $this->redirectToRoute('squadra_edit', array('id' => $squadra->getId()));
        }

        return $this->render('squadra/edit.html.twig', array(
            'squadra' => $squadra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Squadra entity.
     *
     */
    public function deleteAction(Request $request, Squadra $squadra)
    {
        $form = $this->createDeleteForm($squadra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($squadra);
            $em->flush();
        }

        return $this->redirectToRoute('squadra_index');
    }

    /**
     * Creates a form to delete a Squadra entity.
     *
     * @param Squadra $squadra The Squadra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Squadra $squadra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('squadra_delete', array('id' => $squadra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
