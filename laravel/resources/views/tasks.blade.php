<html>
    <body>
        <h1>
            @foreach ($tasks as $task)
            {{$task->name }}
            @endforeach
        </h1>
    </body>   
    
</html>