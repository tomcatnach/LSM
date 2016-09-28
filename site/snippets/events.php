<div class="container">
    <h2>Upcoming Events</h2>
    <ul class="teaser cf">
        <?php foreach(page('events')->children()->visible()->filterBy('date', '>', time())->sortBy('date')->limit(2) as $event): ?>
            <li>
                <h3><a href="<?php echo $event->url() ?>"><?php echo $event->title()->html() ?></a></h3>
                <p><?php echo $event->text()->excerpt(80) ?> <a href="<?php echo $event->url() ?>">read&nbsp;more&nbsp;→</a></p>
                <?php if($image = $event->images()->sortBy('sort', 'asc')->first()): ?>
                    <a href="<?php echo $event->url() ?>">
                        <img src="<?php echo $image->url() ?>" alt="<?php echo $event->title()->html() ?>" >
                    </a>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
</div>