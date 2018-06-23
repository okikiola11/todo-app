// JavaScript Document

var link = 'http://localhost/healthcare/'; //this is a global var,rmba to change on upload
//if it goes live www.healthcare.com(change to)

$(document).ready(function(e) {
    
	/*$('.consult-plan').click(function(){
		
		var id 	=	$(this).attr('lang');
		alert(id);
		
	});*/
	
	$('.del_consultation').click(del_consultation);
	
	$(".phone_n_").keyup(validate_inputed_number);
	
	$('.srch-sel-vaccine').click(hold_skills);
	
	$('.mySearch').val('');//empty the search txtbox
	
	$('.mySearch').keyup(function() {
		
		$('.tripue_drop_box').html('');
		
		if($('.mySearch').val() == '')
		{
			
			$('.tripue_drop_box').removeClass('tripue_drop_boxs');
			
		}
		
		else {
			
			if($('.tripue_drop_box').hasClass('tripue_drop_boxs'))
			{
			}
			
			else {
				$('.tripue_drop_box').addClass('tripue_drop_boxs');
			}
			
			run_search();
			
		}
		
	});

});


function run_search()
{
	
	$.post(link+"admin/searchbox", { name: $('.mySearch').val(), limit:15},
		function(data) {
			
			$.each(data, function(index, value){
				
				$('.tripue_drop_box').append('<div class="tripue_drop_wrapper"><a style="cursor:pointer;" class="get_details" rel="'+value['firstname']+' '+value['lastname']+'" lang="'+value['patients_id']+'"><div class="tripue_drop_item">'+value['firstname']+' '+value['lastname']+'</div></a></div>');

			});
			
			$('.get_details').click(function(){//to get the particular id
				
				var searchid 		= 	$(this).attr('lang');
				
				var searchchosen 	= 	$(this).attr('rel');
				
				$('#user-name-holder').val(searchchosen);
												
				$('#search_idholder').val(searchid);
				
				$('.f-cont').show();
				$('.f_containter').show();
				
				$('.mySearch').val('');
				
				$('.tripue_drop_box').html('');
				
				
			});//get search id

						
		}, 'json');
		
		
}

function hold_skills(){
	
		// $(".assets".attr("checked", "checked";
	//$(".assets".each(
	//var hold = $(this).val();
	
	var long_list 	= 	"";
	
	$('.srch-sel-vaccine:checked').each(function(){ // walk through each div with 'chat_p' as class
		
		var the_id_list = $(this).val();// extract the number contained in the id of the class
		long_list += the_id_list+','; 
	
	//member_ids.push(the_id_list); // creation of array with number of each status div
	});

	$(".vaccine_hldr").val(long_list);

}

function save_consult()
{

	show_animation();
	setTimeout('hide_animation()', 500);
	
	$.post(link+"admin/appointment-form/"+$('#search_idholder').val(), {
																				type_of_visit: $('#type_of_visit').val(),
																				breast_feeding: $('#breast_feeding').val(),
																				weight: $('#weight').val(),
																				vaccine_hldr: $('#vaccine_hldr').val()
																				},
		function(data){
			
			if(data == "Success")
			{
				window.location = link+"admin/appointment/";
			}
			else
			{
				$('#form-error').html(data).show();
			}
			
		});
}

function show_animation()
{
	$('#saving_container').css('display', 'block');
	$('#saving').css('opacity', '.8');
}

function hide_animation()
{
	$('#saving_container').fadeOut();
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

function del_consultation()
{
	
	var id	=	$(this).attr('lang');
	
	$.post(link+"admin/delete-consultation", { id: id},
		function(data) {

			if(data == "Success")
			{
				window.location = link+"admin/consultation/";
			}
			else
			{
				alert(data);
			}
					
	});	
}
