<x-head>
<x-navBar />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



<!-- GALLERY -->
<div class="containerGalleryHome">
  <div class="photosHome">
      @foreach($photos as $photo)
      <img class="myImg" alt="{{ $photo->title }}" src="{{ $photo->filename }}" /> 
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


  <script>
    var modalEle = document.querySelector(".modal");
    var modalImage = document.querySelector(".modalImage");
    var captionText = document.querySelector(".caption");
    Array.from(document.querySelectorAll(".myImg")).forEach(item => {
      item.addEventListener("click", event => {
          modalEle.style.display = "block";
          modalImage.src = event.target.src;
          captionText.innerHTML = event.target.alt;
      });
    });
    document.querySelector(".close").addEventListener("click", () => {
      modalEle.style.display = "none";
    });
</script>

</x-head>
