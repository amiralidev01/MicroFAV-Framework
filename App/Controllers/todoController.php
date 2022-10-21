<?php namespace app\Controllers;

class todoController
{
    public function list()
    {
        $data = [
            'tasks' => ['Task 1', 'Task 2', 'Task 3', 'Task 4', 'Task 5']
        ];
        view('todo.list', $data);

    }
}
