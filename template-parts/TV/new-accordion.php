<?php $section_title = get_field('titulo_do_acordeon');?>
<section class="acordeon-tv">
    <h2 class="accordion-section-title"><?= $section_title; ?></h2>
    <?php if(have_rows('accordion_repeater')): ?>
        <ul class="accordion-list">
            <?php while(have_rows('accordion_repeater')): the_row(); ?>
                <li class="accordion-item">
                    <?php
                        $item_label = get_sub_field('rotulo_do_item');
                        $item_title =get_sub_field('titulo_do_item');
                        $item_description = get_sub_field('descricao_do_item');
                        $item_image = get_sub_field('imagem_do_item');
                    ?>
                    <img src="<?= $item_image['url'];?>" alt="<?= $item_image['alt'];?>">
                    <div class="accordion-info">
                        <p class="item-label"><?= $item_label;?></p>
                        <p class="item-title"><?= $item_title;?></p>
                        <p class="item-description"><?= $item_description;?></p>
                        <div class="channels-wrapper">

                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>