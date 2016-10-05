<?php snippet('header') ?>
<div class="container">
<main class="main" role="main">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h1><?php echo $page->title()->html() ?></h1>
            <?php echo $page->text()->kirbytext() ?>
        </div>
    </div>

  </main>
</div>
<?php snippet('footer') ?>