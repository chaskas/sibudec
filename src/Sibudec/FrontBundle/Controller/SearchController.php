<?php

namespace Sibudec\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sibudec\AdminBundle\Entity\Category;

class SearchController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => 'hola');;
    }

    /**
     * Lists all Category entities.
     *
     * @Route("/categories/ebooks", name="search_categories_ebooks")
     * @Template()
     */
    public function categoriesEbooksAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Category')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Category entities.
     *
     * @Route("/categories/journals", name="search_categories_journals")
     * @Template()
     */
    public function categoriesJournalsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Category')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Category entities.
     *
     * @Route("/categories/databases", name="search_categories_databases")
     * @Template()
     */
    public function categoriesDatabasesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Category')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Category entities.
     *
     * @Route("/category/{id}/ebooks", name="search_ebooks_by_category")
     * @Template()
     */
    public function ebooksByCategoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Ebook')->findBy(array('category' => $id, 'broken' => false));
        $categories = $em->getRepository('SibudecAdminBundle:Category')->findAll();

        $category = $em->getRepository('SibudecAdminBundle:Category')->find($id);


        return array(
            'entities' => $entities,
            'categories' => $categories,
            'id' => $id,
            'category' => $category
        );
    }

    /**
     * Lists all Category entities.
     *
     * @Route("/category/{id}/journals", name="search_journals_by_category")
     * @Template()
     */
    public function journalsByCategoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Ebook')->findByCategory($id);
        $categories = $em->getRepository('SibudecAdminBundle:Category')->findAll();

        return array(
            'entities' => $entities,
            'categories' => $categories,
            'id' => $id
        );
    }

    /**
     * Lists all Category entities.
     *
     * @Route("/category/{id}/databases", name="search_databases_by_category")
     * @Template()
     */
    public function databasesByCategoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:DB')->findAll();
        $categories = $em->getRepository('SibudecAdminBundle:Category')->findAll();
        
        return array(
            'entities' => $entities,
            'categories' => $categories,
            'id' => $id
        );
    }

    /**
     * Reporta un enlace Roto para Ebooks
     *
     * @Route("/ebooks/{id}/broken/cat/{cat}/", name="broken_ebook")
     */
    public function brokenLinkEbookAction($id,$cat)
    {
        $em = $this->getDoctrine()->getManager();

        $ebook = $em->getRepository('SibudecAdminBundle:Ebook')->find($id);

        $ebook->setBroken(true);

        $em->persist($ebook);
        $em->flush();

        return $this->redirect($this->generateUrl('search_ebooks_by_category', array('id' => $cat)));

    }

}
