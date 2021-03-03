<x-adminHeader>

    <h1>Dashboard</h1>

    <table>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Cover image</th>
            </tr>
            
            @foreach($albums as $album)
            
            <tr>
                <td> {{ $album->title }} </td>
                <td> {{ $album->category }} </td>
                <td></td>
                <td>
                    <a href="{{ route('albumEdit', $album->id) }}">
                        <i class="far fa-edit"></i>
                    </a>
                </td>
                <td>
                    <form method='POST' action=" {{ route( 'albumDelete', $album->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="far fa-trash-alt"></i></input>
                    </form>
                </td>
            </tr>
            
            
            @endforeach 
    </table>
    
    <a href="{{ route('albumCreate') }}">New Album</a>
    
</x-adminHeader>