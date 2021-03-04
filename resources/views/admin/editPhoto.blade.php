<x-head>
<x-logoAdmin />

<form action=" {{ route( 'photoEdit', $photo->id ) }}"  method="POST">
        
        @method('PUT')
        @csrf

        <label for="title">Title:</label>
        <input name="title" type="text" value="{{ $photo->title }}">
        
        <label for="epigraph">Epigraph:</label>
        <input name="epigraph" type="text" value="{{ $photo->epigraph }}">


        <label for="person">Person:</label>
        <input name="person" type="text" value="{{ $photo->person }}">
        
        <label for="link">Link:</label>
        <input name="link" type="text" value="{{ $photo->link }}">

        <label for="filename">Photo:</label>
        <input type="file" name="filename" accept="image/*" class="form-control">

        <label for="thumbnail">Actual Picture</label>
        <img src="{{$photo->filename}}" >

        <label for="cover">Cover:</label>
        <input name="cover_image" type="checkbox">
        
        <a href="{{ route( 'photoUpdate', $photo->id) }}">
        <input type="submit" value="Save">
        </a>
        
        <button type="reset">Reset</button>
    </form>
    
        <a href="{{ route ('albumEdit', $photo->album_id)}}">
            <button >Turn Back</button>
        </a>

</x-head>
