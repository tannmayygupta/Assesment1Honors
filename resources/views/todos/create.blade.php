@extends('layouts.layout')

@section('content')
    
<body>
        <form method="post">

            <lable for="title">Title</lable>
            <input type="text" name="title">
            
            <lable for="date">Due Date</lable>
            <input type="date" name="due_date">

            <input type="checkbox" name="is_completed">
            <lable for="is_completed">is_completed</lable>

            
            <input type="submit">

        </form>
@endsection