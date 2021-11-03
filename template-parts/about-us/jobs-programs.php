<?php $jobs_programs = get_field('jobs-programs')?>
<?php $jobs_programs_have = $jobs_programs['section-title'] == "" ? "jobs-programs-none" : "jobs-programs"?>
<section class=<?=$jobs_programs_have?> id="carreira">
    <h2 class="section-title"><?=$jobs_programs['section-title'];?></h2>
    <div class="jp-mobile">
        <div class="jp-select-wrapper">
            <select class="jp-select" name="" id="">
                <?php foreach($jobs_programs['section-cards'] as $jp_options_key => $jp_options):?>
                    <option class="jp-option" value="<?=$jp_options_key?>" class="jp-option"><?=$jp_options['card-selector'] ?></option>
                <?php endforeach;?>
            </select>
            <img class="jp-select-arrow" src="<?=get_template_directory_uri()?>/images/down-arrow-mobile.svg" alt="seta para baixo">
        </div>
        <div class="jp-cards-wrapper">
            <?php foreach($jobs_programs['section-cards'] as $jp_cards_key => $jp_cards):?>
                <div class="jp-card">
                    <img class="jp-card-image" src="<?=$jp_cards['card-image']['url']?>" alt="<?=$jp_cards['card-image']['title']?>" class="jp-card-image">
                    <div class="jp-content-wrapper">
                        <p class="jp-card-title"><?=$jp_cards['card-title']?></p>
                        <span class="jp-card-red-line"></span>
                        <p class="jp-card-text"><?=$jp_cards['card-text']?></p>
                        <?php if($jp_cards['card-button']['title']):?>
                            <a class="jp-card-button" href="<?=$jp_cards['card-button']['link']?>"><?=$jp_cards['card-button']['title']?></a>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="jp-desk">
        <div class="jp-desk-options">
            <?php foreach($jobs_programs['section-cards'] as $jp_desk_options_key => $jp_desk_options):?>
                <p class="jp-desk-option" value="<?=$jp_desk_options_key?>"><?=$jp_desk_options['card-selector'] ?></p>
            <?php endforeach;?>
        </div>
        <div class="jp-desk-controls" aria-label="Carousel Navigation" tabindex="0">
            <img class="jp-desk-controls-btn" src="<?=get_template_directory_uri()?>/images/left-arrow.svg" alt="left-arrow">
            <img class="jp-desk-controls-btn" src="<?=get_template_directory_uri()?>/images/right-arrow.svg" alt="right-arrow">
        </div>
        <div class="jp-desk-cards-wrapper">
            <div class="jp-slider-wrapper ">
                <?php foreach($jobs_programs['section-cards'] as $jp_desk_cards_key => $jp_desk_cards):?>
                    <div class="jp-slider-padding">
                        <div class="jp-desk-card">
                            <img class="jp-desk-card-image" src="<?=$jp_desk_cards['card-image']['url']?>" alt="<?=$jp_desk_cards['card-image']['title']?>" class="jp-card-image">
                            <div class="jp-desk-content-wrapper">
                                <p class="jp-desk-card-title"><?=$jp_desk_cards['card-title']?></p>
                                <span class="jp-desk-card-red-line"></span>
                                <p class="jp-desk-card-text"><?=$jp_desk_cards['card-text']?></p>
                                <?php if($jp_cards['card-button']['title']):?>
                                    <a class="jp-desk-card-button" href="<?=$jp_desk_cards['card-button']['link']?>"><?=$jp_desk_cards['card-button']['title']?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        </div>

</section>