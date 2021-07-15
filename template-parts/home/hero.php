

<section class="hero">
    <svg class="graph-upper-hero" xmlns="http://www.w3.org/2000/svg" width="889" height="469.3" viewBox="0 0 889 469"><defs><style>.a,.b,.c,.d,.e,.f,.h{fill:none}.a,.f{stroke:rgba(195,0,10,.2)}.b{stroke:rgba(249,183,0,.1)}.c{stroke:rgba(255,215,0,.3)}.c,.f{stroke-width:2px}.d{stroke:gold}.e{stroke:rgba(195,0,10,.5)}.g{stroke:none}</style></defs><g transform="translate(132 116)"><g class="a" transform="rotate(-30 200 -605)"><circle cx="13.7" cy="13.7" r="13.7" class="g"/><circle cx="13.7" cy="13.7" r="13.2" class="h"/></g><g class="a" transform="rotate(-30 440 -198)"><circle cx="13.7" cy="13.7" r="13.7" class="g"/><circle cx="13.7" cy="13.7" r="13.2" class="h"/></g><g class="a" transform="rotate(-30 224 112)"><circle cx="13.7" cy="13.7" r="13.7" class="g"/><circle cx="13.7" cy="13.7" r="13.2" class="h"/></g><g class="a" transform="rotate(-30 170 -210)"><circle cx="13.7" cy="13.7" r="13.7" class="g"/><circle cx="13.7" cy="13.7" r="13.2" class="h"/></g><g class="a" transform="rotate(-30 499 144)"><circle cx="13.7" cy="13.7" r="13.7" class="g"/><circle cx="13.7" cy="13.7" r="13.2" class="h"/></g><path d="M170-65l166 85M148 77l27 110M6 128l127-59M155 49l1-105M135 53L5-34M-10 118l1-147M352 11l8-114M188 192L339 34M25 267l140-62M7 262l-17-117" class="b"/><g class="c" transform="translate(462 45)"><circle cx="11.9" cy="11.9" r="11.9" class="g"/><circle cx="11.9" cy="11.9" r="10.9" class="h"/></g><g class="c" transform="translate(71 87)"><circle cx="11.9" cy="11.9" r="11.9" class="g"/><circle cx="11.9" cy="11.9" r="10.9" class="h"/></g><g class="c" transform="translate(109 295)"><circle cx="11.9" cy="11.9" r="11.9" class="g"/><circle cx="11.9" cy="11.9" r="10.9" class="h"/></g><g class="c" transform="translate(263 132)"><circle cx="11.9" cy="11.9" r="11.9" class="g"/><circle cx="11.9" cy="11.9" r="10.9" class="h"/></g><g class="c" transform="translate(622 -4)"><circle cx="11.9" cy="11.9" r="11.9" class="g"/><circle cx="11.9" cy="11.9" r="10.9" class="h"/></g><g class="c" transform="translate(-4 329)"><circle cx="11.9" cy="11.9" r="11.9" class="g"/><circle cx="11.9" cy="11.9" r="10.9" class="h"/></g><g class="d" transform="translate(700 37)"><circle cx="11.1" cy="11.1" r="11.1" class="g"/><circle cx="11.1" cy="11.1" r="10.6" class="h"/></g><g class="d" transform="translate(499 84)"><circle cx="11.1" cy="11.1" r="11.1" class="g"/><circle cx="11.1" cy="11.1" r="10.6" class="h"/></g><path d="M517 87l78-126M606-39l96 81M715 38l42-123M521 95l181-42M505 84L481-60" class="e"/><g class="d" transform="translate(377 38)"><circle cx="8.1" cy="8.1" r="8.1" class="g"/><circle cx="8.1" cy="8.1" r="7.6" class="h"/></g><g class="d" transform="translate(230 72)"><circle cx="8.1" cy="8.1" r="8.1" class="g"/><circle cx="8.1" cy="8.1" r="7.6" class="h"/></g><path d="M244 75l57-92M309-17l69 59M388 39l30-89M247 80l131-30M235 72L217-33" class="e"/><g class="d" transform="translate(122 -9)"><circle cx="15.8" cy="15.8" r="15.8" class="g"/><circle cx="15.8" cy="15.8" r="15.3" class="h"/></g><path d="M-131 73l255-60" class="e"/><path d="M193-27l76 161M180-28L91 92M86 110l33 186M129 299l139-148M95 102l368-43M285 140l186-73M79 88L67-89M473 45l-54-94M465 51L198-31M-32 49l104 51M57-96L-36 37M111 301L-20 197M75 107l-95 82M111 312l-93 23M80 110L12 333M64-88l-94 270M643 1l60-74M485 54l140-40M480 50l77-157M695-76L484 50" class="f"/><g class="d" transform="translate(297 -32)"><circle cx="8.1" cy="8.1" r="8.1" class="g"/><circle cx="8.1" cy="8.1" r="7.6" class="h"/></g></g></svg>
    <div class="container">
        <div class="hero-slider">
            <?php if(have_rows('carrossel_hero')): ?>
                <div class="slider-engine">
                    <?php while(have_rows('carrossel_hero')): the_row(); ?>
                        <div class="slide">
                            <div class="slide-wrapper">
                                <?php
                                    $image_hero_mob = get_sub_field('image_hero_mob');
                                    $image_hero_desk = get_sub_field('image_hero_desk');
                                    $title_hero = get_sub_field('titulo_hero');
                                    $description_hero = get_sub_field('descricao_hero');
                                    $cta_hero_link = get_sub_field('link_cta')['url']; 
                                    $cta_hero_name = get_sub_field('link_cta')['title'];       
                                ?>
                                <img alt="<?= $image_hero_mob['alt'] ?>" 
                                        src="<?= $image_hero_mob['url'];?>"
                                        class="hero-img-mob">
                                <svg class="left-arrow" xmlns="http://www.w3.org/2000/svg" width="21.1" height="33.5" viewBox="0 0 21 34"><path fill="rgba(55,55,55,.75)" stroke="#fff" stroke-width=".8" d="M21 29L8 17 21 4l-4-3L1 17l16 16z"/></svg>
                                <img alt="<?= $image_hero_desk['alt'] ?>" 
                                        src="<?= $image_hero_desk['url'];?>"
                                        class="hero-img-desk">
                                <svg class="right-arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="32.4" viewBox="0 0 20 32"><path fill="rgba(255,255,255,.75)" d="M0 4l12 12L0 29l4 3 16-16L4 0z"/></svg>
                                <div class="hero-content">
                                    <p class="hero-title"><?= $title_hero; ?> </p>
                                    <p class="hero-description"><?= $description_hero; ?> </p>
                                    <a href="<?= $cta_hero_link; ?>" class="hero-cta"><?= $cta_hero_name; ?> </a>
                                </div>
                                </div>
                                <?php
                                    $image_hero_mob = get_sub_field('image_hero_mob');
                                    $image_hero_desk = get_sub_field('image_hero_desk');
                                    $title_hero = get_sub_field('titulo_hero');
                                    $description_hero = get_sub_field('descricao_hero');
                                    $cta_hero_link = get_sub_field('link_cta')['url']; 
                                    $cta_hero_name = get_sub_field('link_cta')['title'];       
                                ?>
                                <img alt="<?= $image_hero_mob['alt'] ?>" 
                                        src="<?= $image_hero_mob['url'];?>"
                                        class="hero-img-mob">
                                <svg class="left-arrow" xmlns="http://www.w3.org/2000/svg" width="21.1" height="33.5" viewBox="0 0 21 34"><path fill="rgba(55,55,55,.75)" stroke="#fff" stroke-width=".8" d="M21 29L8 17 21 4l-4-3L1 17l16 16z"/></svg>
                                <img alt="<?= $image_hero_desk['alt'] ?>" 
                                        src="<?= $image_hero_desk['url'];?>"
                                        class="hero-img-desk">
                                <svg class="right-arrow" xmlns="http://www.w3.org/2000/svg" width="20" height="32.4" viewBox="0 0 20 32"><path fill="rgba(255,255,255,.75)" d="M0 4l12 12L0 29l4 3 16-16L4 0z"/></svg>
                                <div class="hero-content">
                                    <p class="hero-title"><?= $title_hero; ?> </p>
                                    <p class="hero-description"><?= $description_hero; ?> </p>
                                    <a href="<?= $cta_hero_link; ?>" class="hero-cta"><?= $cta_hero_name; ?> </a>
                                </div>
                            </div>
                        </div>
                    <?php  endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <svg class="graph-bottom-hero" xmlns="http://www.w3.org/2000/svg" width="669.6" height="510.7" viewBox="0 0 670 511"><defs><style>.a,.b,.c,.d,.f{fill:none}.a,.d{stroke:rgba(195,0,10,.2)}.b{stroke:rgba(249,183,0,.1)}.c{stroke:rgba(255,215,0,.3)}.c,.d{stroke-width:2px}.e{stroke:none}</style></defs><g transform="translate(-939 -448)"><g class="a" transform="rotate(165 506 409)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><g class="a" transform="rotate(165 577 489)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><g class="a" transform="rotate(165 619 361)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><g class="a" transform="rotate(165 607 430)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><g class="a" transform="rotate(165 471 470)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><g class="a" transform="rotate(165 529 538)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><path d="M1393 821l-137-16M1231 812l-60 89M1148 907l-106-104M1232 796l-139-126M1289 664l3-113M1440 652l-138 23M1276 689l-29 102M1296 691l103 118M1076 675l-38 108M1280 543l-186 113M1457 512l-150 24" class="b"/><g class="c" transform="rotate(180 665 423)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 523 377)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 481 463)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 603 479)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 622 334)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 554 434)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><path d="M1426 892l-98-52M1313 844l-112 95M1307 835l-201 19M1313 825l-75-160M1326 827l89-120M1377 502l-138 146M1411 697l-366 43M1222 659l-185 73M1035 754l54 94M1043 748l265 81M1431 904l-225 41M1186 939l-82-75M1086 864l-125 46M1028 749l-76 156M1186 945l-225-25" class="d"/><g class="a" transform="rotate(165 657 507)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><g class="a" transform="rotate(165 692 427)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><g class="a" transform="rotate(165 710 357)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><g class="a" transform="rotate(165 761 435)"><circle cx="13.7" cy="13.7" r="13.7" class="e"/><circle cx="13.7" cy="13.7" r="13.2" class="f"/></g><path d="M1453 666l-40 141M1474 522l-15 118M1588 636l-103-123M1578 652l-111-2" class="b"/><g class="c" transform="rotate(180 717 356)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 698 253)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 725 455)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 755 236)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 774 310)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 780 383)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><g class="c" transform="rotate(180 783 469)"><circle cx="11.8" cy="11.8" r="11.8" class="e"/><circle cx="11.8" cy="11.8" r="10.8" class="f"/></g><path d="M1420 690l-34-185M1426 711l12 176M1448 901l97 21M1537 750l-103-51M1448 894l93-132M1394 499l131 104M1431 692l94-81M1394 488l93-23M1426 690l67-222M1442 886l93-269" class="d"/></g></svg>
</section>

