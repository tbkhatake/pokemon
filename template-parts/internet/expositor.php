<?php $expositor_title = get_field('expositor-title')?>
<?php $expositor_main_image = get_field('expositor-main-image')?>
<?php $expositor_main_text = get_field('expositor-main-text')?>
<?php $expositor_itens = get_field('expositor-itens')?>

<section class="expositor">
<h2 class="section-title"><?php echo($expositor_title);?></h2>
<div class="section-wrapper">
<div class="sq-wrapper sq-wrapper1">
    <span class="sq sq-1"></span> 
    <span class="sq sq-2"></span>
    <span class="sq sq-3"></span>  
</div>
<div class="sq-wrapper sq-wrapper-2">
    <span class="sq sq-1"></span> 
    <span class="sq sq-2"></span>
    <span class="sq sq-3"></span>  
</div>
<svg class="svg svg-up-line" viewBox="0 0 1920 200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(252, 253, 255, 1)" d="M 0 50 L 207 50 L 207 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(252, 253, 255, 1)" d="M 206 50 L 485 145 L 485 0 L 206 0 Z" stroke-width="0"></path> <path fill="rgba(252, 253, 255, 1)" d="M 484 145 L 929 57 L 929 0 L 484 0 Z" stroke-width="0"></path><path fill="rgba(252, 253, 255, 1)" d="M 928 57 L 1389 157 L 1389 0 L 928 0 Z" stroke-width="0"></path><path fill="rgba(252, 253, 255, 1)" d="M 1388 157 L 1920 50 L 1920 0 L 1388 0 Z" stroke-width="0"></path></svg>
    <div class="main-img-wrapper">
        <div class="main-img-container">
            <div class="main-img-wrapper-slider">
                <?php foreach($expositor_main_image as $image):?>
                    <img class="main-img" src="<?= $image['image']['url'];?>" alt="Imagem principal da seção">
                <?php endforeach; ?>
            </div>
            <div class="content-wrapper-desk">
                <h3 class="main-text"><?= $expositor_main_text; ?></h3>
                <span class="redline"></span>
                <?php foreach($expositor_itens as $item):?>
                    <div class="itens-wrapper">
                        <div class="item-img-wrapper">
                            <img class="item-img" src="<?= $item['expositor-item-icon']['url'];?>" alt="Ícone do item">
                        </div>
                        <p class="item-text"><?= $item['expositor-item-text'];?></p>
                    </div>
                <?php endforeach; ?>   
            </div>
        </div>
    </div>
    <svg class="svg svg-down-line" viewBox="0 0 1920 260" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 192 L 367 81 L 367 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 366 81 L 637 201 L 637 0 L 366 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 636 201 L 1053 70 L 1053 0 L 636 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1052 70 L 1564 177 L 1564 0 L 1052 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1563 177 L 1920 93 L 1920 0 L 1563 0 Z" stroke-width="0"></path></svg>
    <div class="content-wrapper-mobile">
        <h3 class="main-text"><?= $expositor_main_text; ?></h3>
        <span class="redline"></span>
        <?php foreach($expositor_itens as $item):?>
            <div class="itens-wrapper">
                <div class="item-img-wrapper">
                    <img class="item-img" src="<?= $item['expositor-item-icon']['url'];?>" alt="Ícone do item">
                </div>
                <p class="item-text"><?= $item['expositor-item-text'];?></p>
            </div>
        <?php endforeach; ?>   
    </div>
</div>
</section>