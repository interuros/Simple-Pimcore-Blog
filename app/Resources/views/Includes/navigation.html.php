<!-- Navigation -->
<?php

    use Pimcore\Model\Document\Page;

    if(!$this->document instanceof  Page) {
        $this->document = Page::getById(1);
    }

    $navStartNode = $this->document->getProperty("navigationRoot");

    if(!$navStartNode instanceof  Page) {
        $navStartNode = Page::getById(1);
    }

    $mainNavigation = $this->navigation()->buildNavigation($this->document, $navStartNode);
?>


<!-- ADDS BOOTSTRAP CSS IN EDITMODE FOR BETTER LOOKS AND EASIER USAGE -->
<?php if ($this->editmode): ?>
    <!-- Bootstrap Core CSS -->
    <link href="/static/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<?php endif; ?>

<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <?=$this->link("homepage", ["class" => "navbar-brand"]); ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/">Home</a>
                </li>

                <?php foreach ($mainNavigation as $page) { ?>

                    <li>
                        <a href="<?=$page->getHref(); ?>"><?=$page->getLabel(); ?></a>
                    </li>

                <?php } ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
