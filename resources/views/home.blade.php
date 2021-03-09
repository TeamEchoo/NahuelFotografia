<x-head>
<x-navBar />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<!-- GALLERY -->
<div class="containerGallery">

  <div id="photos">
      @foreach($photos as $photo)
      <img class="myImg" src="{{ $photo->filename }}" onclick="openModal();"/>
      @endforeach
  <div>

  <div class="myModal modal">
    <span class="close">&times;</span>
    <img class="modal-content img01">
    <div class="caption"></div>
  </div>
</div>



  <script>
        // Get the modal
        var modal = document.querySelector('.myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.querySelector('.myImg');
        var modalImg = document.querySelector('.img01');
        var captionText = document.querySelector('.caption');
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
  </script>

  

</x-head>
