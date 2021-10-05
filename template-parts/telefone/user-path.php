<?php 
    $section_title = get_field('titulo_caminho_usuario');
    $fst_block_title = get_field('titulo_primeiro_box');
    $fst_block_description = get_field('descricao_primeiro_box');
    $snd_block_title = get_field('titulo_segundo_box');
    $snd_block_description = get_field('descricao_segundo_box');
    $trd_block_title = get_field('titulo_terceiro_box');
    $trd_block_description = get_field('descricao_terceiro_box');
    $tax_title = get_field('titulo_taxa');
    $accordion_title = get_field('titulo_acordeon');
    $accordion_description = get_field('descricao_acordeon');
    $drop_text = get_field('texto_dropdown');
?>
<section class="path-section">
    <div class="container">
        <h2 class="section-title"><?= $section_title; ?></h2>
        <div class="section-wrapper">
            <div class="first-block">
                <div class="fst-block-img"></div>
                <div class="fst-box">
                    <h4 class="block-title">
                        <?= $fst_block_title; ?>
                    </h4>
                    <p class="block-description">
                        <?= $fst_block_description; ?>
                    </p>
                </div>
            </div>
            <div class="second-block">
                <div class="snd-block-img"></div>
                <div class="snd-box">
                    <h4 class="block-title">
                        <?= $snd_block_title; ?>
                    </h4>
                    <p class="block-description">
                        <?= $snd_block_description; ?>
                    </p>
                </div>
            </div>
            <div class="third-block">
                <div class="trd-block-img"></div>
                <div class="trd-box">
                    <h4 class="block-title">
                        <?= $trd_block_title; ?>
                    </h4>
                    <p class="block-description">
                        <?= $trd_block_description; ?>
                    </p>
                </div>
            </div>
            <div class="accordion-tax">
                <button id="clickBtn" class="accordion-box">
                    <p class="drop-down-text">
                        <?= $drop_text; ?>
                    </p>
                </button>
                <div id="dropdownContent" class="accordion-content">
                    <p class="accordion-title"><?= $accordion_title; ?></p>
                    <p class="accordion-description"><?= $accordion_description; ?></p>
                    <p class="tax-title"><?= $tax_title;?></p>
                    <?php if(have_rows('accordion_repeater')): ?>
                        <ul class="tax-box">
                            <?php while(have_rows('accordion_repeater')): the_row(); ?>
                                <li class="tax-item">
                                    <?php
                                        $icon_tax = get_sub_field('icone_taxa');
                                        $tax_info = get_sub_field('informacao_taxa');
                                        $tax_price = get_sub_field('preco_tarifa');
                                    ?>
                                    <img class="tax-icon" src="<?= $icon_tax['url'];?>" alt="<?= $icon_tax['alt'];?>">
                                    <p class="tax-info"><?= $tax_info;?></p>
                                    <span class="tax-price"><?= $tax_price;?></span>
                                </li>
                            <?php  endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>