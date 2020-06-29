$(document).ready(function(){
		/*$("#voice_services_c").parent().parent().next().hide();
        $("#voice_services_c").parent().parent().hide();
        $("#local_services_c").parent().parent().next().hide();
        $("#local_services_c").parent().parent().hide();

        $("#data_services_c").parent().parent().next().hide();
        $("#data_services_c").parent().parent().hide();
        
        $("#cloud_services_c").parent().parent().next().hide();
        $("#cloud_services_c").parent().parent().hide();
        
        $("#other_services_c").parent().parent().next().hide();
        $("#other_services_c").parent().parent().hide();
*/

		$("#assigned_user_name").parent().parent().hide();
        var labelID;

        $('label').click(function() {
               $(this).children().trigger('click');
        });

        $("div[field='services_products_c'] > #services_products_c").remove();
		$("div[field='services_products_c']").append($("#serviceCheckboxes").html());

        $( document ).on("click", "#Voice_Services", function(){
            $("#voice_services_c").parent().parent().next().hide();
            $("#voice_services_c").parent().parent().hide();
            if($(this).prop('checked'))
            {
                $("#voice_services_c").parent().parent().next().show();
                $("#voice_services_c").parent().parent().show();
            } else {
				$("#voice_services_c option:selected").prop("selected", false);
			}

        });

        $( document ).on("click", "#Local_Services", function(){
            $("#local_services_c").parent().parent().next().hide();
            $("#local_services_c").parent().parent().hide();
            if($(this).prop('checked'))
            {
                $("#local_services_c").parent().parent().next().show();
                $("#local_services_c").parent().parent().show();
            } else {
				$("#local_services_c option:selected").prop("selected", false);
			}

        });

        $( document ).on("click", "#Data_Services", function(){
            $("#data_services_c").parent().parent().next().hide();
            $("#data_services_c").parent().parent().hide();
            if($(this).prop('checked'))
            {
                $("#data_services_c").parent().parent().next().show();
                $("#data_services_c").parent().parent().show();
            } else {
				$("#data_services_c option:selected").prop("selected", false);
			}

        });

        $( document ).on("click", "#Cloud_Services", function(){
            $("#cloud_services_c").parent().parent().next().hide();
            $("#cloud_services_c").parent().parent().hide();
            if($(this).prop('checked'))
            {
                $("#cloud_services_c").parent().parent().next().show();
                $("#cloud_services_c").parent().parent().show();
            } else {
				$("#cloud_services_c option:selected").prop("selected", false);
			}

        });

        $( document ).on("click", "#Other_Services", function(){
            $("#other_services_c").parent().parent().next().hide();
            $("#other_services_c").parent().parent().hide();
            if($(this).prop('checked'))
            {
                $("#other_services_c").parent().parent().next().show();
                $("#other_services_c").parent().parent().show();
            } else {
				$('#other_services_c').text("");
			}

        });


	});