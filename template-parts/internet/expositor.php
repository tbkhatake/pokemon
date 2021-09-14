<?php $expositor_title = get_field('expositor-title')?>
<?php $expositor_main_image = get_field('expositor-main-image')?>
<?php $expositor_main_text = get_field('expositor-main-text')?>
<?php $expositor_itens = get_field('expositor-itens')?>

<section class="expositor">
<h2 class="section-title"><?php echo($expositor_title);?></h2>
<div class="section-wrapper">
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