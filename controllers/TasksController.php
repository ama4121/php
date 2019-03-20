<?php

class TasksController
{
    public function store()
    {
        App::get('database') ->insert('tasks',[
            'description' => $_POST['task'],
            'completed' => 0,
        ]);

        return redirect('/tasks');
    }

}
