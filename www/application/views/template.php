<!DOCTYPE html>
<html>
<head>
    <?php
        $config = Kohana::$config->load('site');
    ?>
    <title><?= $config->get('title') ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/planner/stylesheets/screen.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
    <script src="/js/jquery-1.8.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script src="/js/jquery.ui.datepicker-ru.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/planner.js"></script>
</head>
<body>

<div class="main">
    <div class="content">
        <div class="header">
            <div class="calendar"></div>
            <div class="add-panel"><a class="button button-dialog-add" href="#">Добавить задачу</a></div>
        </div>
        <div class="task-list">
            <h2 class="task-list-head">Список задач на <input id="date-for-head-list"></h2>&nbsp;<span class="pseudolink" id="show-all">Показать все</span>
            <div id="task-body"></div>
        </div>
    </div>
</div>

<div class="add-dialog none" title="Новая задача">
    <input type="text" style="position:absolute;top:-500px;">
    <input type="hidden" id="id">
    <label for="date_start">Дата начала <span class="hint" title="Дата начала работы над задачей">[?]</span>:</label>
    <input id="date_start" type="text"><br>
    <label for="date_end">Дата завершения <span class="hint" title="Крайний срок выполнения задачи">[?]</span>:</label>
    <input id="date_end" type="text"><br>
    <label for="date_finish">Дата выполнения <span class="hint" title="Дата выполнения задачи">[?]</span>:</label>
    <input id="date_finish" type="text"><br>
    <textarea maxlength="1000" id="description" placeholder="Описание задачи"></textarea>
</div>

<script type="text/template" id="load">
    <div class="load"></div>
</script>

</body>
</html>