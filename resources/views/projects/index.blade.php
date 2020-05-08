<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Laravel Testing Playground: Projects</h1>

    @forelse($projects as $project)

        <a href="{{$project->path()}}"><p>Title: {{$project->title}}</p></a>

    @empty

        <p>No projects yet.</p>
   
    @endforelse

</body>
</html>