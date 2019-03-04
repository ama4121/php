<?php

$queryBuilder = require 'bootstrap.php';
$tasks = $queryBuilder->selectAll('tasks');



/*public -> 어디서나 접근 가능 변수
protected -> 상속받은 클래스와 현재 클래스에서만 접근 가능
private -> 현재 클래스에서만 접근 가능*/
/* class 이름은 앞글쟈 대문자로!*/

require 'index.view.php';
?>