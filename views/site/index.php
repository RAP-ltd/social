<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 04.06.2017
 * Time: 21:18
 */

$this->title = 'R.A.P';

use RAP\helpers\Calculator;

?>

<div class="site-index">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
            <div class="list-group">
                <span class="list-group-item alert-info">Калькулятор линейных уравнений:</span>
                <div class="list-group-item text-center">
                    <form action="/site/calculate" id="form" method="post" class="form-group list-group">
                        <div class="list-group-item">
                            <input type="text" name="X11" required="required" style="width: 25px"/>X<sub>1</sub>+
                            <input type="text" name="X12" required="required" style="width: 25px"/>X<sub>2</sub>+
                            <input type="text" name="X13" required="required" style="width: 25px"/>X<sub>3</sub>=
                            <input type="text" name="R1" required="required" style="width: 25px"/>
                        </div>
                        <div class="list-group-item">
                            <input type="text" name="X21" required="required" style="width: 25px"/>X<sub>1</sub>+
                            <input type="text" name="X22" required="required" style="width: 25px"/>X<sub>2</sub>+
                            <input type="text" name="X23" required="required" style="width: 25px"/>X<sub>3</sub>=
                            <input type="text" name="R2" required="required" style="width: 25px"/>
                        </div>
                        <div class="list-group-item">
                            <input type="text" name="X31" required="required" style="width: 25px"/>X<sub>1</sub>+
                            <input type="text" name="X32" required="required" style="width: 25px"/>X<sub>2</sub>+
                            <input type="text" name="X33" required="required" style="width: 25px"/>X<sub>3</sub>=
                            <input type="text" name="R3" required="required" style="width: 25px"/>
                        </div>
                        <div class="list-group-item">
                            <input type="submit" value="Решить" class="btn btn-primary"/>
                        </div>
                    </form>
                    <pre><div id="test">(Нажмите "Решить")</div></pre>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $('form').submit(function (e) {
            var $form = $(this);
            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                dataType: 'JSON',
                data: $form.serialize()
            }).done(function (data) {
                var x = data.response
                $('#test').html('X<sub>1</sub> = ' + x.X1 + '; ');
                $('#test').append('X<sub>2</sub> = ' + x.X2 + '; ');
                $('#test').append('X<sub>3</sub> = ' + x.X3 + '; ');
                console.log('success');
            }).fail(function () {
                $('#test').html('<span class="alert-danger">(Ошибка!)</span>');
                console.log('fail');
            });
            //отмена действия по умолчанию для кнопки submit
            e.preventDefault();
        });
    });
</script>
