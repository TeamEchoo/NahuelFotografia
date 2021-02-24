<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>recibiste un mensaje de: {{ $msg['name']}} - {{ $msg['email']}} </p>
    
    <p><strong>Contenido:</strong> {{ $msg['message'] }}</p>

</body>

</html>