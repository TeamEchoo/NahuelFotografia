@extends("layouts.navBar")

@section("navBar")
@endsection
  <div class="container">
  @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
        @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
    <h3 class="jumbotron">Add new photo</h3>
  <form method="post" action="{{url('photo')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <input type="file" name="filename" accept="image/*" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
          </div>
        </div>
        @if($image)
   	    <div class="row">
         <div class="col-md-8">
              <strong>Original Image:</strong>
              <br/>
              <img src="/storage/images/{{$image->filename}}" />
        </div>
   		</div>
        @endif       
  </form>
  </div>
</body>
</html>
