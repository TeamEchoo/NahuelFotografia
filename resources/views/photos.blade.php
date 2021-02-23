<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nahuel</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">
  </script>
</head>
<body>
   
    <h2>Photo Gallery</h2>
    
        <ul>
          @foreach ($images as $image)
          
            <li><img src="{{ asset( $image->filename ) }}" alt="" title=""></a></li>
            
          @endforeach
        </ul>
    
    @if(!isset($image))
        <h1>no hay fotos</h1>
    @endif
</body>
</html>