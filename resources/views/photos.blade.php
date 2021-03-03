@extends('layouts.app')

@section('content')
    <div class="container">
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
        
        <h2>Photo Gallery</h2>
        
        <ul>
          @foreach ($images as $image)
          
          <li><img src="{{ asset( $image->filename ) }}" alt="" title=""></a></li>
          
          @endforeach
        </ul>
        
        @if(!isset($image))
        <h1>no hay fotos</h1>
        @endif
    </div>
@endsection
    @endif
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
              <img src="{{$image->filename}}" />
        </div>
   		</div>
        @endif       
  </form>
  </div>
</body>
</html>
