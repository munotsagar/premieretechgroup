$(document).ready(function(){
	// alert("Hello");
	
	//var onclicksave = $("input[title='Save']").attr("onclick");
	//$("input[title='Save']").removeAttr("onclick");

	$("input[title='Save']").click(function(){
		// alert("After click");

		if($("input[name='product_name[]'").val() == 0)
		{
			alert("Please fill ODBC Connection field!");
			return false;
		}
			
		
		//var _form = document.getElementById('EditView'); 
		//_form.action.value='Save'; 
		//if(check_form('EditView')){SUGAR.ajaxUI.submitForm(_form);}
		//return false;
	});
});