<x-head>
<x-navBar />


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- GALLERY -->
<div class="containerGallery">
  <div class="photosHome2">
  @foreach($photos as $photo)
    <img id="myImg" src="{{$photo->filename}}" onclick="openModal();">

  <div>

  <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
  </div>
  @endforeach
</div>



<script src="{{asset('js/home.js')}}"></script>

</x-head>
