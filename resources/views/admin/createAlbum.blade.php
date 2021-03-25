<x-head>
<x-navBar />


@if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
    
<div class="form-container">
        <form class="form" action=" {{ route( 'albumStore' ) }}"  method="post">
            
             @csrf

            <h1 class="section-title">New Album</h1>
            <div class="imputs">
                <div>
                    <label for="title">Title:</label>
                    <input name="title" type="text">
                    <label for="description">Description:</label>
                    <input name="description" type="text">
                </div>  
                <div class="select">
                    <label for="category">Category:</label>
                    <select name="category" id="category">
                        <option value="Overview">Overview</option>
                        <option value="Editorial">Editorial</option>
                        <option value="More">More</option>
                        <option value="Pictures more section">Pictures more section</option>
                    </select>
                </div>    
            </div>
            </div>

            
                <div class="imputs2">

                    <div class="imputs3">
                        <button type="submit">Save</button>
                        <button type="reset">Reset</button>  
                    </div>         
                </div>    
                <div class="last-button">
                    <a href="{{ route ('album')}}">
                        <button type="button">Turn Back</button>
                    </a>
                </div>    
        </form>
            
</div>


</x-head>
