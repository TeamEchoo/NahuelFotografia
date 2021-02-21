@extends("layouts.navBar")

@section("navBar")
@endsection
    <h2>Photo Gallery</h2>
    @if(isset($image) ? $image->filename : '')
        <ul>
          @foreach ($photos as $photo)
              <li><img src="/storage/images/{{$image->filename}}" /></li>
          @endforeach
        </ul>
    @endif
</body>
</html>