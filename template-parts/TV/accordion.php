<?php
    $ssTitle = get_field('titulo_acordeon');
?>
<section class="tv-accordion">
    <h2 class="section-title"><?= $ssTitle; ?></h2>
    <div class="accordion-wrapper">
        <?php if(have_rows('repetidor_acordeon')): ?>
            
                <ul>
                   <div class="slider-accordion">
                        
                            <?php while(have_rows('repetidor_acordeon')): the_row(); ?>
                                <div class="repeater-accordion">
                                        <li id="accordionElement">
                                            <?php
                                                $accordion_background = get_sub_field('fundo_acordeon');
                                                $link = get_sub_field('link_acordeon');
                                                $label_cta = get_sub_field('rotulo_cta');
                                            ?>
                                            <img class="accordion-background" src="<?= $accordion_background['url'];?>" alt="<?= $accordion_background['alt'];?>">
                                            <div class="info-wrapper">
                                                <a class="accordion-cta" href="<?= $link; ?>">
                                                    <h2>
                                                        <?= $label_cta; ?>
                                                    </h2>
                                                </a>
                                            </div>
                                        </li>
                                </div>
                            <?php endwhile; ?>
                       
                    </div>
                </ul>
        <?php endif; ?>
    </div>
</section>
<div class="accordion-graph">
    <img class="accordion-graph-img" src="<?=get_template_directory_uri()?>/images/TV/accordion-graph.svg" alt="graphismo">
</div>