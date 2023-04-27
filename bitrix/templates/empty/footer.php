<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
</div>
<div class="sticky-push"></div>
</div>

<footer>
    <div class="sticky-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <address>
                        Тел.<? $APPLICATION->IncludeFile(
                            SITE_DIR . '/include/phone2.php',
                            array(),
                            array(
                                "MODE" => "html"
                            )
                        ) ?><? $APPLICATION->IncludeFile(
                            SITE_DIR . '/include/phone1.php',
                            array(),
                            array(
                                "MODE" => "html"
                            )
                        ) ?><? $APPLICATION->IncludeFile(
                            SITE_DIR . '/include/addres.php',
                            array(),
                            array(
                                "MODE" => "html"
                            )
                        ) ?>
                    </address>
                </div>

                <div class="col-md-4 col-md-push-4">
                    <div class="copyright">
                        Данный шаблон предоставлен компанией<br/>© <a href="http://www.intervolga.ru">ИНТЕРВОЛГА</a> для
                        Академии 1С-Битрикс
                    </div>
                </div>

                <div class="col-md-4 col-md-pull-4 hidden-print">
                    <ul class="list-inline social-links">
                        <? $APPLICATION->IncludeFile(
                            SITE_DIR . '/include/socialLinks.php',
                            array(),
                            array(
                                "MODE" => "text"
                            )
                        ) ?>
                        <li>
                            <div id="bx-composite-banner"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<?
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/bootstrap/collapse.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/bootstrap/tooltip.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/plugins.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.touchSwipe.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.touchSwipe.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.ba-throttle-debounce.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/cookesHelp.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/bootstrap-switch.min.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/vendor/jquery.carouFredSel-packed.js');
//ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ

//Уникальные JS для данной страницы

//ОБЯЗАТЕЛЬНО ПОДКЛЮЧИТЕ ЭТИ СКРИПТЫ И СТИЛИ

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/main.js');
?>

</body>
</html>
