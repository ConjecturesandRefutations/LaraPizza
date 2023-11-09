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
    color: #333; /* You can choose your preferred text color */
}

p {
    font-size: 1.2em;
    color: #666; /* You can choose your preferred text color */
}

</style>
<body>
    <div class="flex-center position-ref full-height"></div>
        <div class="content">
            <div class="title m-b-md">
                Pizza List
            </div>
            <p>{{ $type }} - {{ $base }} - {{ $price }}</p>
        </div>
    </div>
</body>
</html>