<?php
class Task {
    protected $description;

    protected $completed;

    protected $tel;
    /**
     * task constructor.
     *
     * @param $description
     * @param $completed
     */

    public function __construct($description, $completed, $tel)
    {
        $this->description = $description;
        $this->completed = $completed;
        $this->tel = $tel;

        /*
        get_description : snake case
        getDescription : Camel case
        어지간하면 하나의 케이스만
        */
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

   /* getProperty 메서드는 protected 된 property 값을 외부에서 가져오기 위해 셋팅 */
    public function getDescription(){/*메서드*/
        return $this->description;
    }
    public function getCompleted()
    {
        return $this->completed;
    }
    /* setProperty 메서드는 protected 된 property 값을 외부에서 수정하기 위해 셋팅 */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function complete()
    {
        $this->completed = true;
    }



}
$tasks = [
    new Task ('aaa',false,1234),
    new Task ('bbb',false,1234),
    new Task ('ccc',false,1234),
    new Task ('ddd',false,1234),
    new Task ('eee',false,1234),
];

$tasks[1] ->setDescription('zzz');
$tasks[2] ->complete();
$tasks[3] ->setDescription('yyy');
/*public -> 어디서나 접근 가능 변수
protected -> 상속받은 클래스와 현재 클래스에서만 접근 가능
private -> 현재 클래스에서만 접근 가능*/
/* class 이름은 앞글쟈 대문자로!*/


$names=['John', 'Jane', 'babo'];
require 'index.view.php';
?>