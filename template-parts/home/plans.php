<?php $section2 = get_field('section2-category')?>
<?php $section2_title = get_field('section2-title')?>
<section class="plans"> 
<h2 class="section-title"><?php echo($section2_title); ?></h2>
    <form class="categories" action="">
        <select class="categories-select" name="" id="">
            <?php foreach($section2 as $category):?>
                <option class="options" value="<?= $category['category-title']?>"><?= $category['category-title']?></option>
            <?php endforeach; ?>
        </select>
        <img class="categories-arrow" src="<?=get_template_directory_uri()?>/images/down-arrow-mobile.svg" alt="seta para baixo">
    </form>
    <div class="cards-wrapper">
        <?php foreach($section2 as $cards):?>
            <?php foreach($cards['section2-cards'] as $card):?>
            <div class="card">
                <h3 class="card-speed"><?= $card['card2-speed']?> MB</h3>
                <p class="card-price">R$ <?= $card['card2-price']?></p>
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
            
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</section>