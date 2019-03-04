<?php
require  'Task.php';
require  'function.php';


$PDO = new PDO('mysql:host=127.0.0.1;dbname=phpstudy','root','sm94630719');
$statement = $PDO->prepare('select * from tasks');
$statement ->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');





/*public -> 어디서나 접근 가능 변수
protected -> 상속받은 클래스와 현재 클래스에서만 접근 가능
private -> 현재 클래스에서만 접근 가능*/
/* class 이름은 앞글쟈 대문자로!*/

require 'index.view.php';
?>