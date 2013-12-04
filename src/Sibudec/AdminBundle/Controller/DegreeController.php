<?php

namespace Sibudec\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sibudec\AdminBundle\Entity\Degree;
use Sibudec\AdminBundle\Form\DegreeType;

/**
 * Degree controller.
 *
 * @Route("/admin/degree")
 */
class DegreeController extends Controller
{
    /**
     * Lists all Degree entities.
     *
     * @Route("/", name="admin_degree")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Degree')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Degree entity.
     *
     * @Route("/", name="admin_degree_create")
     * @Method("POST")
     * @Template("SibudecAdminBundle:Degree:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Degree();
        $form = $this->createForm(new DegreeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_degree_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Degree entity.
     *
     * @Route("/new", name="admin_degree_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Degree();
        $form   = $this->createForm(new DegreeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Degree entity.
     *
     * @Route("/{id}", name="admin_degree_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Degree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Degree entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Degree entity.
     *
     * @Route("/{id}/edit", name="admin_degree_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Degree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Degree entity.');
        }

        $editForm = $this->createForm(new DegreeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Degree entity.
     *
     * @Route("/{id}", name="admin_degree_update")
     * @Method("PUT")
     * @Template("SibudecAdminBundle:Degree:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:Degree')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Degree entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DegreeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_degree_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Degree entity.
     *
     * @Route("/{id}", name="admin_degree_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SibudecAdminBundle:Degree')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Degree entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_degree'));
    }

    /**
     * Creates a form to delete a Degree entity by id.
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
