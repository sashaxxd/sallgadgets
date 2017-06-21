<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) { ?>

    <?php
    $this->registerJs(
        "$('#myModalSendOk').modal('show');",
        yii\web\View::POS_READY
    );
    ?>

    <!-- Modal -->
    <div class="modal fade" id="myModalSendOk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Feedback form</h4>
                </div>
                <div class="modal-body">
                    <p>Thank you for contacting us. We will respond to you as soon as possible.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<!-- Modal -->
<div id="form_popur" class="modal fade" data-keyboard="false" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div id="allgadgets_Form2">
                    <!--                    <form name="Form2" method="post" action="send.php" accept-charset="UTF-8" id="Form2">-->
                    <!--                        <input type="submit" id="send" name="" value="ОТПРАВИТЬ">-->
                    <!--                        <input type="text" id="Editbox7" name="Editbox1" value="" placeholder="&#1042;&#1072;&#1096;&#1077; &#1080;&#1084;&#1103;" required="">-->
                    <!--                        <input type="text" id="Editbox8" name="Editbox1" value="" placeholder="&#1042;&#1072;&#1096; &#1090;&#1077;&#1083;&#1077;&#1092;&#1086;&#1085;" required="">-->
                    <!--                    </form>  -->



                </div>
            </div>
            <div id="allgadgets_Text30">
                <span id="allgadgets_uid20">Оставьте контакты<br>и мы вам перезвоним</span></div>
        </div>
    </div>
</div>
</div>