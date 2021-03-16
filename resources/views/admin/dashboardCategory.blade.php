<x-head>
<x-navBar />

    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif

    <div class="albums-container">
        <div class="albums-categories">
            <div class="overview">
                <span><b>OVERVIEW</b></span>
                <img src="https://assets.entrepreneur.com/content/3x2/2000/20191009140007-GettyImages-1053962188.jpeg">
            </div> 

            <div class="editorial">
                <span><b>EDITORIAL</b></span>
                <img src="https://assets.entrepreneur.com/content/3x2/2000/20191009140007-GettyImages-1053962188.jpeg">
            </div> 
        </div>    
        
        <div class="more">
            <a href="{{route('album', 'More')}}">
                <span><b>MORE</b></span>
            </a>
        </div>    
    </div>            

</x-head>
