var link = "http://localhost/healthcare/"; //telling the ajax the diection to go
//ajax talks to the controller, 


$(document).ready(function() {
    
	$(".phone_n_").keyup(validate_inputed_number);
	$('.del_department').click(delete_department);
	$('.del_user').click(delete_user);
});


function delete_department()//for deleting a record with ajax so there isnt multiple page load
{
	var id	= $(this).attr('lang');
	
	if(confirm('Are you sure you want to delete this record?'))
	{
		
		$.post(link + "admin/delete_department", { id: id },
			function(data){
				
				/*alert(data);*/
				if(data == "done"){
					
					$('#dt-row-'+id).hide();//hide row after its been deleted
					
				}
				else {
					alert("Error deleting Record");
				}
			
			});
			
		
	}
	
}


function delete_user()
{
	
	var id	= $(this).attr('lang');
	
	if(confirm('Are you sure you want to delete this record?'))
	{
		
		$.post(link + "admin/delete_user", { id: id },
			function(data){
				
				if(data == "done"){
					
					
					$('#dt-row-'+id).hide();//hide row after its been deleted
					
				}
				else {
					alert("Error deleting Record");
				}
			
			});
			
		
	}
	
}

function validate_inputed_number(){
	//remove lettes and commas
	var the_box_value = $(this).val().replace(/[^\d.]/g, '');
	$(this).val(the_box_value);
	
	//Remove double dots
	the_box_value = $(this).val();
	var occurances = occurrences(the_box_value, ".", "");
	var last_char = the_box_value.charAt( the_box_value.length-1 );
	
	if(last_char == "." && occurances > 1) {
		$(this).val( the_box_value.slice(0, the_box_value.length-1) );	
	}
}


function occurrences(string, subString, allowOverlapping){

    string+=""; subString+="";
    if(subString.length<=0) return string.length+1;

    var n=0, pos=0;
    var step=(allowOverlapping)?(1):(subString.length);

    while(true){
        pos=string.indexOf(subString,pos);
        if(pos>=0){ n++; pos+=step; } else break;
    }
    return(n);
}

function addCommas(nStr){
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

