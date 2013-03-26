<!DOCTYPE html>
<html>
<head>
    <title>Планировщик задач</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
    <script src="/js/jquery-1.8.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
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
            <h2 class="task-list-head">Список задач на <input id="date-for-head-list"></h2>
            <table class="task-list-table">
                <tr>
                    <th>Дата начала</th>
                    <th>Дата завершения</th>
                    <th>Дата выполнения</th>
                    <th>Описание</th>
                    <th></th>
                </tr>
                <tbody id="task-list-body"></tbody>
            </table>
        </div>
    </div>
</div>

<div class="add-dialog none" title="Новая задача">
    <label for="date_start">Дата начала <span class="hint" title="Дата начала работы над задачей">[?]</span>:</label>
    <input id="date_start" type="text"><br>
    <label for="date_end">Дата завершения <span class="hint" title="Крайний срок выполнения задачи">[?]</span>:</label>
    <input id="date_end" type="text"><br>
    <label for="date_finish">Дата выполнения <span class="hint" title="Дата выполнения задачи">[?]</span>:</label>
    <input id="date_finish" type="text"><br>
    <textarea maxlength="1000" id="desc" placeholder="Описание задачи"></textarea>
</div>

</body>
</html>