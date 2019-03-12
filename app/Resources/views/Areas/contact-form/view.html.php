<!-- Main Content -->

<?php


/** @var \Symfony\Component\Form\FormView $form */
$form = $this->form;

?>


<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p><?=$this->input("contact_text"); ?></p>

            <?php  if ($this->success) { ?>
                <div class="alert alert-success" role="alert">
                    Your message was sent. We will reply in no time!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <?php
            $this->form()->setTheme($form, ':Form/default');
            ?>
            <?=$this->form()->start($form, [
               "attr" => [
                   "id" => "contactForm",
                   "novalidate" => false
                ]
            ]); ?>

                <?=$this->form()->row($form['name']); ?>
                <?=$this->form()->row($form['email']); ?>
                <?=$this->form()->row($form['phone']); ?>
                <?=$this->form()->row($form['message']); ?>

                <br>

                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            <?= $this->form()->end($form); ?>

        </div>
    </div>
</div>
