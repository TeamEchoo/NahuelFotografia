'use strict'

const inpPhoto = document.getElementById("inpPhoto");
    const previewContainer = document.getElementById("photoPreview");
    const previewPhoto = previewContainer.querySelector(".photo-preview__image");
    const previewDefaultText = previewContainer.querySelector(".photo-preview__default-text");
        
    inpPhoto.addEventListener("change", function(){
        const file = this.files[0];

            if(file) {
                const reader = new FileReader();

                previewDefaultText.style.display  = "none";
                previewPhoto.style.display = "block";

                reader.addEventListener("load", function() {
                    previewPhoto.setAttribute("src", this.result)

                });

                reader.readAsDataURL(file);

            }else{
                previewDefaultText.style.display  = null;
                previewPhoto.style.display = null;
                previewPhoto.setAttribute("src", "");
            }
        });