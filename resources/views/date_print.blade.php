<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ url('/dateMonthly') }}" method="post">
        @csrf
        <input type="date" name="date" id="date">
        <input type="submit" name="" id="">
    </form>
    
</body>
</html>