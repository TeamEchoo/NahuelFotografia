$(document).ready(function(){
    $('.file_drag_area').on('dragover', function(){
        $(this).addClass('file_drag_over');
        return false;
    
});
$('.file_drag_area').on('dragleave', function(){
    $(this).removeClass('file_drag_over');
    return false;
});
$('.file_drag_area').on('drop', function(e){
    e.preventDefault();
    $(this).removeClass('file_drag_over');
    var formData = new FormData();
    var files_list = e.originalEvent.dataTransfer.files;
                //console.log(files_list);
    for(var i=0; i<files_list.lenght; i++)
    {
        formData.append('file[]', file_list[i]);
    }
               //console.log(formData);
    $.ajax({  
        url:"createAlbum.blade.php",  
        method:"POST",  
        data:formData,  
        contentType:false,  
        cache: false,  
        processData: false,  
        success:function(data){  
             $('#uploaded_file').html(data);  
        }  
       })  
    });
});