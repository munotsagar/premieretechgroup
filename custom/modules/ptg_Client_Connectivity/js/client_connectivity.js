
    $(document).ready(function(){
			var onclicksave = $("input[title='Save']").attr("onclick");
			$("input[title='Save']").removeAttr("onclick");

			$("input[title='Save']").click(function(){

				if($("#pop_c").prop("checked") == true) 
				{
					if($("#popincomingmailserver_c").val() == 0)
					{
						alert("Please enter POP: Incoming Mail Server!");
						return false;
					}
					if($("#pop_port_c").val() == 0)
					{
						alert("Please enter POP Port!");
						return false;
					}
				}
				
				
				if($("#imap_c").prop("checked") == true) 
				{
					if($("#imapincomingmailserver_c").val() == 0)
					{
						alert("Please enter IMAP Incoming Mail Server!");
						return false;
					}
					if($("#imap_port_c").val() == 0)
					{
						alert("Please enter IMAP Port!");
						return false;
					}
				}
				
				
				if($("#smtp_c").prop("checked") == true) 
				{
					if($("#smtp_outgoing_mail_server_c").val() == 0)
					{
						alert("Please enter SMTP Outgoing Mail Server!");
						return false;
					}
					if($("#smtp_port_c").val() == 0)
					{
						alert("Please enter SMTP Port!");
						return false;
					}
				}
				
				if($("#exchangeactivesync_c").prop("checked") == true) 
				{
					if($("#eas_server_name_c").val() == 0)
					{
						alert("Please enter EAS Server name!");
						return false;
					}
					if($("#eas_port_c").val() == 0)
					{
						alert("Please enter Exchange  Port!");
						return false;
					}
				}
				
				var $el=$("#email_client_c");
				var flag = 0;
				$el.find('option:selected').each(function(){
					if($(this).val() == "BrowserOWN_URL" && $("#browser_own_url_c").val() == "")
					{
						flag = 1;
					}
					
					if($(this).val() == "Other" && $("#other_email_client_c").val() == "")
					{
						flag = 2;
					}					
				});
				
				if(flag == 1)
				{
					alert("Please enter Browser Own URL!");
					return false;
				}
				
				if(flag == 2)
				{
					alert("Please enter Other Email Client!");
					return false;
				}
				
				var _form = document.getElementById('EditView'); 
				_form.action.value='Save'; 
				if(check_form('EditView')){SUGAR.ajaxUI.submitForm(_form);}
				return false;
			});
    });