<?php

namespace Sibudec\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sibudec\AdminBundle\Entity\Acquisition;
use Sibudec\AdminBundle\Form\AcquisitionType;

/**
 * Acquisition controller.
 *
 * @Route("/admin/acquisition")
 */
class AcquisitionController extends Controller
{
    /**
     * Lists all Acquisition entities.
     *
     * @Route("/", name="admin_acquisition")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Acquisition')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Acquisition entity.
     *
     * @Route("/", name="admin_acquisition_create")
     * @Method("POST")
     * @Template("SibudecAdminBundle:Acquisition:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Acquisition();
        $form = $this->createForm(new AcquisitionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_acquisition_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Acquisition entity.
     *
     * @Route("/new", name="admin_acquisition_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Acquisition();
        $form   = $this->createForm(new AcquisitionType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Acquisition entity.
     *
     * @Route("/{id}", name="admin_acquisition_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Acquisition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acquisition entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Acquisition entity.
     *
     * @Route("/{id}/edit", name="admin_acquisition_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Acquisition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acquisition entity.');
        }

        $editForm = $this->createForm(new AcquisitionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Acquisition entity.
     *
     * @Route("/{id}", name="admin_acquisition_update")
     * @Method("PUT")
     * @Template("SibudecAdminBundle:Acquisition:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Acquisition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Acquisition entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AcquisitionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_acquisition_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Acquisition entity.
     *
     * @Route("/{id}", name="admin_acquisition_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SibudecAdminBundle:Acquisition')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Acquisition entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_acquisition'));
    }

    /**
     * Creates a form to delete a Acquisition entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
