<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller // jab bhi controller class banaye toh pascal case follow karo
{
    // function banayenge jisse jo main part hai todos ka jo humne web.php ke 
    //route function me likhe the vo idhar layenge
    
    public function index(){
        $todos = [
            [
                'description' => 'My First todo',
                'due_date'=>'2024-09-15',
                'is_completed'=>false
            ],
            [
                'description' => 'Python',
                'due_date'=>'2024-08-27',
                'is_completed'=>True
            ],
            [
                'description' => 'My  todo',
                'due_date'=>'2024-09-25',
                'is_completed'=>false
            ]
            ];

            return view('todos.index',[
                'todos'=> $todos
            ]);
    }
    public function create(){
        return view('todos.create');
    } 
}
