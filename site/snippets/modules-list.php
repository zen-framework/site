<?php foreach($pages->find('modules')->children()->visible()->flip() as $module): ?>
    <div class="block">
        <div class="block-image">
            <!-- Can Be Used For Photo Or Icon -->
            <img src="http://placehold.it/300x250" alt="">
        </div>
        <div class="block-content">
            
            <h2><?php echo $module->title() ?></h2>
            <p><?php echo excerpt($module->text(), 300) ?></p>
            <a href="" class="button">Learn More</a>

        </div>
    </div>
<?php endforeach ?>