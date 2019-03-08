<?php

namespace AppBundle\Controller;

use Pimcore\Model\Document\Page;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Blogpost;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends FrontendController
{

    public function blogarticleAction(Request $request) {
        $blogarticle = Blogpost::getById($request->get('id'));

        $title = $blogarticle->getTitle();

        $this->view->title = $title;
        $this->view->blogarticle = $blogarticle;

    }

}
