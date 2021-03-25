<x-Components.head>
<x-Components.nav-bar />

    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

    <div class='wrapper'>
                <div class='title-column'>
                     <form class="titleTwo" action="{{ route('albumUpdate', $album->id) }}" method="POST">
                        @method("PUT")
                        @csrf

                        <h2 class="categoryTitleOne1" for="title">Title:</h2>
                        <input class="inputTitle" name="title" type="text" value="{{$album->title}}">
                        <h5 class="description">Description:</h5>
                        <input name="description" name="description" type="text" value="{{$album->description}}">
                </div>

                <div class='column'>
                            <h2 class="categoryTitle" for="category">Category:</h2>

                    <select class="categorySelect1" name="category" id="category">
                        <option value="{{$album->category}}">{{$album->category}}</option>
                        <option value="Overview">Overview</option>
                        <option value="Editorial">Editorial</option>
                        <option value="More">More</option>
                        <option value="Pictures more section">Pictures more section</option>
                    </select>
                </div>
                <button class="saveButton" class="cancelButton" type="submit">Save</button>
    </div>

                    </form>   


    @if(!$photos)
    <h1>Upload photos!</h1>
    
    
    @else(asset($photos))
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="tablee">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Epigraph</th>
                            <th>Person</th>
                            <th>Link</th>
                            <th>Picture</th>
                            <th>Cover</th>
                        </tr>
                    </thead>
                    @foreach($photos as $photo)

                    <tr>
                        <td> {{ $photo->title }} </td>
                        <td> {{ $photo->epigraph }} </td>
                        <td> {{ $photo->person }} </td>
                        <td> {{ $photo->link }} </td>
                        <td> <img class="picture" src="{{ $photo->filename }}"> </td>
                        <td> 
                        @if($photo->cover_image == true)
                            <input name="cover_image" type="checkbox" checked disabled>
                        @else
                            <input name="cover_image" type="checkbox" disabled>
                        @endif
                        </td>
                        <td><a href="{{ route('photoEdit', $photo->id) }}"><i class="far fa-edit"></i></a></td>
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
            </div>
        </div>
    </div>
    @endif

    

    <div class="downButtons">
        <a class="addButton" href="{{ route('photoCreate', $album->id) }}">Add new Photo</a>
        <a class="cancelButton" href="{{ route('album') }}">Cancel</a>
        <a  href="{{ route( 'albumUpdate', $album->id ) }}">
 
    </div>
   
</x-Components.head>
 