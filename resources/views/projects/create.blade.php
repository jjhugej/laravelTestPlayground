<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a project</h1>

    <form action="/projects" method="POST">

        @csrf

        <label for="title">Title</label>
        <input type="text" name="title">
        <br>
        <br>
        <label for="description">Description</label>
        <textarea name="description"> </textarea>
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>