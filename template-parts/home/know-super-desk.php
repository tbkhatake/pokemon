<?php $section5 = get_field('section5')?>
<section class="know-super-desktop">
    <h2 class="section-title"><?php echo($section5['section5-title']); ?></h2>
    <ul class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
        <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
            <img class="controls-btn" src="<?=get_template_directory_uri()?>/images/left-arrow.svg" alt="left-arrow">
        </li>
        <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
            <img class="controls-btn" src="<?=get_template_directory_uri()?>/images/right-arrow.svg" alt="right-arrow">
        </li>
    </ul>
    <div class="slider-cont">
        <div class="slider-ksd">
            <?php foreach($section5['section5-slides'] as $slide):?>
                    <div class="slide-card">
                        <img class="slide-img" src="<?=$slide['slide-image']['url'];?>" alt="img1">
                        <div class="slide-wraper">
                            <h3 class="slide-title"><?=$slide['slide-title'];?></h3>
                            <p class="slide-text"><?=$slide['slide-text'];?></p>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div class="ksd-graphism-container">
    <img class="ksd-graphism" src="<?=get_template_directory_uri()?>/images/fundo-ksd.svg">
    <img class="ksd-graphism2" src="<?=get_template_directory_uri()?>/images/fundo-ksd2.svg">
</div>