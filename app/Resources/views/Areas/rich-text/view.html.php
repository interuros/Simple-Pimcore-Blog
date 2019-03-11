<?php if ($this->editmode or !$this->wysiwyg("content")->isEmpty()): ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?=$this->wysiwyg("content"); ?>
        </div>
    </div>
</div>
<?php endif; ?>