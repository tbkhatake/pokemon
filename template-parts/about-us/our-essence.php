<?php $our_essence_section = get_field('our-essence-section')?>
<section class="our-essence">
    <h2 class="section-title"><?php echo($our_essence_section['section-title']); ?></h2>
    <div class="os-mobile">
        <div class="os-slider">
            <?php foreach($our_essence_section['section-cards'] as $os_card):?>
                <div class="slider-wrapper">
                    <div class="section-wrapper">
                        <img class="bg-image" src="<?= $os_card['card-image']['url']?>" alt="">
                        <div class="content-wrapper">
                            <p class="card-title"><?= $os_card['card-title']?></p>
                            <span class="card-red-line"></span>
                            <?php foreach($os_card['card-texts'] as $os_card_texts):?>
                                <p class="card-text"><?=$os_card_texts['card-text']?></p>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="os-desk">
        <div class="os-desk-options">
            <?php foreach($our_essence_section['section-cards'] as $os_card):?>
                <p class="os-option"><?= $os_card['card-title']?></p>
            <?php endforeach;?>
        </div> 
        <?php foreach($our_essence_section['section-cards'] as $os_card):?>
            <div class="os-section-wrapper">
                <img class="bg-image" src="<?= $os_card['card-image']['url']?>" alt="">
                <div class="content-wrapper">
                    <p class="card-title"><?= $os_card['card-title']?></p>
                    <span class="card-red-line"></span>
                    <?php foreach($os_card['card-texts'] as $os_card_texts):?>
                        <p class="card-text"><?=$os_card_texts['card-text']?></p>
                    <?php endforeach;?>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>