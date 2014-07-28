<?php foreach($pages->find('modules')->children()->visible() as $module): ?>
    <div class="block">
        <div class="block-image">
            <!-- Can Be Used For Photo Or Icon -->
            <img src="http://placehold.it/300x250" alt="">
        </div>
        <div class="block-content">
            
            <h2><?php echo $module->title() ?></h2>
            <p><?php echo excerpt($module->text(), 300) ?></p>
            <ul class="chain">
                <li><a href="#" class="button">Learn More</a></li>
                <li><a href="#" class="button">View Snippet</a></li>
            </ul>

        </div>
    </div>
<?php endforeach ?>