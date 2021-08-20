<?php $section2 = get_field('section2-category')?>
<?php $section2_title = get_field('section2-title')?>
<section class="plans"> 
<h2 class="section-title"><?php echo($section2_title); ?></h2>
    <form class="categories" action="">
        <input type="hidden" name="pageid" id="pageid" value="<?= get_the_ID()?>">
        <select class="categories-select" name="plans-categories">
            <?php foreach($section2 as $category):?>
                <option class="options" value="<?= $category['category-title']?>"><?= $category['category-title']?></option>
            <?php endforeach; ?>
        </select>
        <img class="categories-arrow" src="<?=get_template_directory_uri()?>/images/down-arrow-mobile.svg" alt="seta para baixo">   
    </form>

    <form class="categories-desk" action="">
        <input type="hidden" name="pageid" value="<?= get_the_ID()?>">
        <div class="categories-desk-select" name="plans-categories">
            <?php foreach($section2 as $category):?>
                <p role="button" class="desk-options" plan="<?= $category['category-title']?>"><?= $category['category-title']?></p>
            <?php endforeach; ?>
        </div>
    </form>
    
    <div class="cards-wrapper">
        <div class="plans-slider #tns3">
            <?php foreach($section2[0]['section2-cards'] as $card):?>
                <?php if ($card['card2-mvp'] == 1){?>
                    <div class="card card-active">
                        <div class="card-dest"><?= $card['card2-mvpText']?></div>
                        <h3 class="card-speed"><?= $card['card2-speed']?></h3>
                        <p class="card-price"><?= $card['card2-price']?></p>
                        <p class="card-text"><?= $card['card2-text']?></p>
                        <span class="card-redline"> </span>
                        <div class="features-wrapper">                
                            <?php foreach($card['card2-features'] as $features):?>
                                <div class="feature">
                                    <div class="icon-space">
                                        <img class="feature-icon" src="<?= $features['features-icon']['url']?>" alt="">
                                    </div>
                                    <p class="feature-title"><?= $features['features-title']?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="services-wrapper"> 
                            <p class="services-title">Serviços inclusos</p> 
                            <div class="services-IS">
                                <?php foreach($card['card2-IS'] as $services):?>
                                    <a class="IS-link" href="<?= $services['IS-link']?>"><img class="IS-icon" src="<?= $services['IS-icon']['url']?>" alt=""></a>
                                <?php endforeach; ?>
                            </div>
                        </div>  
                        <a class="cta" href="<?= $card['card2-cta']['url']?>"><?= $card['card2-cta']['title']?> </a>
                    </div>
                <?php }else{ ?>   
                    <div class="card">
                        <h3 class="card-speed"><?= $card['card2-speed']?></h3>
                        <p class="card-price"><?= $card['card2-price']?></p>
                        <p class="card-text"><?= $card['card2-text']?></p>
                        <span class="card-redline"> </span>
                        <div class="features-wrapper">                
                            <?php foreach($card['card2-features'] as $features):?>
                                <div class="feature">
                                    <div class="icon-space">
                                        <img class="feature-icon" src="<?= $features['features-icon']['url']?>" alt="">
                                    </div>
                                    <p class="feature-title"><?= $features['features-title']?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="services-wrapper"> 
                            <p class="services-title">Serviços inclusos</p> 
                            <div class="services-IS">
                                <?php foreach($card['card2-IS'] as $services):?>
                                    <a class="IS-link" href="<?= $services['IS-link']?>"><img class="IS-icon" src="<?= $services['IS-icon']['url']?>" alt=""></a>
                                <?php endforeach; ?>
                            </div>
                        </div>  
                        <a class="cta" href="<?= $card['card2-cta']['url']?>"><?= $card['card2-cta']['title']?> </a>
                    </div> 
                <?php } ?> 
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div class="plans-graphism-container">
    <img class="plans-graphism" src="<?=get_template_directory_uri()?>/images/fundo-plans.svg">
</div>