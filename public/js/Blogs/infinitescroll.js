var latest_id = 0;

function test(){
    $.ajax({
        type:"POST",
        url:"/api/seemore",
        data: {
            'latest_id': latest_id
        },
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data){
            alert("TAE");
            //location.reload();
        }
    });
}