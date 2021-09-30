<?php 
    $text_title = get_field('titulo_texto');
    $first_block = get_field('primeiro_bloco');
    $text_image = get_field('imagem_texto');
    $second_block = get_field('segundo_bloco');
?>
<section class="text-section">
    <div class="container">
        <h2 class="section-title"><?= $text_title; ?></h2>
        <p class="first-block"><?= $first_block; ?></p>
    </div>
    <img class="text-image" alt="<?= $text_image['alt']?>" src="<?= $text_image['url'];?>" />
    <div class="container">
        <p class="second-block"><?= $second_block; ?></p>
    </div>
</section>