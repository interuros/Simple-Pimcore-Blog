<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Blogpost;
use Pimcore\Model\Document;
use Symfony\Component\HttpFoundation\Request;
use Zend\Paginator\Paginator;

class DefaultController extends FrontendController
{
    public function defaultAction(Request $request)
    {
        //list of blogs
        $blogList = new Blogpost\Listing();

        //pagination
        $paginator = new Paginator($blogList);
        $paginator->setCurrentPageNumber($request->get('page'));
        $paginator->setItemCountPerPage(3);

        $this->view->blogList = $paginator;
    }

}
