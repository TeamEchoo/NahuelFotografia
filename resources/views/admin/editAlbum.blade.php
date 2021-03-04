<x-head>
    <x-logoAdmin />

    

    <div class='wrapper'>
        <div class='row'>
            <div class="column">
                <div class='title-column'>
                    <form action="{{ route('albumEdit', $album->id) }}" method="POST">

                        @method("PUT")
                        @csrf

                        <h2 class="categoryTitleOne" for="title">Title:</h2>
                        <input class="inputTitle" name="title" type="text" value="{{$album->title}}">
                </div>
            </div>
            <div class='column'>
                <div class='category-column'>
                    <h2 class="categoryTitle" for="category">Category:</h2>

                    <select class="categorySelect" name="category" id="category">
                        <option value="{{$album->category}}">{{$album->category}}</option>
                        <option value="Home">Home</option>
                        <option value="Skateboarding">Skateboarding</option>
                        <option value="Portraits">Portraits</option>
                    </select>

                    <a href="{{ route( 'albumUpdate', $album->id ) }}">
                        <button type="submit">
                            <a>Save</a>
                        </button>
                    </a>

                    </form>
                </div>
            </div>
        </div>
    </div>


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
                            <td>{{ $photo->person }} </td>
                            <td> {{ $photo->link }} </td>
                            <td> {{ $photo->image_path }} </td>
                            <td> {{ $photo->cover_image }} <input name="cover_image" type="checkbox" value=true></td>

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
                </div>
            </div>
        </div>

        <div class="downButtons">
            <a class="addButton" href="{{ route('photoCreate', $album->id) }}">Add new Photo</a>
            <a class="cancelButton" href="{{ route('album') }}">Cancel</a>
        </div>
</x-head>