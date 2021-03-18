<x-head>
<x-nav-bar />

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
</x-head>