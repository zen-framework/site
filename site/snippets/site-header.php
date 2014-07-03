<div id="header">
    <div id="header-content" class="measure">
        <div id="header-title"><h1><a href="/"><strong>ZEN</strong> Framework</a></h1></div>
        <div id="header-links">
            <ul class="navigation">
                <?php foreach($pages->visible() AS $p): ?>
                <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>