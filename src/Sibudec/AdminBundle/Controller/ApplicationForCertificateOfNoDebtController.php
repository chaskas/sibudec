<?php

namespace Sibudec\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sibudec\AdminBundle\Entity\ApplicationForCertificateOfNoDebt;
use Sibudec\AdminBundle\Form\ApplicationForCertificateOfNoDebtType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;

/**
 * ApplicationForCertificateOfNoDebt controller.
 *
 * @Route("/admin/afcond")
 */
class ApplicationForCertificateOfNoDebtController extends Controller
{
    /**
     * Lists all ApplicationForCertificateOfNoDebt entities.
     *
     * @Route("/", name="admin_afcond")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:ApplicationForCertificateOfNoDebt')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new ApplicationForCertificateOfNoDebt entity.
     *
     * @Route("/", name="admin_afcond_create")
     * @Method("POST")
     * @Template("SibudecAdminBundle:ApplicationForCertificateOfNoDebt:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new ApplicationForCertificateOfNoDebt();
        $form = $this->createForm(new ApplicationForCertificateOfNoDebtType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_afcond_edit', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new ApplicationForCertificateOfNoDebt entity.
     *
     * @Route("/new", name="admin_afcond_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new ApplicationForCertificateOfNoDebt();
        $form   = $this->createForm(new ApplicationForCertificateOfNoDebtType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }


    /**
     * Displays a form to edit an existing ApplicationForCertificateOfNoDebt entity.
     *
     * @Route("/{id}/edit", name="admin_afcond_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:ApplicationForCertificateOfNoDebt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ApplicationForCertificateOfNoDebt entity.');
        }

        $editForm = $this->createForm(new ApplicationForCertificateOfNoDebtType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing ApplicationForCertificateOfNoDebt entity.
     *
     * @Route("/{id}", name="admin_afcond_update")
     * @Method("PUT")
     * @Template("SibudecAdminBundle:ApplicationForCertificateOfNoDebt:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SibudecAdminBundle:ApplicationForCertificateOfNoDebt')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ApplicationForCertificateOfNoDebt entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ApplicationForCertificateOfNoDebtType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_afcond_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a ApplicationForCertificateOfNoDebt entity.
     *
     * @Route("/{id}", name="admin_afcond_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SibudecAdminBundle:ApplicationForCertificateOfNoDebt')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ApplicationForCertificateOfNoDebt entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_afcond'));
    }

    /**
     * Creates a form to delete a ApplicationForCertificateOfNoDebt entity by id.
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

    /**
     * @Route("/certificate/send", name="admin_send_certificate")
     * @Method("GET")
     * @Template("SibudecAdminBundle:ApplicationForCertificateOfNoDebt:sendCertificate.pdf.twig")
     */
    public function sendCertificateAction()
    {
                //creating html source
                $html = $this->renderView('SibudecAdminBundle:ApplicationForCertificateOfNoDebt:sendCertificate.pdf.twig', array());

                //loading io_tcpdf library
                $pdf = $this->get('io_tcpdf');
                //do your stuff here

                //display pdf (it returns a Response Object)
                return $pdf->quick_pdf($html);
                // return array();

    }
}
