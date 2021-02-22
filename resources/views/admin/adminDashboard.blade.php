<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    <title>Nahuel Martinez</title>
</head>
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
            <td> {{ $photo->category }} </td>
            <td> {{ $photo->album }} </td>
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