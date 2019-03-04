<?php
$names=['John', 'Jane', 'babo'];

class Task {
    public $description;

    public $completed;

    /**
     * task constructor.
     *
     * @param $description
     * @param $completed
     */
    public function __construct($description, $completed)
    {
        $this->description = $description;
        $this->completed = $completed;git remote add origin https://github.com/ama4121/php.git
    }


}


$task = new Task('aaa', true );

/*public -> 어디서나 접근 가능 변수
protected -> 상속받은 클래스와 현재 클래스에서만 접근 가능
private -> 현재 클래스에서만 접근 가능*/
/* class 이름은 앞글쟈 대문자로!*/


require 'index.view.php';
?>