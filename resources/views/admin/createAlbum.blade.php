<x-adminHeader>
    
    <h1>Dashboard</h1>

    <form action=" {{ route( 'albumStore' ) }}"  method="post">
            
        @csrf
            
        <label for="title">Title:</label>
        <input name="title" type="text">

        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="Home">Home</option>
            <option value="Skateboarding">Skateboarding</option>
            <option value="Portraits">Portraits</option>
        </select>
            
        <input type="submit" value="Save">
        <button type="reset">Reset</button>
    </form>
        
            <a href="{{ route ('album')}}">
                <button >Turn Back</button>
            </a>

</x-adminHeader>