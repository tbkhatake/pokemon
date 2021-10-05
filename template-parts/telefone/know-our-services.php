<?php $section3 = get_field('section3-cards')?>
<?php $section3_title = get_field('section3-title')?>
<section class="know-our-services">
    <h2 class="section-title"><?php echo($section3_title); ?></h2>
    <ul class="controls" id="kos-customize-controls" aria-label="Carousel Navigation" tabindex="0">
        <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
            <img class="controls-btn" src="<?=get_template_directory_uri()?>/images/left-arrow.svg" alt="left-arrow">
        </li>
        <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
            <img class="controls-btn" src="<?=get_template_directory_uri()?>/images/right-arrow.svg" alt="right-arrow">
        </li>
    </ul>
    <div class="slider-container">
        <div class="kos-slider">
            <?php foreach($section3 as $card):?>
                <div class="know-our-services-cards">
                    <img class="card-img" src="<?=$card['cards-img']['url'];?>" alt="imagem">
                    <img class="card-desk-img" src="<?=$card['cards-desk-img']['url'];?>" alt="imagem">
                    <div class="card-wraper">
                        <h3 class="card-title"><?=$card['cards-title'];?></h3>
                        <span class="card-line"></span>
                        <p class="card-content"><?=$card['cards-content'];?></p>
                        <a class="card-button" href="<?=$card['cards-button-link'];?>"><?=$card['cards-button-text'];?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div class="kos-graph">
    <img class="kos-graph-img-1" src="<?=get_template_directory_uri()?>/images/internet/kos-graph1.svg" alt="graphismo">
</div>