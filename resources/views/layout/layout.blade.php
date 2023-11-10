<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #fff
}

.flex-center {
    display: flex;
    align-items: center;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.full-height {
    height: 30vh;
}

.content {
    text-align: center;
}

.title {
    font-size: 2em;
    font-weight: bold;
    color: #333; 
    margin-bottom: 50px;
}

p {
    font-size: 1.2em;
    color: #666; 
}

footer{
    background: #eee;
    padding: 20px;
    text-align: center;
    bottom: 0;
    left: 50%;
    transform: translate(-50%);
    position: absolute;
}

</style>

<body>
@yield('content')

<footer>Copyright 2023</footer>
</body>
</html>