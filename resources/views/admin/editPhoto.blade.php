<x-head>
<x-logoAdmin />

<form action=" {{ route( 'photoUpdate', $photo->id ) }}"  method="POST" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input name="title" type="text" value="{{ $photo->title }}">
        
        <label for="epigraph">Epigraph:</label>
        <input name="epigraph" type="text" value="{{ $photo->epigraph }}">


        <label for="person">Person:</label>
        <input name="person" type="text" value="{{ $photo->person }}">
        
        <label for="link">Link:</label>
        <input name="link" type="text" value="{{ $photo->link }}">

        <label for="filename">Photo:</label>
        <input  type="file" style="width: 172px"  name="filename" accept="image/*" class="form-control1">

        <label for="thumbnail">Actual Picture</label>
        <img src="{{$photo->filename}}" >

        <label for="cover_image">Cover:</label>
        <input name="cover_image" type="checkbox">
        
        
        <input type="submit" value="Save">
        

    </form>
    
        <a href="{{ route ('albumEdit', $photo->album_id)}}">
            <button >Cancel</button>
        </a>

</x-head>
