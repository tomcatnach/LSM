<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $site->url() ?>"><img alt="LSM" src="<?php echo url('assets/images/logolsm.png') ?>"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php foreach($pages->visible() as $p): ?>
                        <li>
                            <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</nav>