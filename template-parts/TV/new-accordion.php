<?php $section_title = get_field('titulo_do_acordeon');?>
<section class="acordeon-tv">
    <h2 class="accordion-section-title"><?= $section_title; ?></h2>
    <div class="box-wrapper">
        <?php
            $item_label_telecine = get_field('rotulo_do_item_telecine');
            $item_title_telecine =get_field('titulo_do_item_telecine');
            $item_description_telecine = get_field('descricao_do_item_telecine');
            $item_label_adultos = get_field('rotulo_do_item_canais_adultos');
            $item_title_adultos =get_field('titulo_do_item_canais_adultos');
            $item_description_adultos = get_field('descricao_do_item_canais_adultos');
            $item_label_internacionais = get_field('rotulo_do_item_canais_internacionais');
            $item_title_internacionais =get_field('titulo_do_item_canais_internacionais');
            $item_description_internacionais = get_field('descricao_do_item_canais_internacionais');
            $item_label_premiere = get_field('rotulo_do_item_premiere');
            $item_title_internacionais =get_field('titulo_do_item_premiere');
            $item_description_internacionais = get_field('descricao_do_item_premiere');
            $item_label_combate = get_field('rotulo_do_item_combate');
            $item_title_combate =get_field('titulo_do_item_combate');
            $item_description_combate = get_field('descricao_do_item_combate');
        ?>
        <div class="box">
            <p class="item-label"><?= $item_label_telecine;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_telecine;?></p>
                <p class="item-description"><?=$item_description_telecine;?></p>
                <div class="channels-wrapper">
                </div>
            </div>    
        </div>
        <div class="box">
            <p class="item-label"><?= $item_label_adultos;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_adultos;?></p>
                <p class="item-description"><?=$item_description_adultos;?></p>
                <div class="channels-wrapper">
                </div>
            </div>    
        </div>
        <div class="box">
            <p class="item-label"><?= $item_label_internacionais;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_internacionais;?></p>
                <p class="item-description"><?=$item_description_internacionais;?></p>
                <div class="channels-wrapper">
                </div>
            </div>    
        </div>
        <div class="box">
            <p class="item-label"><?= $item_label_premiere;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_premiere;?></p>
                <p class="item-description"><?=$item_description_premiere;?></p>
                <div class="channels-wrapper">
                </div>
            </div>    
        </div>
        <div class="box">
            <p class="item-label"><?= $item_label_combate;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_combate;?></p>
                <p class="item-description"><?=$item_description_combate;?></p>
                <div class="channels-wrapper">
                </div>
            </div>    
        </div>
    </div>
</section>