<?php

namespace AppBundle\Document\Areabrick;

use Pimcore\Model\Document\Tag\Area\Info;
use Pimcore\Model\DataObject\Blogpost;
use Zend\Paginator\Paginator;

class BlogList extends AbstractAreabrick{

    public function getName()
    {
        return "Blog list!";
    }

    public function action(Info $info)
    {
        //list of blogs
        $blogList = new Blogpost\Listing();

        //pagination
        $paginator = new Paginator($blogList);
        $paginator->setCurrentPageNumber($info->getParam('page'));
        $paginator->setItemCountPerPage(3);

        $info->view->blogList = $paginator;

    }

}