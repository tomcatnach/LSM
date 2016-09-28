<?php snippet('header') ?>
<div class="container">
    <h2>Upcoming Events</h2>
    <ul>
        <?php foreach($page->children()->visible()->filterBy('date', '>', time())->sortBy('date') as $subpage): ?>
            <li>
                <a href="<?php echo $subpage->url() ?>">
                    <?php echo html($subpage->title()) ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<div class="container">
    <h2>Past Events</h2>
    <ul>
        <?php foreach($page->children()->visible()->filterBy('date', '<', time())->sortBy('date') as $subpage): ?>
            <li>
                <a href="<?php echo $subpage->url() ?>">
                    <?php echo html($subpage->title()) ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<?php snippet('footer') ?>