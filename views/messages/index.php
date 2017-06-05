<?php
/**
 * Created by PhpStorm.
 * User: alex1rap
 * Date: 05.06.2017
 * Time: 21:11
 */

$this->title = "Диалоги";

?>
<div class="messages-index">
    <div class="row hidden-xs">
        <div class="col-sm-6">
            <div class="list-group">
                <span class="list-group-item alert-info">Диалоги</span>
                <div class="list-group-item">
                    <ul class="nav" role="tablist">
                        <a class="list-group-item panel" href="#home" aria-controls="home" role="tab" data-toggle="tab">Домой</a>
                        <a class="list-group-item panel" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Профиль</a>
                        <a class="list-group-item panel" href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Сообщения</a>
                        <a class="list-group-item panel" href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Настройки</a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="list-group">
                <div class="tab-content list-group-item panel-group">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="panel panel-default">
                            Test
                        </div>
                        <div class="panel panel-default">
                            Test
                        </div>
                        <div class="panel panel-default">
                            Test
                        </div>
                        <div class="panel panel-default">
                            Test
                        </div>
                        <div class="panel panel-default">
                            Test
                        </div>
                        <div class="panel panel-default">
                            Test
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="panel panel-default">
                            Test2
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <div class="panel panel-default">
                            Test3
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">
                        <div class="panel panel-default">
                            Test4
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
