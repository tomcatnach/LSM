<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h2>Upcoming Events</h2>
        <?php foreach(page('events')->children()->visible()->filterBy('date', '>', time())->sortBy('date')->limit(2) as $event): ?>
            <div class="upComeEvent">
                <h3><a href="<?php echo $event->url() ?>"><?php echo $event->title()->html() ?></a></h3>
                <p></p>
            </div>
        <?php endforeach ?>
    </div>
</div>