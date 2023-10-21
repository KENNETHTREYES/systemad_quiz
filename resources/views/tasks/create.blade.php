@extends('layouts.app')

<style> 
    body { font-family: Arial, sans-serif; background-color: #f5f5f5; padding: 20px; } 
    h1 { color: #333; margin-bottom: 20px; } 
    .form-container { max-width: 600px; margin: 0 auto; padding: 20px; background-color: #fff; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); } 
    label { display: block; margin-bottom: 5px; } 
    input[type="text"], textarea { width: 100%; padding: 5px; margin-bottom: 20px; border: 1px solid #ddd; border-radius: 3px; outline: none; } 
    textarea { resize: none; } button[type="submit"] { background-color: #4CAF50; color: white; padding: 5px 10px; border: none; cursor: pointer; text-decoration: none; border-radius: 3px; } 
    button[type="submit"]:hover { background-color: #45a049; } 
    a { color: #BLUE; text-decoration: none; margin-bottom: 20px; }
    a:hover { text-decoration: underline; } 
    </style>
    @section('content')
    <div class="form-container">
        <h1>Create Task</h1>
        <a href="{{ route('tasks.index') }}">Back to Task List</a>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            <br>
            <label for="description">Description:</label>
            <textarea name="description" id="description" rows="3" required></textarea>
            <br>
            <button type="submit">Create Task</button>
        </form>
    </div>
    @endsection