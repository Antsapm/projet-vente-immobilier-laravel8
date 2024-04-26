$(document).ready(function(){
    $('#login').on('submit',function(e){
        //e.preventDefault();
        uname = $('#uname').val();
        upass = $('#upass').val();
        
        window.location.href = 'http://localhost:8000/home'
        
    })
});