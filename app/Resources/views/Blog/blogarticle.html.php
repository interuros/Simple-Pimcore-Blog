<?=$this->extend("layout.html.php"); ?>

<!-- Set your background image for this header on the line below. -->
<header class="intro-header"
        style="background-image: url(
        <?php if ($this->blogarticle->getHeaderbackgroundimage()) : ?>
            <?=$this->blogarticle->getHeaderbackgroundimage()->getThumbnail("headerbackground"); ?>
        <?php else: ?>
            /static/img/post-bg.jpg
        <?php endif; ?>
        )">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1><?=$this->blogarticle->getTitle(); ?></h1>
                    <h2 class="subheading"><?=$this->blogarticle->getsubTitle(); ?></h2>
                    <span class="meta">
                        Posted by
                        <a href="#"><?=$this->blogarticle->getAuthor(); ?></a>
                        <?php if($blogarticle->getDateCreated()): ?>
                            on <?=$blogarticle->getDateCreated()->format("d-F-Y H:m"); ?>
                        <?php endif; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               <?php

                    if ($this->blogarticle->getContent()) {

                        echo $this->blogarticle->getContent();

                    }

               ?>
            </div>
        </div>
    </div>
</article>