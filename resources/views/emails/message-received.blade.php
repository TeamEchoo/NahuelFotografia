<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/messageMail.css') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

        <p class="head">mensaje de : {{ $msg['name']}} - {{ $msg['email']}} </p>
<body>

    
    <div class="content">
    <p><strong>Contenido:</strong> {{ $msg['message'] }}</p>
    </div>
</body>

</html>