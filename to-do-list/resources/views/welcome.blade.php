<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To Do List</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
           }
           body{
            background-color: #F0FFF0;
           }
           h1{
            text-align: center;
            padding: 30px 0;
            font-weight: bold;
            font: 3rem;
            color: #138808;
           }
           main{
            height: 100%;
            width: 100%;
           }
           .container{
            width: 500px;
            margin: 0 auto;
           /*  background-color: red; */
           }
           .add-task-card{
            width: 100%;
            height: 100%;
           }
           .add-task-card form .c-input{
            /* height: 100%; */
            width: 100%;
            display: block;
            border: none;
            margin: 10px 0;
            outline: 1px solid #4F7942;
            box-sizing: border-box;
            border-radius: 5px;
            font-size: 1.2rem;
            padding: 5px;
            text-align: center;
           }
           .add-task-card form button{
            font-size: 1.2rem;
            background-color: #138808;
            border: none;
            width: 100%;
            padding: 15px 0;
            border-radius: 15px;
            color: #fff;
           }


           .preview-task-card{
            margin: 100px 0;
           }
           .preview-task-card h2{
            text-align: center;
            font-weight: bold;
            font: 2.5rem;
            color: #138808;
           }
           .task-card-container{
            width: 100%;
           }
           .task-card-container .task-card{
            width: 100%;
            min-height: 200px;
            border: 2px solid #138808;
            border-radius: 20px;
            box-sizing: border-box;
            padding: 30px;
            color: #138808;
            margin: 20px 0;
           }
           .task-card-header{
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 15px;
           }
           .task-card-description{
            font-size: 1rem;
            margin-bottom: 15px;
            text-align: justify;
           }
           .task-card-buttons{
            width: 100%;
            display: flex;
            flex-direction: row-reverse;
           }
           .task-card-buttons button{
            display: block;
            padding: 15px 5px;
            margin-left: 10px;
            color: #138808;
            text-decoration: none;
            background: transparent;
            border: none;
           }
           .task-card-buttons form:nth-child(1) button:hover{
            color: brown;
           }
           .task-card-buttons form:nth-child(2) button:hover{
            color: yellowgreen;
           }

        </style>
    </head>
    <body>
        
        <h1>To Do List</h1>
        <main>
            <div class="container">
                <div class="add-task-card">
                    <form action="/" method="post">
                        @csrf()
                        <input class="c-input" type="text" name="nm" placeholder="Add Task Name">
                        <textarea class="c-input" placeholder="Add Task Description" type="text" name="desc" id="" cols="30" rows="10" id="desc"></textarea>
                        <button type="submit">Add Task</button>
                    </form>
                </div>
                <div class="preview-task-card">
                    <h2>Task List</h2>
                    <div class="task-card-container">
                        @if ($tasks)
                            @foreach ($tasks as $task)
                                <div class="task-card"
                                @if($task->status === "complete") 
                                    style="color: #fff; background-color: #138808;"
                                @endif
                                >
                                    <div class="task-card-header">{{ $task->task_name }}</div>
                                    <div class="task-card-description">{{ $task->description }}</div>
                                    <div class="task-card-buttons">
                                        <form action="/delete" method="post">
                                            @csrf()
                                            <input type="hidden" name="id" value="{{ $task->id }}">
                                            <button type="submit"
                                            @if($task->status === "complete") 
                                                style="color: #fff;"
                                            @endif
                                            >Delete</button>
                                        </form>
                                        <form action="/update-status" method="post">
                                            @csrf()
                                            <input type="hidden" name="id" value="{{ $task->id }}">
                                            <input type="hidden" name="status" value="{{ $task->status }}">
                                            <button type="submit" 
                                            @if($task->status === "complete") 
                                                style="color: #fff;"
                                            @endif>
                                            Done
                                            </button>
                                            
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
