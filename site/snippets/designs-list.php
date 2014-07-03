<?php foreach($pages->find('designs')->children()->visible()->flip() as $design): ?>
    <div class="block">
        <div class="block-image">
            <!-- Can Be Used For Photo Or Icon -->
            <img src="http://placehold.it/300x250" alt="">
        </div>
        <div class="block-content">
            
            <h2><?php echo $design->title() ?></h2>
            <p><?php echo excerpt($design->text(), 300) ?></p>
            <a href="" class="btn">Learn More</a>

        </div>
    </div>
<?php endforeach ?>