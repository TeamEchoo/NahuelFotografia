<x-head>
<x-logoAdmin />



    
<div class="form-container">
        <form class="form" action=" {{ route( 'albumStore' ) }}"  method="post">
            
             @csrf

            <h1 class="section-title">Dashboard</h1>
            <div class="imputs1">
                <div>
                    <label for="title">Title:</label>
                    <input name="title" type="text">
                </div>

                <div class="imputs">
                    <label for="category">Category:</label>
                    <select name="category" id="category">
                        <option value="Home">Home</option>
                        <option value="Skateboarding">Skateboarding</option>
                        <option value="Portraits">Portraits</option>
                    </select>
                </div>    
            </div>

            <div class="imputs">
                <label for="cover_image">Cover image:</label>
                <input name="cover_image" type="text">
                <button type="submit">Save</button>
                <button type="reset">Reset</button>           
            </div>    
        
            <div class="last-button">
                <a href="{{ route ('album')}}">
                    <button>Turn Back</button>
                </a>
            </div>    
        </form>
</div>


</x-head>