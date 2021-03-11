
<x-head>
<x-logoAdmin />

<div class="createphoto-container">
    <h1>Create Photo</h1>

    <form class="form1" action=" {{ route( 'photoStore', $albumId ) }}"  method="POST" enctype="multipart/form-data">
        
        @csrf
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
                <label for="filename">Photo:</label>
                <input  type="file" style="width: 200px"  name="filename" accept="image/*" class="form-control1">
            <div>
    


            <div class="buttons">
                <label for="cover_image">Cover:</label>
                <input name="cover_image" type="checkbox" value=true>
                <button type="submit" value="Submit">Submit</button>
                <button type="reset">Reset</button>
                    
                <a href="{{ route ('albumEdit', $albumId)}}">
                <button >Turn Back</button>
                </a>
            </div>    
        </div>

    </form>

    
    <div class="picture-uploaded">
            <img src="https://images.unsplash.com/photo-1556103255-4443dbae8e5a?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8cGhvdG9ncmFwaGVyfGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80">
    </div>




</div>


</x-head>
