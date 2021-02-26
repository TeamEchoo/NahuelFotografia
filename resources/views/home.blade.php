@extends('layouts.app')
@section('content')
      <div class="containerGallery">
    <div class="column">
        <ul>
          @foreach ($images as $image)
          
          <li><img src="{{ asset( $image->filename ) }}" alt="" title=""></a></li>
          
          @endforeach
        </ul>
        
       
    </div>
    <div class="column">
        <ul>
          @foreach ($images as $image)
          
          <li><img src="{{ asset( $image->filename ) }}" alt="" title=""></a></li>
          
          @endforeach
        </ul>
        
       
    </div>
    <div class="column">
      
        <ul>
          @foreach ($images as $image)
          
          <li><img src="{{ asset( $image->filename ) }}" alt="" title=""></a></li>
          
          @endforeach
        </ul>
        
    </div>
        @if(!isset($image))
        <h1>No hay fotos para mostrar</h1>
        @endif
</div>


      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>

@endsection
