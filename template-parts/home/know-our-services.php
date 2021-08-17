<?php $section3 = get_field('section3')?>
<section class="know-our-services">
    <h2 class="section-title"><?php echo($section3['section3-title']); ?></h2>
    <?php foreach($section3['section3-cards'] as $card):?>
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
</section>
<div class="kos-graphism">
    <img class="img -bg1" src="<?=get_template_directory_uri()?>/images/fundo-kos1.svg">
    <img class="img -bg2" src="<?=get_template_directory_uri()?>/images/fundo-kos2.svg">
</div>