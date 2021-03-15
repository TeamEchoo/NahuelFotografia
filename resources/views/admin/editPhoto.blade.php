<x-head>
<x-logoAdmin />

<div class="createphoto-container">
    <h1>Edit Photo</h1>

    <form class="form2" action=" {{ route( 'photoEdit', $photo->id ) }}"  method="POST">
            
            @method('PUT')
            @csrf


        <div class="inputsGeneral">
            <div class="inputs-container">
                <div class="inputs">
                    <label for="title">Title:</label>
                    <input name="title" type="text" value="{{ $photo->title }}">
                </div>    
                
                <div class="inputs">
                    <label for="epigraph">Epigraph:</label>
                    <input name="epigraph" type="text" value="{{ $photo->epigraph }}">
                </div>

                <div class="inputs">
                    <label for="person">Person:</label>
                    <input name="person" type="text" value="{{ $photo->person }}">
                </div>
                    
                <div class="inputs">
                    <label for="link">Link:</label>
                    <input name="link" type="text" value="{{ $photo->link }}">
                </div>

                <div class="inputs">
                    <label for="filename">Photo:</label>
                    <input  type="file" style="width: 172px"  name="filename" accept="image/*" class="form-control">
                </div>
            </div>   
        




            <div id="picture-uploaded1">   
                <label for="thumbnail">Actual Picture</label>
                <img src="{{$photo->filename}}" >
            </div>    
        </div>


            <div class="buttons2">  
                <label for="cover_image">Cover:</label>
                <input name="cover_image" type="checkbox">
        
            
                <a href="{{ route( 'photoUpdate', $photo->id) }}">
                <input type="submit" value="Save">
                </a>

                <a href="{{ route ('albumEdit', $photo->album_id)}}">
                <button >Cancel</button>
                </a>
            </div>    
 

    </form>
</div>    


</x-head>
