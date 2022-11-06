<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>laravel model</title>
</head>
<body>
    @foreach ($movies as $item)
    <div>
        <h2>{{$item['title']}}</h2>
        <p>{{$item['vote']}}</p>
    </div>
@endforeach
</body>
</html>
