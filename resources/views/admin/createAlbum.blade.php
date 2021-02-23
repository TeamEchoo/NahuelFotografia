@extends('layouts.adminHeader')

@section('adminheader')
<body>
    
    <h1>Dashboard</h1>

    <form action=" {{ route( 'albumStore' ) }}"  method="post">
            
        @csrf
            
        <label for="title">Title:</label>
        <input name="title" type="text">

        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="Skateboarding">Skateboarding</option>
            <option value="Portraits">Portraits</option>
        </select>


        <label for="cover_image">Cover image:</label>
        <input name="cover_image" type="text">
            
        <input type="submit" value="Save">
        <button type="reset">Reset</button>
    </form>
        
            <a href="{{ route ('admin')}}">
                <button >Turn Back</button>
            </a>

</body>
</html>