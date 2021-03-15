<x-head>
    <x-navBar />
    <x-logoAdmin />


    <h1 class="dash">MORE</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="tablee">
                    <thead>
                        <tr class="tr">
                            <th>Title</th>
                            <th>Category</th>
                            <th>Cover image</th>
                        </tr>
                    </thead>

                    @foreach($albums as $album)

                    <tr>
                        <td> {{ $album->title }} </td>
                        <td> {{ $album->category }} </td>
                        <td>
                        @if(isset($album->getCoverImage()->filename))
                         <img src="{{ $album->getCoverImage()->filename}}" class="picture">
                         @endif
                        </td>
                        <td>
                            <a href="{{ route('albumEdit', $album->id) }}">
                                <button type="submit"> <i class="far fa-edit"></i>
                            </a>
                            <form method='POST' action=" {{ route( 'albumDelete', $album->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-trash-alt"></i></input>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <a id="bottom" href="{{ route('albumCreate') }}">New Album</a>

            </div>
        </div>
</x-head>
