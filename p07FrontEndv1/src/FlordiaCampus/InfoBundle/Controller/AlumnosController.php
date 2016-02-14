<?php

namespace FlordiaCampus\InfoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FlordiaCampus\InfoBundle\Entity\Alumnos;
use FlordiaCampus\InfoBundle\Form\AlumnosType;

/**
 * Alumnos controller.
 *
 */
class AlumnosController extends Controller
{
    /**
     * Lists all Alumnos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $alumnos = $em->getRepository('FlordiaCampusInfoBundle:Alumnos')->findAll();

        return $this->render('alumnos/index.html.twig', array(
            'alumnos' => $alumnos,
        ));
    }

    /**
     * Creates a new Alumnos entity.
     *
     */
    public function newAction(Request $request)
    {
        $alumno = new Alumnos();
        $form = $this->createForm('FlordiaCampus\InfoBundle\Form\AlumnosType', $alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();

            return $this->redirectToRoute('alumnos_show', array('id' => $alumno->getId()));
        }

        return $this->render('alumnos/new.html.twig', array(
            'alumno' => $alumno,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Alumnos entity.
     *
     */
    public function showAction(Alumnos $alumno)
    {
        $deleteForm = $this->createDeleteForm($alumno);

        return $this->render('alumnos/show.html.twig', array(
            'alumno' => $alumno,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Alumnos entity.
     *
     */
    public function editAction(Request $request, Alumnos $alumno)
    {
        $deleteForm = $this->createDeleteForm($alumno);
        $editForm = $this->createForm('FlordiaCampus\InfoBundle\Form\AlumnosType', $alumno);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();

            return $this->redirectToRoute('alumnos_edit', array('id' => $alumno->getId()));
        }

        return $this->render('alumnos/edit.html.twig', array(
            'alumno' => $alumno,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Alumnos entity.
     *
     */
    public function deleteAction(Request $request, Alumnos $alumno)
    {
        $form = $this->createDeleteForm($alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($alumno);
            $em->flush();
        }

        return $this->redirectToRoute('alumnos_index');
    }

    /**
     * Creates a form to delete a Alumnos entity.
     *
     * @param Alumnos $alumno The Alumnos entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Alumnos $alumno)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alumnos_delete', array('id' => $alumno->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
