<?php $compare = get_field('compare-plans')?>
<?php $compare_title = get_field('compare-title')?>
<?php $compare_title_have = $compare_title == "" ? "compare-none" : "compare"?>
<section class=<?=$compare_title_have?>>
    <h2 class="section-title"><?php echo($compare_title);?></h2>
    <div class=compare-mobile>
        <div class="cards">
            <div class="compare-slider">
                <?php foreach($compare as $card):?>
                    <div class="card">
                        <div class="card-plan-container">
                            <h3 class="card-plan"><?=$card['plans-plan'];?></h3>
                        </div>
                        <p class="card-benefit">Velocidade De Download</p>
                        <p class="card-text -downSpeed"><?=$card['plans-downSpeed'];?></p>
                        <p class="card-benefit">Velocidade De Upload</p>
                        <p class="card-text -upSpeed"><?=$card['plans-upSpeed'];?></p>
                        <p class="card-benefit">Tecnololgia</p>
                        <img class="tec-icon" src="<?=$card['plans-tec-icon']['url'];?>" alt="ícone">
                        <p class="card-text -tecnology"><?=$card['plans-tecnology'];?></p>
                        <p class="card-benefit">Wi-Fi</p>
                        <img class="wifi-icon" src="<?=$card['plans-wifi-icon']['url'];?>" alt="ícone">
                        <p class="card-text -wifi"><?=$card['plans-wifi'];?></p>
                        <p class="card-benefit">Acesso Simultâneo</p>
                        <p class="card-text -qttAcess"><?=$card['plans-qttAcess'];?></p>
                        <p class="card-benefit">Franquia</p>
                        <img class="franch-icon" src="<?=$card['plans-franchise-icon']['url'];?>" alt="ícone">
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
            <tr class="tr">
                <th class="th">&nbsp;</th>
                <?php foreach($compare as $card):?>
                    <td class="td"> 
                        <div class="card-plan-container"><p class="card-plan"><?=$card['plans-plan'];?></p></div>
                    </td>
                <?php endforeach; ?>
            </tr>
            <tr class="tr">
            <th class="th"> <p class="benefits-name">Velocidade De Download</p></th>
            <?php foreach($compare as $card):?>
                <td class="td"> 
                    <p class="card-text -downSpeed"><?=$card['plans-downSpeed'];?></p>
                    <img class="down-icon" src="<?=get_template_directory_uri()?>/images/question-circle.png" alt="">
                    <p class="info-box"><?=$card['plans-obs'];?></p>
                </td>
                <?php endforeach; ?>
            </tr>
            <tr class="tr">
            <th class="th"> <p class="benefits-name">Velocidade De Upload</p></th>
            <?php foreach($compare as $card):?>
                <td class="td"> <p class="card-text -upSpeed"><?=$card['plans-upSpeed'];?></p></td>
                <?php endforeach; ?>
            </tr>
            <tr class="tr">
                <th class="th"> <p class="benefits-name">Tecnololgia</p></th>
                <?php foreach($compare as $card):?>
                    <td class="td"> 
                        <img class="tec-icon" src="<?=$card['plans-tec-icon']['url'];?>" alt="ícone">
                        <p class="card-text -tecnology"><?=$card['plans-tecnology'];?></p>
                    </td>
                <?php endforeach; ?>
            </tr>
            <tr class="tr">
                <th class="th"> <p class="benefits-name">Mega Wi-Fi</p></th>
                <?php foreach($compare as $card):?>
                    <td class="td"> 
                        <img class="wifi-icon" src="<?=$card['plans-wifi-icon']['url'];?>" alt="ícone">
                        <p class="card-text -wifi"><?=$card['plans-wifi'];?></p>
                    </td>
                <?php endforeach; ?>
            </tr>
            <tr class="tr">
                <th class="th"> <p class="benefits-name">Franquia</p></th>
                <?php foreach($compare as $card):?>
                    <td class="td"> 
                        <img class="franch-icon" src="<?=$card['plans-franchise-icon']['url'];?>" alt="ícone">
                        <p class="card-text -franchise"><?=$card['plans-franchise'];?></p>
                    </td>
                <?php endforeach; ?>
            </tr>
            <tr class="tr">
                <th class="th"> <p class="benefits-name">Acesso Simultâneo</p></th>
                <?php foreach($compare as $card):?>
                    <td class="td"> <p class="card-text -qttAcess"><?=$card['plans-qttAcess'];?></p></td>
                <?php endforeach; ?>
            </tr>
            <tr class="tr">
                <th class="th"> <p class="benefits-name">Serviços digitais</p></th>
                <?php foreach($compare as $card):?>
                    <td class="td td-services"> 
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
</section>
<div class="compare-graph">
    <img class="compare-graph-img-1" src="<?=get_template_directory_uri()?>/images/internet/compare-graph1.svg" alt="graphismo">
    <img class="compare-graph-img-2" src="<?=get_template_directory_uri()?>/images/internet/compare-graph2.svg" alt="graphismo">
</div>