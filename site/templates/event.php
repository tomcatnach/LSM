<?php snippet('header') ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1><?php echo $page->title()->html() ?></h1>
            <h3><?php echo $page->subtitle()->html() ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <time datetime="<?php echo $page->date('c') ?>">
                <?php echo $page->date('d/m/Y') ?>
            </time><br>
            <?php echo $page->timestart()->html() ?> - 
            <?php echo $page->timeend()->html() ?><br>
            Where: <?php echo $page->location()->html() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo $page->text()->kirbytext() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo $page->ebrite()->html() ?>
        </div>
    </div>
</div>

<?php snippet('footer') ?>