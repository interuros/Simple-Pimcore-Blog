<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php

        if ($this->title) {
            $this->headTitle()->set($this->title);
        } else {
            if ($this->document->getTitle())
                $this->headTitle()->set($this->document->getTitle());
            else
                $this->headTitle()->set("Uros");
        }

        //APPEND DESCRIPTION TO META TAGS IF THERE IS ANY
        if ($this->document->getDescription()) {
            $this->headMeta()->appendName("description", $this->document->getDescription());
        } else {
            $this->headMeta()->appendName("description", "My Blog page by me!");
        }

        //APPEND STYLESHEETS
        $this->headLink()->appendStylesheet("/static/vendor/bootstrap/css/bootstrap.min.css", "screen", false, ["rel" => "stylesheet", "type" => "text/css"])
                         ->appendStylesheet("/static/css/clean-blog.min.css", "screen", false, ["rel" => "stylesheet", "type" => "text/css"])
                         ->appendStylesheet("/static/vendor/font-awesome/css/font-awesome.min.css", "screen", false, ["rel" => "stylesheet", "type" => "text/css"])
                         ->appendStylesheet("//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic", "screen", false, ["rel" => "stylesheet", "type" => "text/css"])
                         ->appendStylesheet("//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800", "screen", false, ["rel" => "stylesheet", "type" => "text/css"]);

        //APPEND HEAD SCRIPTS
        $this->headScript()->appendFile("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js", "text/javascript",
                                        ["conditional" => "if lt IE 8"])
                            ->appendFile("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js", "text/javascript",
                                        ["conditional" => "if lt IE 8"]);


        echo $this->headMeta();
        echo $this->headTitle();
        echo $this->headLink();


    ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <?=$this->headScript(); ?>

</head>

<body>

<!-- Navigation -->
<?php if (!$this->editmode): ?>
<?= $this->inc("/includes/navigation"); ?>
 <?php endif; ?>

<!-- OUTPUT CONTENT HERE -->
<?php $this->slots()->output("_content"); ?>
<hr>

<!-- Footer -->
<?= $this->inc("/includes/footer"); ?>

<!-- jQuery -->
<script src="/static/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/static/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="/static/js/jqBootstrapValidation.js"></script>
<!-- <script src="/static/js/contact_me.js"></script> -->

<!-- Theme JavaScript -->
<script src="/static/js/clean-blog.min.js"></script>

</body>

</html>
