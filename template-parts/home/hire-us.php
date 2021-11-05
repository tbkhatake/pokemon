<?php $ssTitle = get_field('titulo_contato','options');?>
<?php $ssTitle_have = $ssTitle['section-title'] == "" ? "contact-none" : "contact"?>
<section class=<?=$ssTitle_have?>  id="contratar">
    <div class="container">
        <h2 class="section-title"><?= $ssTitle; ?></h2>
        <div class="box-grid">
            <?php if(have_rows('box_contato','options')): ?>
                <?php while(have_rows('box_contato','options')): the_row(); ?>
                    <?php
                        $buttonLink = get_sub_field('link_botao');
                        $icon = get_sub_field('icone_contato');
                        $info = get_sub_field('info_contato');
                    ?>
                <?php if($icon || $info):?>
                    <a class="button-link" href="<?= $buttonLink; ?>"> 
                        <button type="button" class="box-wrapper">
                            <img class="box-icon" src="<?= $icon; ?>" alt="<?= $icon['alt']; ?>">
                            <p class="box-info"><?= $info; ?></p>
                        </button>
                    </a>
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="hire-us-graphism-container">
    <img class="hire-us-graphism" src="<?=get_template_directory_uri()?>/images/fundo-hu.svg">
</div>