<?php wp_footer() ?>
    <?php
        $socialTitle = get_field('titulo_redes_sociais');
        $footerLogo = get_field('logo_footer')
    ?>
    <footer class="footer-section">
        <div class="container">
            <div class="upper-footer">
                <div class="footer-list">
                    <?php if(have_rows('coluna_footer')): ?>
                        <?php while(have_rows('coluna_footer')): the_row(); ?>
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
                        <?php if(have_rows('redes_sociais')): ?>
                            <?php while(have_rows('redes_sociais')): the_row(); ?>
                                <?php 
                                    $socialIcon = get_sub_field('icone_rede_social');
                                    $socialLink = get_sub_field('link_rede_social');
                                ?>  
                               <a class="social-link" href="<?= $linkList; ?>"> <img class="social-icon" src="<?= $socialIcon; ?>" alt="<?= $socialIcon['alt']; ?>"> </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="footer-info">
                    <div class="bottom-footer-content">
                        <div class="footer-items">
                            <?php if(have_rows('info_rodape')): ?>
                                <?php while(have_rows('info_rodape')): the_row(); ?>
                                    <?php 
                                        $itemInfo = get_sub_field('informacao_footer');
                                        $itemLink = get_sub_field('linke_do_item');
                                    ?>  
                                    <a href="<?= $itemLink; ?>" class="info-item"><?= $itemInfo; ?></a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <img class="footer-logo" src="<?= $footerLogo; ?>" alt="<?= $footerLogo['alt']; ?>">
                    </div>
                    
                </div>
                
            </div>
        </div>
    </footer>
</body>
</html>