<?php $section4 = get_field('section4-boxes');?>
<?php $section4_title = get_field('section4-title');?>
<?php $section4_title_have = $section4_title == "" ? "hire-us-none" : "hire-us"?>
<section class=<?=$section4_title_have?>  id="contratar">
    <div class="container">
        <h2 class="section-title"><?= $section4_title; ?></h2>
        <div class="box-grid">
        <?php foreach($section4 as $box):?>
            <?php
                $buttonLink = $box['box-link'];
                $icon = $box['box-icon'];
                $info = $box['box-text'];
            ?>
            <a class="button-link" href="<?= $buttonLink; ?>"> <button type="button" class="box-wrapper">
                <img class="box-icon" src="<?= $icon['url']; ?>" alt="<?= $icon['alt']; ?>">
                <p class="box-info"><?= $info; ?></p>
            </button></a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div class="hire-us-graphism-container">
    <img class="hire-us-graphism" src="<?=get_template_directory_uri()?>/images/fundo-hu.svg">
</div>