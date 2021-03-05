<x-head>
<x-navBar />


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- GALLERY -->
<h6 id="galleryTitle">HOME</h6>
<div class="containerGallery">
  <div id="photos">
        <!-- Trigger the Modal -->
        <img id="myImg" src="./assets/1.jpg" alt="HOLA" onclick="openModal();">
        <img id="myImg" src="./assets/2.jpg" alt="HOLA" onclick="openModal();">
        <img id="myImg" src="./assets/3.jpg" alt="HOLA" onclick="openModal();">
        <img id="myImg" src="./assets/1.jpg" alt="HOLA" onclick="openModal();">
        <img id="myImg" src="./assets/2.jpg" alt="HOLA" onclick="openModal();">
        <img id="myImg" src="./assets/3.jpg" alt="HOLA" onclick="openModal();">

  <div>

  <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
  </div>
</div>



  <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
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
