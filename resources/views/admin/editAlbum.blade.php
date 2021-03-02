@extends('layouts.adminHeader')

@section('adminheader')

<body>
    <form action="{{ route('albumEdit', $album->id) }}" method="POST">
    
        @method("PUT")
        @csrf

        <label for="title"></label>
        <input name="title" type="text" value="{{$album->title}}">

        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="{{$album->category}}">{{$album->category}}</option>
            <option value="Skateboarding">Skateboarding</option>
            <option value="Portraits">Portraits</option>
        </select>

        <a href="{{ route( 'albumUpdate', $album->id ) }}">
            <input type="submit" value="Edit">
        </a>


        <a href="{{ route('photoCreate', $album->id) }}">Add new Photo</a>


    </form>

    <a href="{{ route('album') }}">Cancel</a>

    <table>
        <tr>
            <th>Title</th>
            <th>Epigraph</th>
            <th>Person</th>
            <th>Link</th>
            <th>Picture</th>
            <th>Cover</th>
        </tr>
        
        @foreach($photos as $photo)
        
        <tr>
            <td> {{ $photo->title }} </td>
            <td> {{ $photo->epigraph }} </td>
            <td>{{ $photo->person }} </td> 
            <td> {{ $photo->link }} </td>
            <td> {{ $photo->image_path }} </td>
            <td> {{ $photo->cover_image }} </td>
            <td><a href="{{ route('photoEdit', $photo->id) }}"><i class="far fa-edit"></i></td></a>
            <td>
                <form action="{{ route('photoDelete', $photo->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr>
        
        
        @endforeach 
    </table>



    
  

</body>

    