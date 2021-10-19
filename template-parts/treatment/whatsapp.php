<?php $whatsapp = get_field('whatsapp-section')?>

<section class="whatsapp">
    <h2 class="section-title"><?= $whatsapp['section-title'];?></h2>
    <div class="content-wrapper">
        <img class="whatsapp-image" src="<?= $whatsapp['section-icon']['url'];?>" alt="<?= $whatsapp['section-icon']['title'];?>">
        <p class="whatsapp-tell"><?= $whatsapp['section-tell'];?></p>
    </div>
    <a class="whatsapp-button" href="<?= $whatsapp['section-button']['url'];?>"> <?= $whatsapp['section-button']['title'];?></a>
</section>