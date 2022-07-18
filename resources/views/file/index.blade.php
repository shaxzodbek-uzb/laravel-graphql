<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>

        @foreach($public_files as $file)
        <li>
    
            <a href="{{ route('file.get-local-file',['path' => $file]) }}">{{ $file }}</a>
        </li>
        @endforeach
    </ul>
</body>
</html>