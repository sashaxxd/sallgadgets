<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
 

    <script>
        $(document).ready(function()
        {
            $("a[href*='#pop_tavary']").click(function(event)
            {
                event.preventDefault();
                $('html, body').stop().animate({ scrollTop: $('#allgadgets_pop_tavary').offset().top }, 600, 'linear');
            });

        });
    </script>
  
</head>
<body>
<?php $this->beginBody() ?>
<div id="allgadgets_header">
    <div id="header">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_logo">
                    <a href="http://all-gadgets25.ru"><img src="images/logo2.png" id="logo" alt=""></a>
                </div>
            </div>
            <div class="col-2">
                <div id="allgadgets_phone_nom">
                    <span id="allgadgets_uid0"><a href="tel:+79160238171" id="allgadgets_uid1">ТЕЛ: +7(916) 023-81-71</a></span>
                </div>
            </div>
            <div class="col-3">
                <div id="allgadgets_button_zz">
                    <a href="" onclick="$('#form_popur').modal('show');return false;"><div id="button_zz"><div id="button_zz_text"><span id="allgadgets_uid2">закажите бесплатный звонок</span></div></div></a>
                </div>
                <div id="allgadgets_neobaz_text">
                    <span id="allgadgets_uid3">(ни к чему не обязывает)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_line_bor1">
    <div id="line_bor1">
        <div class="row">
            <div class="col-1">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_hit">
    <div id="hit">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="allgadgets_hit_slogan">
                    <span id="allgadgets_uid4"><strong>СПЕЦПРЕДЛОЖЕНИЕ : СКИДКА 10% ПО КАРТЕ ПОЛУЧАТЕЛЯ!!!<br>ВСЕМ КЛИЕНТАМ НАШЕГО МАГАЗИНА : 10% СКИДКА НА ВТОРОЙ ТОВАРT</strong></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_line_bor2">
    <div id="line_bor2">
        <div class="row">
            <div class="col-1">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_line_menu">
    <div id="line_menu">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_ResponsiveMenu">
                    <label class="toggle" for="ResponsiveMenu-submenu" id="ResponsiveMenu-title">МЕНЮ<span id="ResponsiveMenu-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
                    <input type="checkbox" id="ResponsiveMenu-submenu">
                    <ul class="ResponsiveMenu" id="ResponsiveMenu">
                        <li><a href="#pop_tavary">&#1050;&#1040;&#1058;&#1040;&#1051;&#1054;&#1043;</a></li>
                        <li><a href="#">&#1044;&#1054;&#1057;&#1058;&#1040;&#1042;&#1050;&#1040;</a></li>
                        <li><a href="#">&#1043;&#1040;&#1056;&#1040;&#1053;&#1058;&#1048;&#1048;</a></li>
                        <li><a href="#">&#1050;&#1054;&#1053;&#1058;&#1040;&#1050;&#1058;&#1067;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_contauer_vk">
    <div id="contauer_vk">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_vk_link">
                    <a href="http://vk.com"><img src="images/myvk.png" id="vk_link" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_pop_tavary">
    <div id="pop_tavary">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_pop_tavary_image">
                    <img src="images/img0002.png" id="pop_tavary_image" alt="">
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_contauer_pop_ostov">
    <div id="contauer_pop_ostov">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="allgadgets_contauer_pop_vn">
                    <div id="contauer_pop_vn">
                        <div class="row">
                            <div class="col-1">
                                <div id="allgadgets_title1">
                                    <span id="allgadgets_uid5"><a href="#" id="allgadgets_uid6">РЕГИСТРАТОР ЗЕРКАЛО </a></span>
                                </div>
                                <div id="allgadgets_Image3">
                                    <a href="#"><img src="images/product2.png" id="Image3" alt=""></a>
                                </div>
                                <hr id="Line1">
                                <div id="allgadgets_button_podrob">
                                    <a href="#"><img src="images/img0003.png" id="button_podrob" alt=""></a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="allgadgets_Text5">
                                    <span id="allgadgets_uid7">РАДАР-ДЕТЕКТОР </span>
                                </div>
                                <div id="allgadgets_Image4">
                                    <img src="images/radar13790.jpg" id="Image4" alt="">
                                </div>
                                <hr id="Line2">
                                <div id="allgadgets_Shape4">
                                    <img src="images/img0004.png" id="Shape4" alt="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="allgadgets_Text6">
                                    <span id="allgadgets_uid8">3Д РУЧКА MYRIWELL</span>
                                </div>
                                <div id="allgadgets_Image5">
                                    <img src="images/pen3.jpg" id="Image5" alt="">
                                </div>
                                <hr id="Line3">
                                <div id="allgadgets_Shape5">
                                    <img src="images/img0005.png" id="Shape5" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_contauer_pol_gt">
    <div id="contauer_pol_gt">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_polez_gadget_image">
                    <img src="images/img0006.png" id="polez_gadget_image" alt="">
                </div>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_LayoutGrid11">
    <div id="LayoutGrid11">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-2">
                <div id="allgadgets_LayoutGrid12">
                    <div id="LayoutGrid12">
                        <div class="row">
                            <div class="col-1">
                                <div id="allgadgets_Text1">
                                    <span id="allgadgets_uid9"><a href="#" id="allgadgets_uid10">РЕГИСТРАТОР ЗЕРКАЛО </a></span>
                                </div>
                                <div id="allgadgets_Image6">
                                    <a href="#"><img src="images/product2.png" id="Image6" alt=""></a>
                                </div>
                                <hr id="Line4">
                                <div id="allgadgets_Shape9">
                                    <a href="#"><img src="images/img0007.png" id="Shape9" alt=""></a>
                                </div>
                            </div>
                            <div class="col-2">
                                <div id="allgadgets_Text8">
                                    <span id="allgadgets_uid11">РАДАР-ДЕТЕКТОР </span>
                                </div>
                                <div id="allgadgets_Image7">
                                    <img src="images/radar13790.jpg" id="Image7" alt="">
                                </div>
                                <hr id="Line5">
                                <div id="allgadgets_Shape7">
                                    <img src="images/img0008.png" id="Shape7" alt="">
                                </div>
                            </div>
                            <div class="col-3">
                                <div id="allgadgets_Text9">
                                    <span id="allgadgets_uid12">3Д РУЧКА MYRIWELL</span>
                                </div>
                                <div id="allgadgets_Image8">
                                    <img src="images/pen3.jpg" id="Image8" alt="">
                                </div>
                                <hr id="Line6">
                                <div id="allgadgets_Shape8">
                                    <img src="images/img0009.png" id="Shape8" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_contauer_bablo">
    <div id="contauer_bablo">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_text_bablo">
                    <span id="allgadgets_uid13">ПРИНИМАЕМ К ОПЛАТЕ:</span>
                </div>
                <div id="allgadgets_image_bablo">
                    <img src="images/pay-types.png" id="image_bablo" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_cm_opl">
    <div id="cm_opl">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_cm_opl_text">
                    <span id="allgadgets_uid14">ПРИНИМАЕМ К ОПЛАТЕ:</span>
                </div>
                <div id="allgadgets_image_bablo_mobila">
                    <img src="images/pay-types-mob.png" id="image_bablo_mobila" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_conyauer_kontakt">
    <div id="conyauer_kontakt">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_zag_cont">
                    <span id="allgadgets_uid15">КОНТАКТЫ:</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="allgadgets_footer">
    <div id="footer">
        <div class="row">
            <div class="col-1">
                <div id="allgadgets_cont_footer">
                    <span id="allgadgets_uid16">Звонок по России бесплатный<br><a href="tel:+79160238171" id="allgadgets_uid17">+7(916) 023-81-71</a><br></span><span id="allgadgets_uid18"><br>ОГРН 432566436400325 МОСКВА, Ленинградский пр-т, 69 <br><br>luxurytopwatch.line@yandex.ru<br><a href="privacypolicy.html" id="allgadgets_uid19"><br>Политика конфиденциальности</a><br><br><br>Все права защищены © 2010 - 2017</span>
                </div>
            </div>
            <div class="col-2">
                <script charset="utf-8" async="" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3ApZENlXNjibaU3aFlemgWBSuAwgdkbQ90&amp;width=100%25&amp;height=200&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
    </div>
</div>
<div id="form_popur" class="modal fade" data-keyboard="false" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="allgadgets_Form2">
                    <form name="Form2" method="post" action="send.php" accept-charset="UTF-8" id="Form2">
                        <input type="submit" id="send" name="" value="ОТПРАВИТЬ">
                        <input type="text" id="Editbox7" name="Editbox1" value="" placeholder="&#1042;&#1072;&#1096;&#1077; &#1080;&#1084;&#1103;" required="">
                        <input type="text" id="Editbox8" name="Editbox1" value="" placeholder="&#1042;&#1072;&#1096; &#1090;&#1077;&#1083;&#1077;&#1092;&#1086;&#1085;" required="">
                    </form>
                </div>
                <div id="allgadgets_Text30">
                    <span id="allgadgets_uid20">Оставьте контакты<br>и мы вам перезвоним</span></div>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>