<x-head>
<x-navBar />

<div class="containerGalleryHome">

  @if(!isset($albums))
  <h1>There are no pictures yet, come back later</h1>
  @endif
  <div class="photosHome">
    @foreach($albums as $album)
    <a class="anchor1" href="{{ route('gallery', $album->id) }}">
      
      <div class="albumHover">
        @if(isset($album->getCoverImage()->filename))
          <img class="photo1" src="{{ $album->getCoverImage()->filename }}">
        @endif
          <h3 class="text1">{{$album->title}}</h3>
      </div>  
    </a>
    @endforeach 
  </div>

    <div class="photosHome">
      @foreach($photos as $photo)
        <img class="myImg" src="{{ $photo->filename }}" >
      @endforeach    
    </div>  
</div>     


  
  <div class="myModal modal">
    <span class="close">&times;</span>
    <div id="modalImage-container">
      <img class="modalImage" id="img01" />
      <div class="caption"></div>
    </div>
  </div>


<script src="{{asset('js/home.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</x-head>