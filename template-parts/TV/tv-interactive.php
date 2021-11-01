<?php 
    $interactive_title = get_field('titulo_secao_interativa');
    $first_image = get_field('primeira_imagem');
    $second_image = get_field('segunda_imagem');
    $content_title = get_field('titulo_conteudo');
    $content_description = get_field('descricao_conteudo');
    $content_cta = get_field('link_conteudo');
    $cta_label = get_field('rotulo_cta');
?>
<?php $interactive_title_have = $interactive_title == "" ? "interactive-section-none" : "interactive-section"?>
<section class=<?=$interactive_title_have?>>
    <div class="tv-background">
    </div>
        <h2 class="section-title"><?= $interactive_title; ?></h2>
    <div class="comparison">
        <img class="slide1" src="<?= $first_image; ?>" alt="Imagem comparativa 1">
        <img id="onDesktop" class="slide2" src="<?= $second_image; ?>" alt="Imagem comparativa 2">
    </div>
    <div class="switch-wrapper">
        <label class="switch" for="checkLabel">
            <input id="checkLabel" type="checkbox" name="checkbox">
            <span class="slider"></span>
        </label>
        <div class="labels">
            <span class="off-desktop">Sem Desktop</span>
            <span class="on-desktop">Com Desktop</span>
        </div>
    </div>
    <div class="content">
        <h3 class="content-title"><?= $content_title; ?></h3>
        <p class="content-description"><?= $content_description; ?></p>
        <?php if($cta_label):?>
            <a class="content-cta" href="<?= $content_cta; ?>"><?= $cta_label; ?></a>
        <?php endif;?>
    </div>
</section>
<div class="tv-interactive-graph">
    <img class="tv-interactive-graph-img" src="<?=get_template_directory_uri()?>/images/TV/tv-interactive-graph.svg" alt="graphismo">
</div>