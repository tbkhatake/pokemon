<?php $forms = get_field('forms')?>

<section class="forms">
    <h2 class="section-title"><?= $forms['section-title'];?></h2>
    <div class="forms-container">
        <img class="forms-bg" src="<?= $forms['forms-image']['url'];?>" alt="<?= $forms['forms-image']['title'];?>">
        <form class="forms-wrapper" action="">
            <p class="forms-desc"><?= $forms['forms-desc'];?></p>
            <?php foreach($forms['tiny-form'] as $tinyForm ): ?>
                <?php if($tinyForm['form-text'] == "Email" || $tinyForm['form-text'] == "email" || $tinyForm['form-text'] == "email*"|| $tinyForm['form-text'] == "Email*"):?>
                    <div class="fields-wrapper">
                        <input class="tiny-form" id="forms-input forms-input-email" type="email" required placeholder="<?= $tinyForm['form-text'];?>">
                        <p class="required">Preenchimento obrigatório*</p>
                        <p class="required-email">Digite um e-mail válido*</p>
                    </div>
                <?php else:?>
                <div class="fields-wrapper">
                    <input class="tiny-form" id="forms-input" type="text" name="<?= $tinyForm['form-text'];?>" required placeholder="<?= $tinyForm['form-text'];?>">
                    <p class="required">Preenchimento obrigatório*</p>
                </div>
                <?php endif;?>
            <?php endforeach;?>
            <?php foreach($forms['long-form'] as $longForm ): ?>
                <div class="fields-wrapper fields-wrapper-long">
                    <textarea class="long-form" id="forms-input" type="text" name="<?= $tinyForm['form-text'];?>" placeholder="<?= $longForm['form-text'];?>"></textarea>
                    <p class="required">Preenchimento obrigatório*</p>
                </div>
            <?php endforeach;?>
            <?php foreach($forms['text-area'] as $textArea ): ?>
                <div class="fields-wrapper fields-wrapper-text">
                    <textarea class="text-area" id="forms-input" type="text" name="<?= $tinyForm['form-text'];?>" placeholder="<?= $textArea['form-text'];?>"></textarea>
                    <p class="required">Preenchimento obrigatório*</p>
                </div>
            <?php endforeach;?>
            <input class="forms-button" type="submit" value="<?= $forms['forms-button']['title'];?>">
        </form>
    </div>
</section>