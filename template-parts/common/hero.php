<section class="hero">
        <div class="hero-slider container">
            <?php if(have_rows('carrossel_hero')): ?>
                <div class="slider-engine">
                    <?php while(have_rows('carrossel_hero')): the_row(); ?>
                        <div class="slide">
                            <div class="slide-wrapper">
                                <?php
                                    $image_hero_mob = get_sub_field('image_hero_mob');
                                    $image_hero_desk = get_sub_field('image_hero_desk');
                                    $title_hero = get_sub_field('titulo_hero');
                                    $description_hero = get_sub_field('descricao_hero');
                                    $cta_hero_link = get_sub_field('link_cta')['url']; 
                                    $cta_hero_name = get_sub_field('link_cta')['title'];       
                                ?>
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
                            </div>
                        </div>
                    <?php  endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
</section>
<div class="hero-graph">
    <img class="hero-graph-img-1" src="<?=get_template_directory_uri()?>/images/hero-graph1.svg" alt="graphismo">
    <img class="hero-graph-img-2" src="<?=get_template_directory_uri()?>/images/hero-graph2.svg" alt="graphismo">
</div>
