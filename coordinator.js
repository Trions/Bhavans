$(document).ready(function(){
$( "#autocomplete" ).autocomplete({
        minLength: 2,
        source: function( request, response ) {
            $.ajax({
                url: "http://localhost/codeigniter/index.php/coordinator/suggestions" ,
                data: { query: request.term},
                success: function(data){
                    response(data);
                },
                error: function(jqXHR, textStatus, errorThrown){
                    alert("error handler!");                        
                },
              dataType: 'json'
            });
        }
    });​
    
    $(".account").click(function(){
		var X=$(this).attr('id');
		if(X==1){
			$(".submenu").hide();
			$(this).attr('id', '0');	
		}
		else{
			$(".submenu").show();
			$(this).attr('id', '1');
		}
	
	});

//Mouseup textarea false
	$(".submenu").mouseup(function(){
		return false
	});
	$(".account").mouseup(function(){
		return false
	});


//Textarea without editing.
	$(document).mouseup(function(){
		$(".submenu").hide();
		$(".account").attr('id', '');
	});
	
});
	

