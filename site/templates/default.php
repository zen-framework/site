<?php snippet('head') ?>
<?php snippet('header') ?>

<div id="core">
    <div class="grp grp-one">
        <div class="col col-one">
            <?php if($page->title() == "Designs"): ?>
                <?php snippet('designs-list') ?>
            <?php elseif($page->title() == "Modules"): ?>
                <?php snippet('modules-list') ?>
            <?php else: ?>
                <h1><?php echo ($page->title()); ?></h1>
                <?php echo kirbytext($page->text()); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php snippet('footer') ?>