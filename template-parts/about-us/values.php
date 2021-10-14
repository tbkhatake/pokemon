<?php
    $section_title = get_field('titulo_secao');
    $velocidade_image = get_field('imagem_velocidade');
    $fst_box_title = get_field('titulo_primeiro_box');
    $fst_box_description = get_field('descricao_primeiro_box');
    $ousadia_image = get_field('imagem_ousadia');
    $snd_box_title = get_field('titulo_segundo_box');
    $snd_box_description = get_field('descricao_segundo_box');
    $crescimento_image = get_field('imagem_crescimento');
    $trd_box_title = get_field('titulo_terceiro_box');
    $trd_box_description = get_field('descricao_terceiro_box');
    $empreendedorismo_image = get_field('imagem_empreendedorismo');
    $fourth_box_title = get_field('titulo_quarto_box');
    $fourth_box_description = get_field('descricao_quarto_box');
    $sinergia_image = get_field('imagem_sinergia');
    $fifth_box_title = get_field('titulo_quinto_box');
    $fifth_box_description = get_field('descricao_quinto_box');
?>
<section class="values-section">
    <h2 class="section-title"><?= $section_title; ?></h2>
    <div class="slides-wrapper">
        <div class="slide-element">
            <div id="velocidade" class="slide">
                <img class="slide-image" src="<?= $velocidade_image['url'] ?>" alt="<?= $velocidade_image['alt'] ?>">
                <div class="slide-box">
                    <p class="box-title"><?= $fst_box_title; ?></p>
                    <p class="box-description"><?= $fst_box_description; ?></p>
                </div>
            </div>
        </div>
        <div class="slide-element">
            <div id="ousadia" class="slide">
                <img class="slide-image" src="<?= $ousadia_image['url'] ?>" alt="<?= $ousadia_image['alt']; ?>">
                <div class="slide-box">
                    <p class="box-title"><?= $snd_box_title; ?></p>
                    <p class="box-description"><?= $snd_box_description; ?></p>
                </div>
            </div>
        </div>
        <div class="slide-element">
            <div id="crescimento" class="slide">
                <img class="slide-image" src="<?= $crescimento_image['url'] ?>" alt="<?= $crescimento_image['alt']; ?>">
                <div class="slide-box">
                    <p class="box-title"><?= $trd_box_title; ?></p>
                    <p class="box-description"><?= $trd_box_description; ?></p>
                </div>
            </div>
        </div>
        <div class="slide-element">
            <div id="empreendedorismo" class="slide">
                <img class="slide-image" src="<?= $empreendedorismo_image['url'] ?>" alt="<?= $empreendedorismo_image['alt']; ?>">
                <div class="slide-box">
                    <p class="box-title"><?= $fourth_box_title; ?></p>
                    <p class="box-description"><?= $fourth_box_description; ?></p>
                </div>
            </div>
        </div>
        <div class="slide-element">
            <div id="sinergia" class="slide">
                <img class="slide-image" src="<?= $sinergia_image['url'] ?>" alt="<?= $sinergia_image['alt']; ?>">
                <div class="slide-box">
                    <p class="box-title"><?= $fifth_box_title; ?></p>
                    <p class="box-description"><?= $fifth_box_description; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="box-grid">
        <?php if(have_rows('box_valores')): ?>
            <div class="box-slider">
                <?php while(have_rows('box_valores')): the_row(); ?>
                    <div class="box-elements">
                        <?php
                            $icon_values = get_sub_field('icone_valores');
                            $info_values = get_sub_field('info_valores');
                        ?>
                        <button type="button" class="box-wrapper">
                            <img class="box-icon" src="<?= $icon_values['url'] ?>" alt="<?= $icon_values['alt']; ?>">
                            <p class="box-info"><?= $info_values; ?></p>
                        </button>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif; ?>
    </div>
</section>