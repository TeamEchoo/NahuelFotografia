<x-head>
<x-navBar />

<!-- GALLERY -->
  <div class="containerGallery">
  <h6>{{ $album->title }}</h6>
    <div class="column">
    <!-- Trigger the Modal -->
    <img id="myImg1" src="./assets/mountainskies.jpg" alt="" >
    <!-- The Modal -->
    <div id="myModal" class="modal1">
      <span class="close">&times;</span>
      <img class="modal-content1" id="img01">
    </div>
      <img src="./assets/underwater.jpg">
      <img src="./assets/wedding.jpg">
      <img src="./assets/ocean.jpg">
      <img src="./assets/underwater.jpg">
      <img src="./assets/mountainskies.jpg">
      <img src="./assets/rocks.jpg">
      <img src="./assets/underwater.jpg">
      <img src="./assets/wedding.jpg">
      <img src="./assets/rocks.jpg">
      <img src="./assets/underwater.jpg">
      <img src="./assets/underwater.jpg">
      <img src="./assets/wedding.jpg">
      <img src="./assets/ocean.jpg">
      <img src="./assets/underwater.jpg">
      <img src="./assets/ocean.jpg">
      <img src="./assets/mountainskies.jpg">
      <img src="./assets/rocks.jpg">
    </div>
</div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <script>
      // Get the modal
        var modal = document.getElementById("myModal");
      // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg1");
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