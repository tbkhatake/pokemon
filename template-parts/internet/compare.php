<?php $compare = get_field('compare-plans')?>
<?php $compare_title = get_field('compare-title')?>
<section class="compare">
    <h2 class="section-title"><?php echo($compare_title);?></h2>
    <div class=compare-mobile>
        <div class="cards">
            <div class="compare-slider">
                <?php foreach($compare as $card):?>
                    <div class="card">
                        <div class="card-plan-container">
                            <h3 class="card-plan"><?=$card['plans-plan'];?></h3>
                        </div>
                        <p class="card-benefit">Tecnololgia</p>
                        <p class="card-text -tecnology"><?=$card['plans-tecnology'];?></p>
                        <p class="card-benefit">Velocidade De Download</p>
                        <p class="card-text -downSpeed"><?=$card['plans-downSpeed'];?></p>
                        <p class="card-benefit">Velocidade De Upload</p>
                        <p class="card-text -upSpeed"><?=$card['plans-upSpeed'];?></p>
                        <p class="card-benefit">Wi-Fi</p>
                        <p class="card-text -wifi"><?=$card['plans-wifi'];?></p>
                        <p class="card-benefit">Acesso Simultâneo</p>
                        <p class="card-text -qttAcess"><?=$card['plans-qttAcess'];?></p>
                        <p class="card-benefit">Franquia</p>
                        <p class="card-text -franchise"><?=$card['plans-franchise'];?></p>
                        <div class="card-services">
                            <p class="card-benefit">Serviços digitais</p>
                            <div class="card-icons">
                                <?php foreach($card['plans-services'] as $icon):?>
                                    <img class="card-icon" src="<?=$icon['plans-services-icon']['url'];?>" alt="ícone">
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="compare-desktop">
        <table class="compare-table">
            <tr>
                <th>&nbsp;</th>
                <?php foreach($compare as $card):?>
                    <td> 
                        <div class="card-plan-container"><p class="card-plan"><?=$card['plans-plan'];?></p></div>
                    </td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="benefits-name">Tecnololgia</th>
                <?php foreach($compare as $card):?>
                    <td> <p class="card-text -tecnology"><?=$card['plans-tecnology'];?></p></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="benefits-name">Velocidade De Download</th>
                <?php foreach($compare as $card):?>
                    <td> <p class="card-text -downSpeed"><?=$card['plans-downSpeed'];?></p></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="benefits-name">Velocidade De Upload</th>
                <?php foreach($compare as $card):?>
                    <td> <p class="card-text -upSpeed"><?=$card['plans-upSpeed'];?></p></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="benefits-name">Wi-Fi</th>
                <?php foreach($compare as $card):?>
                    <td> <p class="card-text -wifi"><?=$card['plans-wifi'];?></p></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="benefits-name">Acesso Simultâneo</th>
                <?php foreach($compare as $card):?>
                    <td> <p class="card-text -qttAcess"><?=$card['plans-qttAcess'];?></p></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="benefits-name">Franquia</th>
                <?php foreach($compare as $card):?>
                    <td> <p class="card-text -franchise"><?=$card['plans-franchise'];?></p></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th class="benefits-name">Serviços digitais</th>
                <?php foreach($compare as $card):?>
                    <td> 
                        <div class="card-text services">
                        <?php foreach($card['plans-services'] as $icon):?>
                            <img class="card-icon" src="<?=$icon['plans-services-icon']['url'];?>" alt="ícone">
                        <?php endforeach; ?>
                        </div>
                    </td>
                <?php endforeach; ?>
            </tr>
            
            

        </table>
    </div>

    <!-- <div class="compare-desktop">
        <div class="benefits">
            <p class="benefits-name">Tecnololgia</p>
            <p class="benefits-name">Velocidade De Download</p>
            <p class="benefits-name">Velocidade De Upload</p>
            <p class="benefits-name">Wi-Fi</p>
            <p class="benefits-name">Acesso Simultâneo</p>
            <p class="benefits-name">Franquia</p>
            <p class="benefits-name">Serviços digitais</p>
        </div>
        <div class="cards">
            <?php foreach($compare as $card):?>
                <div class="card">
                    <h3 class="card-plan"><?=$card['plans-plan'];?></h3>
                    <p class="card-text -tecnology"><?=$card['plans-tecnology'];?></p>
                    <p class="card-text -downSpeed"><?=$card['plans-downSpeed'];?></p>
                    <p class="card-text -upSpeed"><?=$card['plans-upSpeed'];?></p>
                    <p class="card-text -wifi"><?=$card['plans-wifi'];?></p>
                    <p class="card-text -qttAcess"><?=$card['plans-qttAcess'];?></p>
                    <p class="card-text -franchise"><?=$card['plans-franchise'];?></p>
                    <div class="card-services">
                        <?php foreach($card['plans-services'] as $icon):?>
                            <img class="card-icon" src="<?=$icon['plans-services-icon']['url'];?>" alt="ícone">
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div> -->
</section>