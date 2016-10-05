<?php snippet('header') ?>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h2>Upcoming Events</h2>
        <?php foreach($page->children()->visible()->filterBy('date', '>', time())->sortBy('date') as $subpage): ?>
            <div class="upComeEvent">
                <h3>
                    <a href="<?php echo $subpage->url() ?>">
                    <?php echo html($subpage->title()) ?>
                    </a>
                </h3>
                <h4>
                    <time datetime="<?php echo $subpage->date('c') ?>">
                        <?php echo $subpage->date('d/m/Y') ?>
                    </time>
                    <?php echo $subpage->timestart()->html() ?> -
                    <?php echo $subpage->timeend()->html() ?><br>
                </h4>
                <p>
                    <?php echo $subpage->text()->excerpt(80) ?> <a href="<?php echo $subpage->url() ?>">read&nbsp;more&nbsp;→</a>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</div>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h2>Past Events</h2>
        <?php foreach($page->children()->visible()->filterBy('date', '<', time())->sortBy('date') as $subpage): ?>
            <div class="upComeEvent">
                <h3>
                    <a href="<?php echo $subpage->url() ?>">
                        <?php echo html($subpage->title()) ?>
                    </a>
                </h3>
                <h4>
                    <time datetime="<?php echo $subpage->date('c') ?>">
                        <?php echo $subpage->date('d/m/Y') ?>
                    </time>
                    <?php echo $subpage->timestart()->html() ?> -
                    <?php echo $subpage->timeend()->html() ?><br>
                </h4>
                <p>
                    <?php echo $subpage->text()->excerpt(80) ?> <a href="<?php echo $subpage->url() ?>">read&nbsp;more&nbsp;→</a>
                </p>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php snippet('footer') ?>