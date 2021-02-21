<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Nahuel Martinez</title>
</head>
<body>
    <h1>Dashboard</h1>
    <table>
        <tr>
            <th></th>
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
            <td><input type="checkbox"  class="disabled"></td>
            <td> {{ $photo->title }} </td>
            <td> {{ $photo->epigraph }} </td>
            <td>{{ $photo->person }} </td> 
            <td> {{ $photo->link }} </td>
            <td> {{ $photo->image_path }} </td>
            <td> {{ $photo->category }} </td>
            <td> {{ $photo->album }} </td>
        </tr>
        @endforeach 
    </table>
    <div>
        <a href=" {{ route('adminCreate') }} ">
            <button>Create</button>
        </a>
        <button>Edit</button>
        <button>Delete</button>
    </div>

</body>
</html>