<?php

namespace Sibudec\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sibudec\AdminBundle\Entity\AccessType;
use Sibudec\AdminBundle\Form\AccessTypeType;

/**
 * AccessType controller.
 *
 * @Route("/admin/accesstype")
 */
class AccessTypeController extends Controller
{
    /**
     * Lists all AccessType entities.
     *
     * @Route("/", name="admin_accesstype")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:AccessType')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new AccessType entity.
     *
     * @Route("/", name="admin_accesstype_create")
     * @Method("POST")
     * @Template("SibudecAdminBundle:AccessType:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new AccessType();
        $form = $this->createForm(new AccessTypeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_accesstype_edit', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new AccessType entity.
     *
     * @Route("/new", name="admin_accesstype_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new AccessType();
        $form   = $this->createForm(new AccessTypeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing AccessType entity.
     *
     * @Route("/{id}/edit", name="admin_accesstype_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:AccessType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccessType entity.');
        }

        $editForm = $this->createForm(new AccessTypeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing AccessType entity.
     *
     * @Route("/{id}", name="admin_accesstype_update")
     * @Method("PUT")
     * @Template("SibudecAdminBundle:AccessType:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:AccessType')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AccessType entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AccessTypeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_accesstype_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a AccessType entity.
     *
     * @Route("/{id}", name="admin_accesstype_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SibudecAdminBundle:AccessType')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AccessType entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_accesstype'));
    }

    /**
     * Creates a form to delete a AccessType entity by id.
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
