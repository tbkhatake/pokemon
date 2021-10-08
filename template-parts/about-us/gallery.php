<?php $gallery_section = get_field('gallery-section')?>
<section class="gallery">
    <h2 class="section-title"><?php echo($gallery_section['section-title']); ?></h2>
    <div class="gallery-mobile">
        <div class="gallery-slider">
            <?php foreach($gallery_section['section-quad'] as $quad):?>
                <div class="quad-slider-wrapper">
                    <div class="quad">
                        <img class="quad-image" src="<?=$quad['quad-image']['url']?>" alt="<?=$quad['quad-image']['title']?>">
                        <div class="quad-content-wrapper">
                            <img class="quad-arrow" src="<?=get_template_directory_uri()?>/images/down-white-arrow.svg" alt="white-arrow">
                            <p class="quad-title"><?=$quad['quad-title']?></p>
                            <p class="quad-text"><?=$quad['quad-text']?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="gallery-desk">
        <div class="gallery-desk-slider-wrapper">     
            <div class="gallery-desk-slider">
                <?php foreach($gallery_section['section-quad'] as $quad):?>
                    <div class="desk-quads-padding">
                        <div class="desk-quad">
                            <img class="desk-quad-image" src="<?=$quad['quad-image']['url']?>" alt="<?=$quad['quad-image']['title']?>">
                            <div class="desk-quad-content-wrapper">
                                <p class="quad-title"><?=$quad['quad-title']?></p>
                                <p class="quad-text"><?=$quad['quad-text']?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="gallery-desk-dots">
            <div class="gallery-desk-dots-slider" id="gallery-dots">
                <?php foreach($gallery_section['section-quad'] as $quad):?>
                    <div class="quad-padding">
                        <img class="desk-dots-image" src="<?=$quad['quad-image']['url']?>" alt="<?=$quad['quad-image']['title']?>">
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="gallery-desk-controls" aria-label="Carousel Navigation" tabindex="0">
            <img class="gallery-desk-controls-btn" src="<?=get_template_directory_uri()?>/images/left-arrow.svg" alt="left-arrow">
            <img class="gallery-desk-controls-btn" src="<?=get_template_directory_uri()?>/images/right-arrow.svg" alt="right-arrow">
        </div>
    </div>
</section>