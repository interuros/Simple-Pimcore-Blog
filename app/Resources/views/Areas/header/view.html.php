<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->

<?php if ($this->editmode): ?>
    <p>CHOOSE YOUR BACKGROUND IMAGE</p>
    <?= $this->image("background_image", [
            "thumbnail" => "headerbackground",
            "width" => 200
    ]) ?>
<?php endif; ?>

<?php if($this->editmode or !$this->input("header_title")->isEmpty()): ?>
<header class="intro-header"
        style="background-image: url(
            <?php if($this->image("backgroung_image")): ?>
                <?=$this->image("background_image")->getThumbnail("headerbackground")?>
            <?php else: ?>
                /static/img/home-bg.jpg
            <?php endif; ?>
        )"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?=$this->input("header_title", [
                            "placeholder" => "The title goes here!"
                        ]); ?></h1>
                    <hr class="small">
                    <span class="subheading">
                        <?=$this->input("subheading", [
                            "placeholder" => "The subheading goes here"
                        ]); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<?php endif; ?>