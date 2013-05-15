<?php

namespace Sibudec\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sibudec\AdminBundle\Entity\Ebook;
use Sibudec\AdminBundle\Form\EbookType;

/**
 * Ebook controller.
 *
 * @Route("/admin/ebook")
 */
class EbookController extends Controller
{
    /**
     * Lists all Ebook entities.
     *
     * @Route("/", name="admin_ebook")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Ebook')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Ebook entity.
     *
     * @Route("/", name="admin_ebook_create")
     * @Method("POST")
     * @Template("SibudecAdminBundle:Ebook:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Ebook();
        $form = $this->createForm(new EbookType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_ebook_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Ebook entity.
     *
     * @Route("/new", name="admin_ebook_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Ebook();
        $form   = $this->createForm(new EbookType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Ebook entity.
     *
     * @Route("/{id}", name="admin_ebook_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Ebook')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ebook entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Ebook entity.
     *
     * @Route("/{id}/edit", name="admin_ebook_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Ebook')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ebook entity.');
        }

        $editForm = $this->createForm(new EbookType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Ebook entity.
     *
     * @Route("/{id}", name="admin_ebook_update")
     * @Method("PUT")
     * @Template("SibudecAdminBundle:Ebook:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Ebook')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ebook entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EbookType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_ebook_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Ebook entity.
     *
     * @Route("/{id}", name="admin_ebook_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SibudecAdminBundle:Ebook')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ebook entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_ebook'));
    }

    /**
     * Creates a form to delete a Ebook entity by id.
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
