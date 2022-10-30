<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .links {
            display: flex;
            flex-direction: row;
            max-width: 100px;
            height: 150px
        }
    </style>
</head>
<body>
@foreach ($users as $user)
{{ $user->name }}
{{ $user->email }}
{{ $user->password }}
@endforeach
<div class="links">{{ $users->links() }}</div>
</body>
</html>
