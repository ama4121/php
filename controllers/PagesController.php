<?php

class PagesController
{
    public function home()
    {
        return view('index');
    }

    /*       compact('ddd')  ===  ['ddd' => $ddd]           */

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function tasks()
    {
        $tasks = App::get('database')->selectAll('tasks');
        return view('tasks', compact('tasks'));
    }
}