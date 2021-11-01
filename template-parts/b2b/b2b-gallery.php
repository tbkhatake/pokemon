<?php $b2b_gallery = get_field('b2b-gallery')?>
<?php $b2b_gallery_have = $b2b_gallery['section-title'] == "" ? "b2b-gallery-none" : "b2b-gallery"?>
<section class=<?=$b2b_gallery_have?>>
    <h2 class="section-title"><?= $b2b_gallery['section-title']; ?></h2>
    <div class="slider-container">
        <div class="b2b-gallery-controls" aria-label="Carousel Navigation" tabindex="0">
            <img class="b2b-gallery-controls-btn" src="<?=get_template_directory_uri()?>/images/left-arrow.svg" alt="left-arrow">
            <img class="b2b-gallery-controls-btn" src="<?=get_template_directory_uri()?>/images/right-arrow.svg" alt="right-arrow">
        </div>
        <div class="b2b-gallery-slider">
            <?php foreach($b2b_gallery['section-cards'] as $b2b_gallery_card):?>
                <div class="b2b-gallery-slider-padding">
                    <div class="b2b-gallery-cards">
                        <img class="card-img" src="<?=$b2b_gallery_card['card-image']['url'];?>" alt="<?=$b2b_gallery_card['card-image']['title'];?>">
                        <div class="card-wraper">
                            <h3 class="card-title"><?=$b2b_gallery_card['card-title'];?></h3>
                            <span class="card-line"></span>
                            <p class="card-content"><?=$b2b_gallery_card['card-text'];?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="b2b-gallery-dots">
        <?php foreach($b2b_gallery['section-cards'] as $b2b_gallery_card):?>
            <span class="dot"></span>
        <?php endforeach; ?>
        </div>
    </div>
</section>