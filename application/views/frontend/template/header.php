<div id="headerMenuBg" class="<?=$menuBgClass?> hide"></div>
    <div id="headerSignBg" class="<?=$headerSignSize;?>"></div>
    <section class="hero">
        <section class="navigation">
            <header id="navbar-top">
                <div class="header-content">
                    <div class="logo col-md-2 col-lg-2"><a href="<?=base_url()?>"><img src="<?=base_url(FRONT_IMAGES . "epmc-logo-white.svg")?>" alt="EPMC logo" width="89" data-no-retina></a></div>
                    <div class="header-nav col-md-9 col-lg-9">
                        <nav>
                        <?php if(!empty($fullNav)): ?>
                            <ul class="primary-nav">
                                <?php foreach ($fullNav as $item): ?>
                                    <?php if($item->homepage == '0'):?>
                                        <li class="menu-home"><a href="<?=base_url($item->slug)?>"><?=$item->title?></a></li>
                                    <?php endif;?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
    </section>