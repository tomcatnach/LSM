<?php snippet('header') ?>

<div class="container">
    <h1><?php echo $page->title()->html() ?></h1>
    <h3><?php echo $page->subtitle()->html() ?></h3>
</div>
<div class="container">
    <time datetime="<?php echo $page->date('c') ?>">
        <?php echo $page->date('d/m/Y') ?>
    </time>
    <?php echo $page->timestart()->html() ?>
    <?php echo $page->timeend()->html() ?>
</div>
<div class="container">
    <?php echo $page->text()->kirbytext() ?>
</div>

<div class="container">
    <?php echo $page->ebrite()->html() ?>
</div>

<?php snippet('footer') ?>