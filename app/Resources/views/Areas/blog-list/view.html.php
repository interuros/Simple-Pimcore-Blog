<!-- Main Content -->

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <!-- LISTS BLOGS -->
            <?php foreach ($this->blogList as $blog){ ?>
                <div class="post-preview">

                    <a href="<?=$this->path('blogpost', [
                        'id' => $blog->getId(),
                        'title' => preg_replace("/[^a-zA-Z0-9-_\.]/",
                            "_",
                            $blog->getTitle())
                    ]); ?>">
                        <h2 class="post-title">
                            <?=$blog->getTitle(); ?>
                        </h2>
                        <?php if($blog->getsubTitle()) { ?>
                            <h3 class="post-subtitle">
                                <?=$blog->getsubTitle(); ?>
                            </h3>
                        <?php } ?>
                    </a>

                    <p class="post-meta">
                        Posted by
                        <a href="#"><?=$blog->getAuthor(); ?></a>
                        <?php if($blog->getDateCreated()): ?>
                            on <?=$blog->getDateCreated()->format("d-F-Y H:m"); ?>
                        <?php endif; ?>
                    </p>

                </div>
                <hr>
            <?php } ?>


            <!-- pagination start -->
            <?=$this->render("Includes/paging.html.php",
                get_object_vars($this->blogList->getPages("Sliding")), [
                    'urlprefix' => $this->document->getFullPath() . '?page=',
                    'appendQueryString' => true
                ]); ?>
            <!-- pagination end -->

            <!-- Pager -->

        </div>
    </div>
</div>