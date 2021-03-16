<x-head>
<x-navBar />

@if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

<form action=" {{ route( 'photoUpdate', $photo->id ) }}"  method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')


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
            @if($photo->cover_image == true)
                <input name="cover_image" type="checkbox" checked>
            @else
                <input name="cover_image" type="checkbox">
            @endif
            
            </div>    
            <input type="submit" value="Save">
            <a href="{{ route ('albumEdit', $photo->album_id)}}">
            <button >Cancel</button>
                </a>
        
    </form>


</x-head>
