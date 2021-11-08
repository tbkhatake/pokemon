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
                        $painel = get_sub_field('painel_contato');
                        // print_r($form)
                    ?>
                <?php if($icon || $info):?>
                    <a class="button-link" href="<?= $buttonLink; ?>" tipo="<?= $tipo?>"> 
                        <button type="button" class="box-wrapper">
                            <img class="box-icon" src="<?= $icon; ?>" alt="<?= $icon['alt']; ?>">
                            <p class="box-info"><?= $info; ?></p>
                        </button>
                    </a>
                    <?php if($tipo == 'formulario'):?>
                        <div class="box-modal-wrapper box-modal-wrapper--form">
                            <form action="" class="box-forms">
                                <p class="title"><?= $info;?></p>
                                <span class="form-red-line"></span>
                                <p class="desc"><?= $form['form-text'];?></p>
                                <div class="input-wrapper">
                                    <input type="text" class="form-input" id="box-name" placeholder="<?= $form['input-1'];?>">
                                    <p class="required" id="box-name-required">Preenchimento obrigatório*</p>
                                </div>
                                <div class="input-wrapper">
                                    <input type="text" class="form-input" id="box-tel" placeholder="<?= $form['input-2'];?>">
                                    <p class="required" id="box-tel-required">Preenchimento obrigatório*</p>
                                </div>
                                <div class="input-wrapper">
                                    <input type="email" class="form-input" id="box-email" placeholder="<?= $form['input-3'];?>">
                                    <p class="required" id="box-email-required">Preenchimento obrigatório*</p>
                                </div>
                                <div class="button-wrapper">
                                    <input type="submit" class="form-button" value="<?= $form['form-submit'];?>">
                                    <span class="button-validation"><?= $form['form-submit'];?></span>
                                </div>
                                <p class="confirm-msg">&#10003 Mensagem enviada com sucesso! </p>
                            </form>
                        </div>
                    <?php elseif($tipo == 'painel'):?>
                        <div class="box-modal-wrapper box-modal-wrapper--painel">
                            <div class="box-painel">
                                <p class="title"><?= $info;?></p>
                                <span class="painel-red-line"></span>
                                <div class="tel-wrapper">
                                    <img class= "tel-icon" src="<?= $painel['board-icon']['url'];?>" alt="<?= $painel['board-icon']['title'];?>">
                                    <p class="tel"><?= $painel['board-tel'];?></p>
                                </div>
                                <input type="button" class="tel-button" value="<?= $painel['board-button'];?>">
                            </div>
                        </div>
                    <?php endif;?> 
                <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
</section>