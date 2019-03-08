<?=$this->extend("layout.html.php"); ?>

<?php if($this->editmode and $this->areablock("header")->getCount() == 0): ?>
    <br>
    <br>
    <br>
<?php endif; ?>

<?=$this->areablock("header"); ?>
