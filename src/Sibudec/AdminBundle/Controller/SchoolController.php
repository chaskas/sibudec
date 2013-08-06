<?php

namespace Sibudec\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sibudec\AdminBundle\Entity\School;
use Sibudec\AdminBundle\Form\SchoolType;

/**
 * School controller.
 *
 * @Route("/admin/school")
 */
class SchoolController extends Controller
{
    /**
     * Lists all School entities.
     *
     * @Route("/", name="admin_school")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:School')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new School entity.
     *
     * @Route("/", name="admin_school_create")
     * @Method("POST")
     * @Template("SibudecAdminBundle:School:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new School();
        $form = $this->createForm(new SchoolType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_school_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new School entity.
     *
     * @Route("/new", name="admin_school_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new School();
        $form   = $this->createForm(new SchoolType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a School entity.
     *
     * @Route("/{id}", name="admin_school_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:School')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find School entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing School entity.
     *
     * @Route("/{id}/edit", name="admin_school_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:School')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find School entity.');
        }

        $editForm = $this->createForm(new SchoolType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing School entity.
     *
     * @Route("/{id}", name="admin_school_update")
     * @Method("PUT")
     * @Template("SibudecAdminBundle:School:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:School')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find School entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SchoolType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_school_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a School entity.
     *
     * @Route("/{id}", name="admin_school_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SibudecAdminBundle:School')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find School entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_school'));
    }

    /**
     * Creates a form to delete a School entity by id.
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
