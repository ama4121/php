<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
foreach($names as $index => $name){
    echo"<li>hello $name</li>";
};
?>

<ul>
    <?php foreach ($tasks as $task) : ?>
    <li><?= $task->getDescription(); ?></li>
    <li><?= $task->getTel(); ?></li>
    <?php if ($task->getCompleted()) : ?>
        <li><strike><?= $task->getCompleted(); ?></strike></li>
    <?php endif;?>
    <?php endforeach; ?>

</ul>




<?php foreach ($names as $name) : ?>
<li><?="hello, $name"?></li>
<?php endforeach; ?>
</body>
</html>