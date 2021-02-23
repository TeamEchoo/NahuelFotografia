@extends('layouts.adminHeader')

@section('adminheader')
<body>
    <h1>Dashboard</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Epigraph</th>
            <th>Person</th>
            <th>Link</th>
            <th>Picture</th>
            <th>Category</th>
            <th>Album</th>
        </tr>
        
        @foreach($photos as $photo)
        
        <tr>
            <td> {{ $photo->title }} </td>
            <td> {{ $photo->epigraph }} </td>
            <td>{{ $photo->person }} </td> 
            <td> {{ $photo->link }} </td>
            <td> {{ $photo->image_path }} </td>
            <td><a href="{{ route('adminEdit', $photo->id) }}"><i class="far fa-edit"></i></td></a>
            <td>
                <form method='POST' action=" {{ route( 'adminDelete', $photo->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="far fa-trash-alt"></i></input>
                </form>
            </td>
        </tr>
        
        
        @endforeach 
    </table>
    <div>
        <a href=" {{ route('adminCreate') }} ">
            <button>Create</button>
        </a>
    </div>

</body>
</html>