<?php snippet('header') ?>

<main class="main" role="main">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
              <h1><?php echo $page->title()->html() ?></h1>
              <?php echo $page->text()->kirbytext() ?>
            </div>
        </div>
    </div>

    <?php snippet('upcomingEvents') ?>

  </main>

<?php snippet('footer') ?>