<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nahuel</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">
  </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
        
        
        <h2>Photo Gallery</h2>
        
        <ul>
          @foreach ($images as $image)
          
          <li><img src="{{ asset( $image->filename ) }}" alt="" title=""></a></li>
          
          @endforeach
        </ul>
        
        @if(!isset($image))
        <h1>No hay fotos para mostrar</h1>
        @endif
    </div>
</body>
</html>