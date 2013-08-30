<?php

namespace Sibudec\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sibudec\AdminBundle\Entity\Editorial;
use Sibudec\AdminBundle\Form\EditorialType;

/**
 * Editorial controller.
 *
 * @Route("/admin/editorial")
 */
class EditorialController extends Controller
{
    /**
     * Lists all Editorial entities.
     *
     * @Route("/", name="admin_editorial")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Editorial')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Editorial entity.
     *
     * @Route("/", name="admin_editorial_create")
     * @Method("POST")
     * @Template("SibudecAdminBundle:Editorial:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Editorial();
        $form = $this->createForm(new EditorialType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_editorial_edit', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Editorial entity.
     *
     * @Route("/new", name="admin_editorial_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Editorial();
        $form   = $this->createForm(new EditorialType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Editorial entity.
     *
     * @Route("/{id}/edit", name="admin_editorial_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Editorial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Editorial entity.');
        }

        $editForm = $this->createForm(new EditorialType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Editorial entity.
     *
     * @Route("/{id}", name="admin_editorial_update")
     * @Method("PUT")
     * @Template("SibudecAdminBundle:Editorial:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Editorial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Editorial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EditorialType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_editorial_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Editorial entity.
     *
     * @Route("/{id}", name="admin_editorial_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SibudecAdminBundle:Editorial')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Editorial entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_editorial'));
    }

    /**
     * Creates a form to delete a Editorial entity by id.
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
