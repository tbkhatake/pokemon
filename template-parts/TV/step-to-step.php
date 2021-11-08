<?php $step = get_field('step-section')?>
<?php $step_have = $step['section-title'] == "" ? "step-none" : "step"?>
<section class=<?=$step_have?>>
    <h2 class="section-title"><?= $step['section-title'];?></h2>
    <p class="section-text"><?= $step['section-text'];?></p>
    <div class="step-carousel">
        <?php foreach($step['section-itens'] as $key => $item):?>
            <div class="step-carousel-wrapper">
                <div class="items-wrapper">
                    <div class="item-img-wrapper">
                        <span class="item-background"></span>
                        <img class="item-img" src="<?=$item['step-image']['url']?>" alt="<?=$item['step-image']['title']?>">
                        <div class="item-img-title-wrapper">
                            <p class="item-img-title"><?=$item['cell-title']?></p>
                        </div>
                        <span class="red-ball">
                            <p class="red-ball-number"><?=$key+1?></p>
                        </span>
                    </div>
                    <div class="content-wrapper">
                        <p class="content-title"><?=$item['step-title']?></p>
                        <span class="content-redline"></span>
                        <p class="content-text"><?=$item['step-text']?></p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <div class="step-slider-controls-wrapper">
        <div class="step-slider-controls" id="<?=$key?>" aria-label="Carousel Navigation" tabindex="0">
            <img class="step-controls-btn" src="<?=get_template_directory_uri()?>/images/TV/left-arrow.svg" alt="left-arrow">
            <img class="step-controls-btn" src="<?=get_template_directory_uri()?>/images/TV/right-arrow.svg" alt="right-arrow">
        </div>
    </div>
</section>
<?php $step_have_graph = $step['section-title'] == "" ? "step-to-step-graph-none" : "step-to-step-graph"?>
<div class=<?=$step_have_graph?>>
    <img class="step-to-step-graph-img" src="<?=get_template_directory_uri()?>/images/TV/step-to-step-graph.svg" alt="graphismo">
</div>