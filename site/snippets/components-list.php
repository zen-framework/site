<?php foreach($pages->find('components')->children()->visible()->flip() as $component): ?>
    <div class="block">
        <div class="block-image">
            <!-- Can Be Used For Photo Or Icon -->
            <img src="http://placehold.it/300x250" alt="">
        </div>
        <div class="block-content">
            
            <h2><?php echo $component->title() ?></h2>
            <p><?php echo excerpt($component->text(), 300) ?></p>
            <a href="" class="btn">Learn More</a>

        </div>
    </div>
<?php endforeach ?>