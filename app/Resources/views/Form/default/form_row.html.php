<?php

    $isValid = $form->vars['valid'];

?>

<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <?=$this->form()->label($form, null) ?>

        <?=$this->form()->widget($form, [
            "attr" => [
                "class" => "form-control"
            ]
        ]) ?>

        <p class="help-block text-danger"></p>
    </div>
</div>