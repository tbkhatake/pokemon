<?php $time_line_section = get_field('time-line-section')?>
<?php $time_line_have = $time_line_section['section-title'] == "" ? "time-line-none" : "time-line"?>
<section class=<?=$time_line_have?>>
<h2 class="section-title"><?php echo($time_line_section['section-title']); ?></h2>
    <div class="time-line-mobile ">
        <?php foreach($time_line_section['section-cards'] as $tl_cards):?>
            <div class="card-line">
                <span class="card-ball"></span>
                <p class="card-age"><?=$tl_cards['card-age']?></p>
                <div class="card-content">
                    <p class="content-title"><?=$tl_cards['card-title']?></p>
                    <span class="content-red-line"></span>
                    <p class="content-desc"><?=$tl_cards['card-description']?></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <div class="time-line-desk ">
        <div class="image-wrapper">
            <?php foreach($time_line_section['section-cards'] as $card_image_key => $card_image):?>
                <img class="card-image" src="<?=$card_image['card-image']['url']?>" alt="<?=$card_image['card-image']['title']?>">
            <?php endforeach;?>
        </div>
        <div class="age-wrapper">
            <span class="age-red-line"></span>
            <?php foreach($time_line_section['section-cards'] as $card_age_key => $card_age):?>
                <div class="age-block">
                    <span class="age-ball"></span>
                    <p class="age"><?=$card_age['card-age']?></p>
                </div>
            <?php endforeach;?>
        </div>
        <div class="content-wrapper">
            <?php foreach($time_line_section['section-cards'] as $card_content_key => $card_content):?>
                <div class="desk-card-content">
                    <p class="content-title"><?=$card_content['card-title']?></p>
                    <span class="content-red-line"></span>
                    <p class="content-desc"><?=$card_content['card-description']?></p>
                </div>
            <?php endforeach;?>
        </div>  
    </div>
</section>