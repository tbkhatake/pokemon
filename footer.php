<?php wp_footer() ?>
    <?php
        $socialTitle = get_field('titulo_redes_sociais', 'options');
        $footerLogo = get_field('logo_footer', 'options')
    ?>
    <footer class="footer-section">
        <div class="container-footer">
            <div class="upper-footer">
                <div class="footer-list">
                    <?php if(have_rows('coluna_footer', 'options')): ?>
                        <?php while(have_rows('coluna_footer', 'options')): the_row(); ?>
                            <?php 
                                $columnTitle = get_sub_field('titulo_coluna');
                            ?>
                            <div class="list-wrapper">
                                <h4 class="list-title"><?= $columnTitle; ?></h4>
                                <ul class="list-group">
                                    <?php if(have_rows('itens_lista')): ?>
                                        <?php while(have_rows('itens_lista')): the_row(); ?>
                                        <?php 
                                            $listItem = get_sub_field('item_lista');
                                            $linkList = get_sub_field('item_link');
                                        ?>
                                            <li class="list-item"> <a class="list-link" href="<?= $linkList; ?>"><?= $listItem; ?></a></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="social-media">
                    <h4 class="list-title"><?= $socialTitle; ?></h4>
                    <div class="icons-wrapper">
                        <?php if(have_rows('redes_sociais', 'options')): ?>
                            <?php while(have_rows('redes_sociais', 'options')): the_row(); ?>
                                <?php 
                                    $socialIcon = get_sub_field('icone_rede_social');
                                    $socialLink = get_sub_field('link_rede_social');
                                ?>
                            <div class="social-container">
                               <a class="social-link" href="<?= $linkList; ?>"> <img class="social-icon" src="<?= $socialIcon; ?>" alt="<?= $socialIcon['alt']; ?>"></a>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="footer-info">
                    <div class="bottom-footer-content">
                        <div class="footer-items">
                            <?php if(have_rows('info_rodape', 'options')): ?>
                                <?php while(have_rows('info_rodape', 'options')): the_row(); ?>
                                    <?php 
                                        $itemInfo = get_sub_field('informacao_footer');
                                        $itemLink = get_sub_field('link_do_item');
                                    ?> 
                                    <div class="info-item-wrapper">
                                        <a href="<?= $itemLink; ?>" class="info-item"><?= $itemInfo; ?></a>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <a class="footer-link" href="https://desktop.raccoon-stage.com"><img class="footer-logo" src="<?= $footerLogo; ?>" alt="<?= $footerLogo['alt']; ?>"></a>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </footer>
</body>
</html>
