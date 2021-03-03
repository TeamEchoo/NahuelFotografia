

<x-head>
<x-logoAdmin />

<div class="createphoto-container">
    <h1>Create Photo</h1>

    <form action=" {{ route( 'photoStore', $albumId ) }}"  method="post" enctype="multipart/form-data">
        
        @csrf
        
   
        <label for="title">Title:</label>
        <input name="title" type="text">
        

        <label for="epigraph">Epigraph:</label>
        <input name="epigraph" type="text">


        <label for="person">Person:</label>
        <input name="person" type="text">
        

        <label for="link">Link:</label>
        <input name="link" type="text">


        <label for="filename">Photo:</label>
        <input  type="file" name="filename" accept="image/*" class="form-control1">

        <div class="buttons">
            <label for="cover_image">Cover:</label>
            <input name="cover_image" type="checkbox" value=true>
            <button type="submit" value="Submit">Submit</button>
            <button type="reset">Reset</button>
        </div>    
    </form>
    
        <a href="{{ route ('albumEdit', $albumId)}}">
            <button >Turn Back</button>
        </a>
</div>






</x-head>