<?php /* Template Name: Página Serviços digitais*/ ?>
<?php get_header() ?>
<section class="services">
    <div class="services__digital">
        <img class="fst-graphism" src="<?=get_template_directory_uri()?>/images/servicos-digitais/fst-graphism.svg">
        <img class="snd-graphism" src="<?=get_template_directory_uri()?>/images/servicos-digitais/snd-graphism.svg">
        <?php if(have_rows('services_icone')): ?>
            <div class="services__digital--slider">
                
                    <?php while(have_rows('services_icone')): the_row(); ?>  
                            <?php
                                $streaming_icon = get_sub_field('icone_streaming');
                            ?>
                            <img class="services__icon" src="<?= $streaming_icon['url']; ?>" alt="<?= $streaming_icon['alt']; ?>" />
                    <?php  endwhile; ?>
            </div>
        <?php endif; ?>
       
    </div>
    <?php if(have_rows('carrossel_video')): ?>
        <div class="video-engine">
            <?php while(have_rows('carrossel_video')): the_row(); ?>
                <div class="video-slide"> 
                    <div class="video-wrapper">
                        <?php
                            $streaming_image = get_sub_field('imagem_streaming'); 
                            $cardTitle = get_sub_field('titulo_card'); 
                            $cardInfo = get_sub_field('detalhes_card');   
                        ?>
                        <img
                            class="card-video"
                            src="<?= $streaming_image['url'];?>"
                            alt="<?= $streaming_image['alt'];?>"
                        ></img>
                        <div class="card-box">
                            <div class="card-wraper-border">
                                <div class="card-wraper">
                                    <h2 class="card-title"><?= $cardTitle;?></h2>
                                    <span class="card-line"></span>
                                    <p class="card-content">
                                        <?= $cardInfo;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div > 
                </div> 
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <?php get_template_part("template-parts/common/plans");?>
    <?php $step = get_field('step-section')?>
    
    <section class="step-sd">
        <img class="trd-graphism" src="<?=get_template_directory_uri()?>/images/servicos-digitais/trd-graphism.svg">
        <img class="fth-graphism" src="<?=get_template_directory_uri()?>/images/servicos-digitais/fth-graphism.svg">
        <img class="ffh-graphism" src="<?=get_template_directory_uri()?>/images/servicos-digitais/ffh-graphism.svg">
        <img class="sxth-graphism" src="<?=get_template_directory_uri()?>/images/servicos-digitais/sxth-graphism.svg">
        
        <div class="steps-engine">
            <?php foreach($step as $step2): ?>
                <div class="steps-wrapper">
                    <div class="steps-slider">
                        <div class="step-carousel-sd">
                            <?php foreach($step2['section-itens'] as $key => $item):?>
                                <div class="step-carousel-wrapper">
                                    <div class="items-wrapper">
                                        <div class="item-img-wrapper">
                                            <span class="item-background"></span>
                                            <img class="item-img" src="<?=$item['step-image']['url']?>" alt="<?=$item['step-image']['title']?>">
                                            <div class="item-img-title-wrapper">
                                                <p class="item-img-title"><?=$item['cell-title']?></p>
                                            </div>
                                            <span class="red-ball">
                                                <p class="red-ball-number"><?=$key+1?></p>
                                            </span>
                                        </div>
                                        <div class="content-wrapper">
                                            <p class="content-title"><?=$item['step-title']?></p>
                                            <span class="content-redline"></span>
                                            <p class="content-text"><?=$item['step-text']?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        
        <div class="step-slider-controls-wrapper">
            <div class="step-slider-controls" id="<?=$key?>" aria-label="Carousel Navigation" tabindex="0">
                <img class="step-controls-btn" src="<?=get_template_directory_uri()?>/images/servicos-digitais/left-arrow.svg" alt="left-arrow">
                <img class="step-controls-btn" src="<?=get_template_directory_uri()?>/images/servicos-digitais/right-arrow.svg" alt="right-arrow">
            </div>
        </div>
        
    </section> 

    
    
    
    
</section>

<svg class="svg-border" viewBox="0 0 1920 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(195, 0, 10, 1)" d="M 0 0 L 425 -29 L 425 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(195, 0, 10, 1)" d="M 424 -29 L -6 207 L -6 0 L 424 0 Z" stroke-width="0"></path> <path fill="rgba(195, 0, 10, 1)" d="M -7 207 L 302 78 L 302 0 L -7 0 Z" stroke-width="0"></path><path fill="rgba(195, 0, 10, 1)" d="M 301 78 L 775 241 L 775 0 L 301 0 Z" stroke-width="0"></path><path fill="rgba(195, 0, 10, 1)" d="M 774 241 L 1141 61 L 1141 0 L 774 0 Z" stroke-width="0"></path><path fill="rgba(195, 0, 10, 1)" d="M 1140 61 L 1408 232 L 1408 0 L 1140 0 Z" stroke-width="0"></path><path fill="rgba(195, 0, 10, 1)" d="M 1407 232 L 1912 125 L 1912 0 L 1407 0 Z" stroke-width="0"></path><path fill="rgba(195, 0, 10, 1)" d="M 1911 125 L 1942 125 L 1942 0 L 1911 0 Z" stroke-width="0"></path><path fill="rgba(195, 0, 10, 1)" d="M 1941 125 L 1920 0 L 1920 0 L 1941 0 Z" stroke-width="0"></path></svg>    

<?php $section3 = get_field('section3-cards')?>
<?php $section3_title = get_field('section3-title')?>

<section class="know-our-services">

    <h2 class="section-title"><?php echo($section3_title); ?></h2>
    
    <?php foreach($section3 as $card):?>
        <div class="know-our-services-cards">
            <img class="card-img" src="<?=$card['cards-img']['url'];?>" alt="imagem">
            <img class="card-desk-img" src="<?=$card['cards-desk-img']['url'];?>" alt="imagem">
            <div class="card-wraper">
                <h3 class="card-title"><?=$card['cards-title'];?></h3>
                <span class="card-underline"></span>
                <p class="card-content"><?=$card['cards-content'];?></p>
                <a class="card-button" href="<?=$card['cards-button-link'];?>"><?=$card['cards-button-text'];?></a>
                
            </div>
        </div>
    <?php endforeach; ?>
    
</section>
<div class="graphisms">
    <img class="img -bg4" src="<?=get_template_directory_uri()?>/images/servicos-digitais/eith-graphism.svg">
    <img class="img -bg5" src="<?=get_template_directory_uri()?>/images/servicos-digitais/nth-graphism.svg">
    <img class="img -bg6" src="<?=get_template_directory_uri()?>/images/servicos-digitais/tnth-graphism.svg">        
</div>

<div class="kos-graphism">
    <img class="img -bg1" src="<?=get_template_directory_uri()?>/images/fundo-kos1.svg">
    <img class="img -bg2" src="<?=get_template_directory_uri()?>/images/fundo-kos2.svg">
    <img class="img -bg3" src="<?=get_template_directory_uri()?>/images/servicos-digitais/svth-graphism.svg">    
</div>

    <?php get_template_part("template-parts/telefone/contact");?>
<?php get_footer() ?>