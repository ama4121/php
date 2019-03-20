
<?php
require 'views/partials/head.view.php';
?>


<form action="/tasks/store" method="post">
    <input type="text" name="task">
    <button type="submit">submit</button>
</form>

<h1>my tasks</h1>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li><?= $task->description ?></li>
        <?php if ($task->completed) : ?>
            <li><strike><?= $task->completed; ?></strike></li>
        <?php endif;?>
    <?php endforeach; ?>
</ul>

<?php
require 'views/partials/footer.view.php';
?>