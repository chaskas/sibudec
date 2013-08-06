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
     * @Route("/categories/magazines", name="search_categories_magazines")
     * @Template()
     */
    public function categoriesMagazinesAction()
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

        $entities = $em->getRepository('SibudecAdminBundle:Ebook')->findByCategory($id);

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Category entities.
     *
     * @Route("/category/{id}/magazines", name="search_magazines_by_category")
     * @Template()
     */
    public function magazinesByCategoryAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Ebook')->findByCategory($id);

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Category entities.
     *
     * @Route("/category/{id}/databases", name="search_databases_by_category")
     * @Template()
     */
    public function databasesByCategoryAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SibudecAdminBundle:Ebook')->findByCategory($id);
        
        return array(
            'entities' => $entities,
        );
    }

}
