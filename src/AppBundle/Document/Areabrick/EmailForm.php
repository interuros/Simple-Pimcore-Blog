<?php

namespace AppBundle\Document\Areabrick;

use Pimcore\Mail;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Tag\Area\Info;


class  EmailForm extends AbstractAreabrick {

    public function getName()
    {
        return "Email form";
    }

    public function action(Info $info)
    {

        $name = $info->getRequest()->get("name");
        $email = $info->getRequest()->get("email");
        $phone = $info->getRequest()->get("phone");
        $message = $info->getRequest()->get("message");

        if (!is_null($name) or !is_null($email) or !is_null($phone) or !is_null($message)):

            $params = array(
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "message" => $message
            );

            $email = Document::getById(11);

            $mail = new Mail();
            $mail->addTo("uros.djuric@asioso.com");
            $mail->setDocument($email);
            $mail->setParams($params);

            $mail->send();


            $info->view->success = true;

        endif;

    }



}