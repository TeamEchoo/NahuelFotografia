<x-head>
<x-navBar />

@if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

<div class="createphoto-container">
    <h1>Create Photo</h1>

    <form class="form1" action=" {{ route( 'photoStore', $albumId ) }}"  method="POST" enctype="multipart/form-data">
            @csrf
    <div id="picture-uploaded">
        <label for="filename">Photo:</label>
        <input type="file" style="width: 420px" name= "filename" id="inpPhoto" accept="image/*" class="form-control1">
        <div class="photo-preview" id="photoPreview">
            <img src="" alt="Photo Preview" class="photo-preview__image">
            <span class="photo-preview__default-text">Photo Preview</span>
        </div>        
    </div>

        <div class="inputs-container">
            <div class="inputs">
                <label for="title">Title:</label>
                <input name="title" type="text">
            </div>  
            
            <div class="inputs">
                <label for="link">Link:</label>
                <input name="link" type="text">
            </div>
            
            <div class="inputs">
                <label for="person">Person:</label>
                <input class="input" name="person" type="text">
            </div>  

            <div class="inputs">
                <label for="epigraph">Epigraph:</label>
                <input name="epigraph" type="text">
            </div>

            <div class="inputs">
                <label for="cover_image">Cover:</label>
                <input name="cover_image" type="checkbox" value=true>
            </div>

            <div class="buttons">
                <button type="submit" value="Submit">Submit</button>
                <button type="reset">Reset</button>
            </div>    
        </div>
                
    </form>
</div>
            <a href="{{ route ('albumEdit', $albumId)}}">
                <button >Cancel</button>
            </a>







<script src="{{asset('js/previewPhoto.js')}}"></script>
</x-head>

