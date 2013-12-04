<?php

namespace Sibudec\FrontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sibudec\AdminBundle\Entity\ApplicationForCertificateOfNoDebt;
use Sibudec\AdminBundle\Form\ApplicationForCertificateOfNoDebtType;

use Sibudec\AdminBundle\Entity\RequestedItem;
use Sibudec\AdminBundle\Form\RequestedItemType;

use Sibudec\AdminBundle\Entity\SuggestedBook;
use Sibudec\AdminBundle\Form\SuggestedBookType;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/certificate/apply", name="application_for_certificate")
     * @Template()
     */
    public function applyForCertificateAction(Request $request)
    {
      $entity = new ApplicationForCertificateOfNoDebt();
        $form   = $this->createForm(new ApplicationForCertificateOfNoDebtType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new ApplicationForCertificateOfNoDebt entity.
     *
     * @Route("/certificate/create", name="application_for_certificate_create")
     * @Method("POST")
     * @Template()
     */
    public function applyForCertificateCreateAction(Request $request)
    {
        $entity  = new ApplicationForCertificateOfNoDebt();
        $form = $this->createForm(new ApplicationForCertificateOfNoDebtType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('application_for_certificate_success'));

        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * @Route("/certificate/apply/success", name="application_for_certificate_success")
     * @Template()
     */
    public function applyForCertificateSuccessAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/item/apply", name="application_for_item")
     * @Template()
     */
    public function applyForItemAction(Request $request)
    {
        $entity = new RequestedItem();
        $form   = $this->createForm(new RequestedItemType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new ApplicationForCertificateOfNoDebt entity.
     *
     * @Route("/item/create", name="application_for_item_create")
     * @Method("POST")
     * @Template()
     */
    public function applyForItemCreateAction(Request $request)
    {
        $entity  = new RequestedItem();
        $form = $this->createForm(new RequestedItemType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('application_for_item_success'));

        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * @Route("/item/apply/success", name="application_for_item_success")
     * @Template()
     */
    public function applyForItemSuccessAction(Request $request)
    {
        return array();
    }

    /**
     * @Route("/suggestedbook/apply", name="application_for_suggestedbook")
     * @Template()
     */
    public function suggestedBookAction(Request $request)
    {
        $entity = new SuggestedBook();
        $form   = $this->createForm(new SuggestedBookType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new ApplicationForCertificateOfNoDebt entity.
     *
     * @Route("/suggestedbook/create", name="application_for_suggestedbook_create")
     * @Method("POST")
     * @Template()
     */
    public function suggestedBookCreateAction(Request $request)
    {
        $entity  = new SuggestedBook();
        $form = $this->createForm(new SuggestedBookType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('application_for_suggestedbook_success'));

        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * @Route("/suggestedbook/apply/success", name="application_for_suggestedbook_success")
     * @Template()
     */
    public function suggestedBookSuccessAction(Request $request)
    {
        return array();
    }
}
