<!-- Footer -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">


                <!-- SOCIAL ICONS BLOCK -->
                <?php $block = $this->block("footer_icons", ["manual" => true])->start(); ?>
                <ul class="list-inline text-center">

                    <?php while ($block->loop()) { ?>
                        <?php $block->blockConstruct(); ?>
                            <?php $block->blockStart(); ?>
                                <li>

                                    <?php if($this->editmode): ?>

                                        <p>ICON (COPY ICON FROM FONTAWESOME)</p>
                                        <?=$this->input("icon", ["width" => 200]); ?>

                                        <p>ICON LINK</p>
                                        <?=$this->input("icon_link");  ?>

                                    <?php else: ?>
                                        <a href="<?=$this->input("icon_link")->getData(); ?>" target="_blank">
                                                <span class="fa-stack fa-lg">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <?=$this->input("icon")->getData(); ?>
                                                </span>
                                        </a>
                                    <?php endif; ?>
                                </li>
                            <?php $block->blockEnd(); ?>
                        <?php $block->blockDestruct(); ?>
                    <?php } ?>

                </ul>
                <?php $block->end(); ?>

                <p class="copyright text-muted">Copyright &copy; <?=$this->input("copyright", ["width" => 200]); ?> 2016</p>
            </div>
        </div>
    </div>
</footer>
