<x-head>
<x-navBar />

@if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

<div class="createphoto-container">
    <h1>Create Photo</h1>

    <form class="editPhotoForm" action=" {{ route( 'photoStore', $albumId ) }}"  method="POST" enctype="multipart/form-data">
    @csrf
       

    <div class="inputsGeneral">
        <div class="inputs-container">
            <div class="inputs">
                <label for="title">Title:</label>
                <input name="title" type="text">
            </div>  
            
            <div class="inputs">
                <label for="epigraph">Epigraph:</label>
                <input name="epigraph" type="text">
            </div>

            <div class="inputs">
                <label for="person">Person:</label>
                <input class="input" name="person" type="text">
            </div>  

            <div class="inputs">
                <label for="link">Link:</label>
                <input name="link" type="text">
            </div>

            
            <div class="inputs">
                <label for="cover_image">Cover image:</label>
                <input name="cover_image" type="checkbox">
            </div>

            <div id="picture-uploaded">
                <label for="filename">Photo:</label>
                <input type="file" style="width: 420px" name= "filename" id="inpPhoto" accept="image/*" class="form-control1">
                <div class="buttons">
                    <button type="submit" value="Submit">Submit</button>    
                    <button type="reset">Reset</button>
                    <a href="{{ route ('albumEdit', $albumId)}}">
                        <button type="button">Cancel</button>
                    </a>
                </div>
            </div>    
        </div>
        <div class="photo-preview" id="photoPreview">
            <img src="" alt="Photo Preview" class="photo-preview__image">
            <span class="photo-preview__default-text">Photo Preview</span>       
        </div>
    </form>
</div>


<script src="{{asset('js/previewPhoto.js')}}"></script>
</x-head>

