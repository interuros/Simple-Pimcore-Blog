<?php

namespace AppBundle\Document\Areabrick;

use AppBundle\Form\ContactFormType;
use Pimcore\File;
use Pimcore\Mail;
use Pimcore\Model\DataObject\Contacts;
use Pimcore\Model\DataObject\Folder;
use Pimcore\Model\Document;
use Pimcore\Model\Document\Tag\Area\Info;
use Symfony\Component\Form\FormFactoryInterface;

class ContactForm extends AbstractAreabrick {
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    public function getName()
    {
        return "Contact Form";
    }

    public function action(Info $info) {

        $form = $this->formFactory->create(ContactFormType::class);
        $form->handleRequest($info->getRequest());


        if ($form->isSubmitted()) {

            //GETS DATA FROM CONTACT FORM
            $data = $form->getData();

            $name = $data["name"];
            $email = $data["email"];
            $phone = $data["phone"];
            $message = $data["message"];

            if(!is_null($name) and !is_null($email) and !is_null($phone) and !is_null($message)) {

                //HTML STRUCTURE FOR MAIL
                $emailDocument = Document::getById(11);

                //SEND MAIL
                $mail = new Mail();
                $mail->addTo('uros.djuric@asioso.com');
                $mail->setDocument($emailDocument);
                $mail->setParams($data);
                $mail->send();


                //AD EMAIL TO EMAIL OBJECT
                $emailObject = new Contacts();
                $emailObject->getId();
                $emailObject->setKey(File::getValidFilename($data["email"].'('.date('d-m-Y H:i:s').')'));
                $emailObject->setParentId(8);
                $emailObject->setFirstname($name);
                $emailObject->setEmail($email);
                $emailObject->setPhone($phone);
                $emailObject->setMessage($message);

                $emailObject->save();

                $info->view->success = true;

            } else {
                $info->view->submitted = "submitted";
                $info->view->success = false;
            }


        }

        $info->view->form = $form->createView();

    }

    public function getTemplateLocation()
    {
        return static::TEMPLATE_LOCATION_GLOBAL;
    }

}