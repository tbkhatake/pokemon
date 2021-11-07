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
            $item_title_premiere =get_field('titulo_do_item_premiere');
            $item_description_premiere = get_field('descricao_do_item_premiere');
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
                    <div class="channels-telecine">
                        <?php 
                            $package_title_telecine = get_field('titulo_do_pacote_telecine');
                        ?>
                        <p class="channels-telecine-title"><?= $package_title_telecine; ?></p>
                       
                        <div class="telecine-channels-wrapper">
                            <?php if(have_rows('repetidor_canais_telecine')): ?>
                                <div class="carousel-wrapper">
                                    <?php while(have_rows('repetidor_canais_telecine')): the_row(); ?>
                                        <div class="channel-wrapper">
                                            <?php 
                                                $icon_channel_telecine = get_sub_field ('icone_canal_telecine');
                                                $channel_name_telecine = get_sub_field ('nome_canal_telecine');
                                            ?>
                                            <div class="d-icon-wrapper">
                                                <img class="channel-icon " src="<?= $icon_channel_telecine['url']; ?>" alt="<?= $icon_channel_telecine['alt']; ?>">
                                            </div>
                                            <p class="channel-name"><?= $channel_name_telecine; ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="cta-wrapper">
                    <?php
                        $package_link_telecine = get_field ('link_do_pacote_telecine');
                    ?>
                    <a class="package-link" href="<?= $package_link_telecine['url']; ?>"><?= $package_link_telecine['title']; ?></a>
                </div>
                
            </div>   
        </div>
        <div class="box">
            <p class="item-label"><?= $item_label_adultos;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_adultos;?></p>
                <p class="item-description"><?=$item_description_adultos;?></p>
                <div class="channels-wrapper">
                    <div class="channels-telecine">
                        <?php 
                            $package_title_adultos = get_field('titulo_do_pacote_adultos');
                        ?>
                        <p class="channels-telecine-title"><?= $package_title_adultos; ?></p>
                       
                        <div class="telecine-channels-wrapper">
                            <?php if(have_rows('repetidor_canais_adultos')): ?>
                                <div class="carousel-wrapper">
                                    <?php while(have_rows('repetidor_canais_adultos')): the_row(); ?>
                                        <div class="channel-wrapper">
                                            <?php 
                                                $icon_channel_adultos = get_sub_field ('icone_canal_adultos');
                                                $channel_name_adultos = get_sub_field ('nome_canal_adultos');
                                            ?>
                                            <div class="d-icon-wrapper">
                                                <img class="channel-icon " src="<?= $icon_channel_adultos['url']; ?>" alt="<?= $icon_channel_adultos['alt']; ?>">
                                            </div>
                                            <p class="channel-name"><?= $channel_name_adultos; ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="cta-wrapper">
                    <?php
                        $package_link_adultos = get_field ('link_do_pacote_adultos');
                    ?>
                    <a class="package-link" href="<?= $package_link_telecine['url']; ?>"><?= $package_link_telecine['title']; ?></a>
                </div>
                
            </div>   
        </div>
        <div class="box">
            <p class="item-label"><?= $item_label_internacionais;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_internacionais;?></p>
                <p class="item-description"><?=$item_description_internacionais;?></p>
                <div class="channels-wrapper">
                    <div class="channels-telecine">
                        <?php 
                            $package_title_internacionais = get_field('titulo_do_pacote_internacionais');
                        ?>
                        <p class="channels-telecine-title"><?= $package_title_internacionais; ?></p>
                       
                        <div class="telecine-channels-wrapper">
                            <?php if(have_rows('repetidor_canais_internacionais')): ?>
                                <div class="carousel-wrapper">
                                    <?php while(have_rows('repetidor_canais_internacionais')): the_row(); ?>
                                        <div class="channel-wrapper">
                                            <?php 
                                                $icon_channel_internacionais = get_sub_field ('icone_canal_internacionais');
                                                $channel_name_internacionais = get_sub_field ('nome_canal_internacionais');
                                            ?>
                                            <div class="d-icon-wrapper">
                                                <img class="channel-icon " src="<?= $icon_channel_internacionais['url']; ?>" alt="<?= $icon_channel_internacionais['alt']; ?>">
                                            </div>
                                            <p class="channel-name"><?= $channel_name_internacionais; ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="cta-wrapper">
                    <?php
                        $package_link_internacionais = get_field ('link_do_pacote_internacionais');
                    ?>
                    <a class="package-link" href="<?= $package_link_internacionais['url']; ?>"><?= $package_link_internacionais['title']; ?></a>
                </div>
                
            </div>   
        </div>
        <div class="box">
            <p class="item-label"><?= $item_label_premiere;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_premiere;?></p>
                <p class="item-description"><?=$item_description_premiere;?></p>
                <div class="channels-wrapper">
                    <div class="channels-telecine">
                        <?php 
                            $package_title_premiere = get_field('titulo_do_pacote_premiere');
                        ?>
                        <p class="channels-telecine-title"><?= $package_title_premiere; ?></p>
                       
                        <div class="telecine-channels-wrapper">
                            <?php if(have_rows('repetidor_canais_premiere')): ?>
                                <div class="carousel-wrapper">
                                    <?php while(have_rows('repetidor_canais_premiere')): the_row(); ?>
                                        <div class="channel-wrapper">
                                            <?php 
                                                $icon_channel_premiere = get_sub_field ('icone_canal_premiere');
                                                $channel_name_premiere = get_sub_field ('nome_canal_premiere');
                                            ?>
                                            <div class="d-icon-wrapper">
                                                <img class="channel-icon " src="<?= $icon_channel_premiere['url']; ?>" alt="<?= $icon_channel_premiere['alt']; ?>">
                                            </div>
                                            <p class="channel-name"><?= $channel_name_premiere; ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="cta-wrapper">
                    <?php
                        $package_link_premiere = get_field ('link_do_pacote_premiere');
                    ?>
                    <a class="package-link" href="<?= $package_link_premiere['url']; ?>"><?= $package_link_premiere['title']; ?></a>
                </div>
                
            </div>   
        </div>
        <div class="box">
            <p class="item-label"><?= $item_label_combate;?></p>
            <div class="content">
                <p class="item-title"><?= $item_title_combate;?></p>
                <p class="item-description"><?=$item_description_combate;?></p>
                <div class="channels-wrapper">
                    <div class="channels-telecine">
                        <?php 
                            $package_title_combate = get_field('titulo_do_pacote_combate');
                        ?>
                        <p class="channels-telecine-title"><?= $package_title_combate; ?></p>
                       
                        <div class="telecine-channels-wrapper">
                            <?php if(have_rows('repetidor_canais_combate')): ?>
                                <div class="carousel-wrapper">
                                    <?php while(have_rows('repetidor_canais_combate')): the_row(); ?>
                                        <div class="channel-wrapper">
                                            <?php 
                                                $icon_channel_combate = get_sub_field ('icone_canal_combate');
                                                $channel_name_combate = get_sub_field ('nome_canal_combate');
                                            ?>
                                            <div class="d-icon-wrapper">
                                                <img class="channel-icon " src="<?= $icon_channel_combate['url']; ?>" alt="<?= $icon_channel_combate['alt']; ?>">
                                            </div>
                                            <p class="channel-name"><?= $channel_name_combate; ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="cta-wrapper">
                    <?php
                        $package_link_combate = get_field ('link_do_pacote_combate');
                    ?>
                    <a class="package-link" href="<?= $package_link_combate['url']; ?>"><?= $package_link_combate['title']; ?></a>
                </div>
                
            </div>   
        </div>
    </div>
</section>