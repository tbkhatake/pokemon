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
                        $tipo = get_sub_field('tipo_botao');
                        $form = get_sub_field('formulario_contato');
                        // print_r($form)
                    ?>
                <?php if($icon || $info):?>
                    <a class="button-link" href="<?= $buttonLink; ?>"> 
                        <button type="button" class="box-wrapper">
                            <img class="box-icon" src="<?= $icon; ?>" alt="<?= $icon['alt']; ?>">
                            <p class="box-info"><?= $info; ?></p>
                        </button>
                    </a>
                    <?php if($tipo == 'formulario'):?>
                        <div class="box-forms-wrapper">
                            <form action="" class="box-forms">
                                <p class="title"><?= $info;?></p>
                                <span class="form-red-line"></span>
                                <p class="desc"><?= $form['form-text'];?></p>
                                <input type="text" class="form-input" placeholder="<?= $form['input-1'];?>">
                                <input type="text" class="form-input" placeholder="<?= $form['input-2'];?>">
                                <input type="submit" class="form-button" value="<?= $form['form-submit'];?>">
                            </form>
                        </div>
                    <?php elseif($tipo == 'painel'):?>
                        <div class="box-painel-wrapper">
                            <form action="" class="box-painel">
                                <p class="title"><?= $info;?></p>
                                <span class="painel-red-line"></span>
                                <p class="tel"><?= $form['form-text'];?></p>
                                <input type="submit" class="form-button" value="<?= $form['form-submit'];?>">
                            </form>
                        </div>
                    <?php endif;?> 
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>