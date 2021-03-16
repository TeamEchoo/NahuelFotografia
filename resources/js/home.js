'use strict'

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