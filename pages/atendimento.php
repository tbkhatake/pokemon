<?php /* Template Name: Página Atendimento */ ?>

<?php get_header() ?>
<?php get_template_part("template-parts/common/hero");?>
<?php get_template_part("template-parts/treatment/contact");?>
<?php get_template_part("template-parts/treatment/step-to-step");?>
<?php get_template_part("template-parts/treatment/description");?>
<?php get_template_part("template-parts/treatment/know-our-services");?>
<?php get_template_part("template-parts/treatment/forms");?>
<?php get_template_part("template-parts/treatment/whatsapp");?>
<div class="treatment-graph">
    <img class="treatment-graph-img-1" src="<?=get_template_directory_uri()?>/images/treatment/treatment-graph1.svg" alt="graphismo">
    <img class="treatment-graph-img-2" src="<?=get_template_directory_uri()?>/images/treatment/treatment-graph2.svg" alt="graphismo">
    <img class="treatment-graph-img-3" src="<?=get_template_directory_uri()?>/images/treatment/treatment-graph3.svg" alt="graphismo">
    <img class="treatment-graph-img-4" src="<?=get_template_directory_uri()?>/images/treatment/treatment-graph4.svg" alt="graphismo">
    <img class="treatment-graph-img-5" src="<?=get_template_directory_uri()?>/images/treatment/treatment-graph5.svg" alt="graphismo">
    <img class="treatment-graph-img-6" src="<?=get_template_directory_uri()?>/images/treatment/treatment-graph6.svg" alt="graphismo">
    <img class="treatment-graph-img-7" src="<?=get_template_directory_uri()?>/images/treatment/treatment-graph7.svg" alt="graphismo">
</div>
<?php get_footer() ?>