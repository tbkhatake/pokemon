<?php foreach($section2 as $cards):?>
                <?php foreach($cards['section2-cards'] as $card):?>
                    <?php if ($card['card2-mvp'] == 1){?>
                        <div class="card card-active">
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
                    <?php }else{ ?>   
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
                    <?php } ?> 
                <?php endforeach; ?>
            <?php endforeach; ?>
