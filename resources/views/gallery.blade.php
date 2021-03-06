<x-head>
<x-navBar />
<h1 class="album-title">{{ $album->title }}</h1>
<p class="album-description">{{ $album->description }}</p>
<div class="containerGalleryHome">
  <div class="photosAlbum">
  @foreach($photos as $photo)
    <img class="myImg" src="{{ $photo->filename }}" >
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
