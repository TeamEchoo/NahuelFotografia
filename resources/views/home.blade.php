<x-head>
<x-navBar />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="containerGalleryHome">
  <div class="photosHome">
      @foreach($photos as $photo)
      <img class="myImg" alt="{{$photo->title}}" src="{{ $photo->filename }}"> 
      @endforeach
  <div>
    
  <div class="myModal modal">
    <span class="close">&times;</span>
    <div id="modalImage-container">
      <img class="modalImage" id="img01" />
      <div class="caption"></div>
    </div>
  </div>
</div>  


  <script src="{{asset('js/home.js')}}"></script>
</x-head>
