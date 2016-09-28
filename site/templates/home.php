<?php snippet('header') ?>

<main class="main" role="main">
    <div class="container">
        <div class="jumbotron">
          <h1><?php echo $page->title()->html() ?></h1>
          <?php echo $page->text()->kirbytext() ?>
        </div>
    </div>

    <?php snippet('events') ?>

  </main>

<?php snippet('footer') ?>