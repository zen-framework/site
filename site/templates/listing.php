<?php snippet('header') ?>
<?php snippet('site-header') ?>
<?php snippet('nav') ?>

<div id="back" class="measure">
    <div class="grp grp-one">
        <div class="col col-one">
            <?php if($page->title() == "Designs"): ?>
                <?php snippet('designs-list') ?>
            <?php elseif($page->title() == "Components"): ?>
                <?php snippet('components-list') ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php snippet('site-footer') ?>
<?php snippet('footer') ?>