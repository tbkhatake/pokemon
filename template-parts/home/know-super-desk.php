<?php $section5 = get_field('section5')?>
<section class="know-super-desktop">
    <h2 class="section-title"><?php echo($section5['section5-title']); ?></h2>
    <?php foreach($section5['section5-slides'] as $slide):?>
        <div class="know-super-desktop-slides">
            <img class="slide-img" src="<?=$slide['slide-image']['url'];?>" alt="img1">
            <div class="slide-wraper">
                <h3 class="slide-title"><?=$slide['slide-title'];?></h3>
                <p class="slide-content"><?=$slide['slide-text'];?></p>
            </div>
        </div>
    <?php endforeach; ?>
</section>
