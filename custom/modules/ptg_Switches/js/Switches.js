$(document).ready(function(){
	var stichType = $("#stichType").val();
    $("#switch_configured_c").parent().parent().next().hide();
    $("#switch_configured_c").parent().parent().hide();
    
    $("#access_via_c").parent().parent().next().hide();
    $("#access_via_c").parent().parent().hide();

	if(stichType == 'Managed')
	{
		$("#switch_configured_c").parent().parent().next().show();
		$("#switch_configured_c").parent().parent().show();

		$("#access_via_c").parent().parent().next().show();
		$("#access_via_c").parent().parent().show();
	}
	
	if(stichType == 'Unmanaged')
	{
		$("#switch_configured_c").parent().parent().next().hide();
		$("#switch_configured_c").parent().parent().hide();

		$("#access_via_c").parent().parent().next().hide();
		$("#access_via_c").parent().parent().hide();
	}

    // $("#LBL_ACCESS_VIA").parent().parent().next().hide();
    // $("#LBL_ACCESS_VIA").parent().parent().hide();
   
    
    $("input:radio[name=switch_type_c]").click(function() {             
         if ($(this).val() == 'Managed') {
			 $('input[name="switch_configured_c"]').attr('checked', false);
			 $('input[name="access_via_c"]').attr('checked', false);
             $("#switch_configured_c").parent().parent().next().show();
             $("#switch_configured_c").parent().parent().show();

             $("#access_via_c").parent().parent().next().show();
             $("#access_via_c").parent().parent().show();
         }
         else {
			 $('input[name="switch_configured_c"]').attr('checked', false);
			 $('input[name="access_via_c"]').attr('checked', false);
             $("#switch_configured_c").parent().parent().next().hide();
             $("#switch_configured_c").parent().parent().hide();
             
             $("#access_via_c").parent().parent().next().hide();
             $("#access_via_c").parent().parent().hide();

         }
    })

});