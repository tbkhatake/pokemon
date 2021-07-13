<?php 
    $image_hero_mob = get_sub_field('image_hero_mob');
    $image_hero_desk = get_sub_field('image_hero_desk');    
    $title_hero = get_sub_field('titulo_hero');
    $description_hero = get_sub_field('descricao_hero');
    $cta_hero_link = get_sub_field('link_cta'); 
    $cta_hero_name = get_sub_field('nome_cta_hero');           
?> 

<section class="hero">
    <div class="container">
        <div class="hero-slider">
            <?php if(have_rows('hero-slider')): ?>
                <?php while(have_rows('hero-slider')): the_row(); ?>
                    <img alt="<?= $image_hero_mob['alt'] ?>" 
                            src="<?= $image_hero_mob['url'];?>"
                            class="hero-img-mob">
                    <img alt="<?= $image_hero_desk['alt'] ?>" 
                            src="<?= $image_hero_desk['url'];?>"
                            class="hero-img-desk">
                    <div class="hero-content">
                        <p class="hero-title"><?= $title_hero; ?> </p>
                        <p class="hero-description"><?= $description_hero; ?> </p>
                        <a href="<?= $cta_hero_link; ?>" class="hero-cta"><?= $cta_hero_name; ?> </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
