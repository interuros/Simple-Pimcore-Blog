<?php

namespace AppBundle\Document\Areabrick;

use AppBundle\Form\ContactFormType;
use Pimcore\Mail;
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

        $success = false;

        $form = $this->formFactory->create(ContactFormType::class);
        $form->handleRequest($info->getRequest());

        if($form->isValid()) {
            $data = $form->getData();
            $mail = new Mail();

            $emailDocument = Document::getById(11);

            $mail->addTo('uros.djuric@asioso.com');
            $mail->setDocument($emailDocument);
            $mail->setParams($data);
            $mail->send();

            $success = true;

        }

        $info->view->success = $success;
        $info->view->form = $form->createView();

    }

    public function getTemplateLocation()
    {
        return static::TEMPLATE_LOCATION_GLOBAL;
    }

}