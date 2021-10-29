<?php $ssTitle = get_field('titulo_contato');?>
<?php $ssTitle_have = $ssTitle['section-title'] == "" ? "contact-none" : "contact"?>
<section class=<?=$ssTitle_have?>>
    <div class="container">
        <h2 class="section-title"><?= $ssTitle; ?></h2>
        <div class="box-grid">
            <?php if(have_rows('box_contato')): ?>
                <?php while(have_rows('box_contato')): the_row(); ?>
                    <?php
                        $buttonLink = get_sub_field('link_botao');
                        $icon = get_sub_field('icone_contato');
                        $info = get_sub_field('info_contato');
                    ?>
                   <a class="button-link" href="<?= $buttonLink; ?>"> <button type="button" class="box-wrapper">
                        <img class="box-icon" src="<?= $icon; ?>" alt="<?= $icon['alt']; ?>">
                        <p class="box-info"><?= $info; ?></p>
                    </button></a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>