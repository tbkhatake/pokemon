<?php $tvChannels = get_field('tvChannels-section')?>

<section class="channels-packages container">
    <h2 class="section-title"><?= $tvChannels['section-title'];?></h2>
    <p class="section-text"><?= $tvChannels['section-text'];?></p>
    <div class="mobile">
        <form action="" class="packages-wrapper">
            <select name="" id="" class="packages">
                <?php foreach($tvChannels['section-packages'] as $packages):?>
                    <option value="<?=$packages['package-number']?>"><?=$packages['package-name']?></option>
                <?php endforeach;?>
            </select>
            <img class="packages-arrow" src="<?=get_template_directory_uri()?>/images/down-arrow-mobile.svg" alt="seta para baixo">
        </form>
        <div class="categories">
            <?php foreach($tvChannels['section-categories'] as $catNumber => $categories):?>
                <p class="categorie categorie-<?=($catNumber+1)?> "><?= $categories['categorie-name']?></p>
            <?php endforeach;?>
        </div>
        <div class="channels-wrapper">
            <?php foreach($tvChannels['section-categories'] as $catNumber => $categories_channels):?>
                <?php foreach($categories_channels['categorie-channels'] as $channels):?>
                    <div class="channel-wrapper channel-wrapper-<?=($catNumber+1)?>">
                        <div class="icon-wrapper icon-wrapper-<?=$channels['channel-packges']?>">
                            <img class="channel-icon " src="<?= $channels['channel-icon']['url']?>" alt="ícone <?=$channels['channel-name']?>">
                        </div>
                        <p class="channel-name"><?= $channels['channel-name']?></p>
                    </div>
                <?php endforeach;?>
            <?php endforeach;?>
        </div>
        <button class="button button-more"><?= $tvChannels['more-button'];?></button>
        <button class="button button-less"><?= $tvChannels['less-button'];?></button>
    </div>
    <div class="desktop">
        <div class="d-packages-wrapper">
        <?php foreach($tvChannels['section-packages'] as $packages):?>
            <p class="d-packages d-packages-<?=$packages['package-number']?>"><?=$packages['package-name']?></p>
        <?php endforeach;?>
        </div>
        <div class="categories">
            <?php foreach($tvChannels['section-categories'] as $catNumber => $categories):?>
                <p class="d-categorie d-categorie-<?=($catNumber+1)?> "><?= $categories['categorie-name']?></p>
            <?php endforeach;?>
        </div>
        <div class="channels-cat-wrapper">
        <?php foreach($tvChannels['section-categories'] as $catNumber => $categories_channels):?>
            <div class="channels-cat channels-cat-<?=($catNumber+1)?>">
                <p class="channels-cat-title"><?= $categories_channels['categorie-name']?></p>
                <div class="slider-controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
                        <img class="controls-btn" src="<?=get_template_directory_uri()?>/images/left-arrow.svg" alt="left-arrow">
                        <img class="controls-btn" src="<?=get_template_directory_uri()?>/images/right-arrow.svg" alt="right-arrow">
                </div>
                <div class="d-channels-wrapper packages-slider">
                    <?php foreach($categories_channels['categorie-channels'] as $channels):?>
                        <div class="carousel-wrapper">
                            <div class="channel-wrapper">
                                <div class="d-icon-wrapper d-icon-wrapper-<?=$channels['channel-packges']?>">
                                    <img class="channel-icon " src="<?= $channels['channel-icon']['url']?>" alt="ícone <?=$channels['channel-name']?>">
                                </div>
                                <p class="channel-name"><?= $channels['channel-name']?></p>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>

</section>