<x-head>
<x-navBar />

<!--VISTA ÁLBUNES-->

<div class="containerGallery">
    @foreach($albums as $album)
    <div class="column">
    <a href="{{ route('gallery', $album->id) }}">
     
      <img src="{{ $album->getCoverImage()->filename }}">

      <p>{{$album->title}}</p>

    </a>
    </div>
    @endforeach

    @foreach($photos as $photo)
    <img src="{{ $photo->filename }}">
    @endforeach
</div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      
</x-head>