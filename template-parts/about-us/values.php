<?php $values_section = get_field('values-section')?>
<?php $values_have = $values_section['section-title'] == "" ? "values-section-none" : "values-section"?>
<section class=<?=$values_have?>>
    <h2 class="section-title"><?= $values_section['section-title']; ?></h2>
    <div class="values-slides-wrapper">
        <?php foreach($values_section['section-cards'] as $values_cards):?>
            <?php if($values_cards['selector-icon']['url'] && $values_cards['selector-title']):?>
                <div class="slide-element">
                    <div class="slide">
                        <img class="slide-image" src="<?= $values_cards['card-image']['url'] ?>" alt="<?= $values_cards['card-image']['alt'] ?>">
                        <div class="slide-box">
                            <p class="box-title"><?= $values_cards['card-title']; ?></p>
                            <p class="box-description"><?= $values_cards['card-desc']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        <?php endforeach; ?>
    </div>
    <div class="box-grid">
        <div class="box-slider">
            <?php foreach($values_section['section-cards'] as $values_cards):?>
                <?php if($values_cards['selector-icon']['url'] && $values_cards['selector-title']):?>
                    <div class="box-elements">
                        <button type="button" class="box-wrapper">
                            <img class="box-icon" src="<?= $values_cards['selector-icon']['url'] ?>" alt="<?= $values_cards['selector-icon']['alt']; ?>">
                            <p class="box-info"><?= $values_cards['selector-title']; ?></p>
                        </button>
                    </div>
                <?php endif;?>
            <?php endforeach; ?>
        </div>
    </div>
</section>