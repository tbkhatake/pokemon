<?php $forms = get_field('forms')?>

<section class="treatment-forms">
    <h2 class="section-title"><?= $forms['section-title'];?></h2>
    <div class="forms-container">
        <form class="forms-wrapper" action="">
            <p class="forms-desc"><?= $forms['forms-desc'];?></p>
            <?php foreach($forms['tiny-form'] as $tinyForm ): ?>
                <?php if($tinyForm['form-text'] == "Email" || $tinyForm['form-text'] == "email" || $tinyForm['form-text'] == "email*"|| $tinyForm['form-text'] == "Email*"):?>
                    <div class="fields-wrapper">
                    <input class="tiny-form" id="t-forms-input" type="email" required placeholder="<?= $tinyForm['form-text'];?>">
                    <p class="t-required">Preenchimento obrigatório*</p>
                </div>
                <?php else:?>
                <div class="fields-wrapper">
                    <input class="tiny-form" id="t-forms-input" type="text" required placeholder="<?= $tinyForm['form-text'];?>">
                    <p class="t-required">Preenchimento obrigatório*</p>
                </div>
                <?php endif;?>
            <?php endforeach;?>
            <?php foreach($forms['text-area'] as $textArea ): ?>
                <div class="fields-wrapper fields-wrapper-text">
                    <textarea class="text-area" id="t-forms-input" type="text" placeholder="<?= $textArea['form-text'];?>"></textarea>
                    <p class="t-required">Preenchimento obrigatório*</p>
                </div>
            <?php endforeach;?>
            <input class="t-forms-button" type="submit" value="<?= $forms['forms-button']['title'];?>">
        </form>
    </div>
</section>