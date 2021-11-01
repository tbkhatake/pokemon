<?php $desc_section = get_field('description-section')?>
<?php $desc_section_have = $desc_section['section-title'] == "" ? "description-none" : "description"?>
<section class=<?=$desc_section_have?>>
    <h2 class="section-title"><?= $desc_section['section-title'];?></h2>
    <?php foreach($desc_section['section-blocks'] as $block):?>
        <div class="desc-wrapper">
            <div class="title-wrapper">
                <p class="title-title"><?= $block['block-title']?></p>
                <span class="title-signal"></span>
            </div>
            <div class="desc-content">
                <div class="content-desc"><?= $block['block-text']?></div>
                <?php foreach($block['block-first-text'] as $first_paragraph ):?>
                    <p class="first-title"><?= $first_paragraph['paragraph-title']?></p>
                    <p class="first-text"><?= $first_paragraph['paragraph-text']?></p>
                <?php endforeach;?>
                <img class="content-image" src="<?= $block['block-image']['url']?>" alt="<?= $block['block-image']['title']?>">
                <?php foreach($block['block-second-text'] as $second_paragraph ):?>
                    <p class="second-title"><?= $second_paragraph['paragraph-title']?></p>
                    <p class="second-text"><?= $second_paragraph['paragraph-text']?></p>
                <?php endforeach;?>
                <div class="features-wraper">
                    <?php foreach($block['block-features'] as $bFeatures):?>
                        <div class="feature">
                            <div class="icon-wrapper">
                                <img class="feature-icon" src="<?= $bFeatures['feature-icon']['url']?>" alt="<?= $bFeatures['feature-image']['title']?>">
                            </div>
                            <p class="feature-text"><?= $bFeatures['feature-text']?></p>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</section>