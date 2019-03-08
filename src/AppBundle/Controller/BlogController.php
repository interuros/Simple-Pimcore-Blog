<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\DataObject\Blogpost;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends FrontendController
{

    public function blogarticleAction(Request $request) {
        $blogarticle = Blogpost::getById($request->get('id'));
        $this->view->blogarticle = $blogarticle;
    }

}
