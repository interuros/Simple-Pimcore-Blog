<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
    *{
        color: rgba(3, 0, 5, 0.89);
    }

    .email-container{
        background-color: #FbFbFb;
    }

    img{
        margin: 0 auto;
        margin-bottom: 30px;
    }
</style>

<div class="container email-container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="https://fuzati.com/wp-content/uploads/2016/12/Bootstrap-Logo.png" alt="Logo">
        </div>
        <div class="col-md-12">
            <h1 class="text-center"><?=$this->textarea("email-title", [
                    "height" => 150
                ]); ?>
            </h1>
        </div>
        <div class="col-md-12">
            <?=$this->wysiwyg("email"); ?>
        </div>
    </div>
</div>