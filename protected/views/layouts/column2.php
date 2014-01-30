<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <header>

        <div class="logo-container">

            <a id="logo" title="Metro Creative Design" href="index.html"><img src="css/img/logo.png" alt="Metro Creative Design"></a>

        </div><!-- Logo Side ENDS -->

        <nav>
            <ul id="menu">
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="blog-icon menu-specs">
                        <?php echo CHtml::link('Мои ссылки', 'links', array('title'=>'Мои ссылки'));?>
                        <span>Ваши сохраненные ссылки</span>
                    </div>
                </li>

                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="services-icon menu-specs">
                        <?php echo CHtml::link('Мои настройки', 'settings', array('title'=>'Мои настройки'));?>
                        <span>Конфигурация Вашего профиля</span>
                    </div>
                </li>

               <!-- <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="blog-icon menu-specs">
                        <a href="#" title="Articles From Us">Blog</a>
                        <span>Vivamus sagittis nibh</span>
                    </div>
                </li>
                <li>
                    <div class="menu-abs-bg background-color"></div>
                    <div class="portfolio-icon menu-specs">
                        <a href="# title="Keep In Touch">Portfolio</a>
                        <span>Quisque sed felis eu turpis</span>
                    </div>
                </li>-->
            </ul><!-- Menu ENDS -->

        </nav><!-- Nav ENDS -->

        <div class="search-and-misc">

            <form method="post" action="<?php echo Yii::app()->createUrl('links/search');?>" class="search-form">

                <input type="text" name="search" placeholder="Поиск..." required="" class="search-text">
                <input type="submit" value=" " class="search-submit">

            </form>

            <div class="text margin-tb-20">

                Оставайтесь на связи

                <a href="" class="side-social twitter"></a>
                <a href="" class="side-social facebook"></a>

            </div>

        </div>

    </header><!-- Left Side ENDS -->

    <div class="rightSide">

    <?php echo $content; ?>
    <div class="row footer background-color">

        <div class="twelve columns">

            <div class="footer-menu">

                <?php echo CHtml::link('Мои ссылки', 'links', array('title'=>'Мои ссылки', 'class'=>'left'));?>
                <?php echo CHtml::link('Мои настройки', 'settings', array('title'=>'Мои настройки', 'class'=>'left'));?>
                <?php echo CHtml::link('Мои соцсети', 'social', array('title'=>'Мои соцсети', 'class'=>'left'));?>

            </div>

        </div>

    </div>

    </div><!-- RightSide ENDS -->
<?php $this->endContent(); ?>