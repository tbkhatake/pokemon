<?php $jobs = get_field('jobs')?>
<?php $jobs_have = $jobs['section-title'] == "" ? "jobs-none" : "jobs"?>
<section class=<?=$jobs_have?>>
    <h2 class="section-title"><?=$jobs['section-title'];?></h2>
    <div class="jobs-mobile">
        <div class="jobs-select-wrapper">
            <select class="jobs-select" name="" id="">
                <?php foreach($jobs['section-cards'] as $jobs_options_key => $jobs_options):?>
                    <option class="jobs-option" value="<?=$jobs_options_key?>" class="jobs-option"><?=$jobs_options['card-selector'] ?></option>
                <?php endforeach;?>
            </select>
            <img class="jobs-select-arrow" src="<?=get_template_directory_uri()?>/images/down-arrow-mobile.svg" alt="seta para baixo">
        </div>
        <div class="jobs-cards-wrapper">
            <?php foreach($jobs['section-cards'] as $jobs_cards_key => $jobs_cards):?>
                <div class="jobs-card">
                    <img class="jobs-card-image" src="<?=$jobs_cards['card-image']['url']?>" alt="<?=$jobs_cards['card-image']['title']?>" class="jobs-card-image">
                    <div class="jobs-content-wrapper">
                        <p class="jobs-card-title"><?=$jobs_cards['card-title']?></p>
                        <span class="jobs-card-red-line"></span>
                        <p class="jobs-card-text"><?=$jobs_cards['card-text']?></p>
                        <div class="jj-wrapper">
                            <?php foreach($jobs_cards['card-jobs'] as $jj):?>
                                <?php if($jj['job-title']):?>
                                    <div class="jj-dropdown">
                                        <p class="jj-dropdown-title"><?=$jj['job-title']?></p>
                                        <img class="jj-dropdown-arrow" src="<?=get_template_directory_uri()?>/images/down-white-arrow.svg" alt="">
                                    </div>
                                    <div class="jj-content">
                                        <p class="jj-desc"><?=$jj['job-desc']?></p>
                                        <?php if($jj['job-button']['title']):?>
                                            <a class="jj-button" href="<?=$jj['job-button']['link']?>"><?=$jj['job-button']['title']?></a>
                                        <?php endif;?>
                                    </div>
                                <?php endif;?>
                            <?php endforeach;?>
                        </div>
                        <?php if($jobs_cards['card-button']['title']):?>
                            <a class="jobs-card-button" href="<?=$jobs_cards['card-button']['link']?>"><?=$jobs_cards['card-button']['title']?></a>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <div class="jobs-desk">
        <div class="jobs-desk-options">
            <?php foreach($jobs['section-cards'] as $jobs_desk_options_key => $jobs_desk_options):?>
                <p class="jobs-desk-option" value="<?=$jobs_desk_options_key?>"><?=$jobs_desk_options['card-selector'] ?></p>
            <?php endforeach;?>
        </div>
        <div class="jobs-desk-controls" aria-label="Carousel Navigation" tabindex="0">
            <img class="jobs-desk-controls-btn" src="<?=get_template_directory_uri()?>/images/left-arrow.svg" alt="left-arrow">
            <img class="jobs-desk-controls-btn" src="<?=get_template_directory_uri()?>/images/right-arrow.svg" alt="right-arrow">
        </div>
        <div class="jobs-desk-cards-wrapper">
            <div class="jobs-slider-wrapper ">
                <?php foreach($jobs['section-cards'] as $jobs_desk_cards_key => $jobs_desk_cards):?>
                    <div class="jobs-slider-padding">
                        <div class="jobs-desk-card">
                            <img class="jobs-desk-card-image" src="<?=$jobs_desk_cards['card-image']['url']?>" alt="<?=$jobs_desk_cards['card-image']['title']?>" class="jobs-card-image">
                            <div class="jobs-desk-content-wrapper">
                                <p class="jobs-desk-card-title"><?=$jobs_desk_cards['card-title']?></p>
                                <span class="jobs-desk-card-red-line"></span>
                                <p class="jobs-desk-card-text"><?=$jobs_desk_cards['card-text']?></p>
                                <div class="jj-desk-wrapper">
                                    <?php foreach($jobs_desk_cards['card-jobs'] as $jj_desk):?>
                                        <?php if($jj_desk['job-title']):?>
                                            <div class="jj-desk-dropdown">
                                                <p class="jj-desk-dropdown-title"><?=$jj_desk['job-title']?></p>
                                                <img class="jj-desk-dropdown-arrow" src="<?=get_template_directory_uri()?>/images/down-white-arrow.svg" alt="">
                                            </div>
                                            <div class="jj-desk-content">
                                                <p class="jj-desk-desc"><?=$jj_desk['job-desc']?></p>
                                            <?php if($jj_desk['job-button']['title']):?>
                                                <a class="jj-desk-button" href="<?=$jj_desk['job-button']['link']?>"><?=$jj_desk['job-button']['title']?></a>
                                            <?php endif;?>
                                            </div>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </div>
                                <?php if($jobs_desk_cards['card-button']['title']):?>
                                    <a class="jobs-desk-card-button" href="<?=$jobs_desk_cards['card-button']['link']?>"><?=$jobs_desk_cards['card-button']['title']?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        </div>

</section>