<section class="pokedex-wrapper">
    <div class="white">
        <img class="load-ball" src="<?=get_template_directory_uri()?>/images/ball.png" alt="ball">
    </div>
    <div class="top">
        <div class="big-ball">
            <div class="blue-part">
                <div class="blue-part-off" id="off"></div>
                <div class="light-blue-part"></div>
            </div>
        </div>
        <div class="little-ball little-ball--red">
            <div class="little-ball-off" id="off"></div>
        </div>
        <div class="little-ball little-ball--yellow">
            <div class="little-ball-off" id="off"></div>
        </div>
        <div class="little-ball little-ball--green">
            <div class="little-ball-off" id="off"></div>
        </div>
        <div class="down-curve"></div>
    </div>
    <div class="bottom">
        <span class="up-line"></span>
        <div class="bottom-inside">
            <div class="white-part">
                <div class="up">
                    <div class="up-ball"></div>
                    <div class="up-ball"></div>
                </div>
                <div class="mid">
                    <div class="mid-off" id="off"></div>
                    <div class="pokemon-list">
                        <?php $pokemons = get_field('pokemons')?>
                        <div class="y-slider">
                            <?php foreach($pokemons as $Yline):?>
                                <div class="y-slider-wrapper">
                                    <?php foreach($Yline as $Xline):?>
                                        <div class="x-slider">
                                            <?php foreach($Xline as $XlineIn):?>
                                                <img class="poke-img" src="<?=$XlineIn['x-line'] ?>" alt="">
                                            <?php endforeach;?>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="down">
                    <div class="down-ball"></div>
                    <div class="down-lines">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="red-part-up">
                <div class="gray-ball"></div>
                <div class="button button--red"></div>
                <div class="button button--blue"></div>
            </div>
            <div class="red-part-down">
                <div class="green-part"></div>
                <div class="directions">
                    <div class="vert">
                        <span class="up"></span>
                        <span class="down"></span>
                    </div>
                    <div class="horiz">
                        <span class="left"></span>
                        <span class="right"></span>
                    </div>
                    <div class="center">
                        <div class="gray-ball"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>