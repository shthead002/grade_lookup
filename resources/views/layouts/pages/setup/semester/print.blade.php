<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Sample</title>
</head>
<body>
    @foreach ($courses as $course)
        {{ $course->name }} <br>
    @endforeach
    <button onclick="window.print()">Print</button>
</body>
</html>