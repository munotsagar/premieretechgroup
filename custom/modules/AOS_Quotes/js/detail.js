$(document).ready(function(){
	//alert("I am Here....");
	//$("#top-panel-3 > .tab-content").children().hide();
	
	
	$("#employee_custom_status_c").on('change', function(){
		var quoteid = $(this).attr('quoteid');
		var employee_status_c = $(this).val();
		//alert(quoteid + " "+employee_status_c);
		$.ajax({
                    url: "updateStatus.php",
                    type: "POST",
                    async: true,
                    data: {'quoteid':quoteid, 'employee_status_c':employee_status_c},
                    success: function (response) {
                       alert("Status changed Successfully...");
					       location.reload();

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log("sawood says:"+textStatus, errorThrown);
                    }
                });
		
	});
	
	
	$("#vendor_custom_status_c").on('change', function(){
		var quoteid = $(this).attr('quoteid');
		var vendor_status_c = $(this).val();
		//alert(quoteid + " "+vendor_status_c);
		$.ajax({
                    url: "updateStatus.php",
                    type: "POST",
                    async: true,
                    data: {'quoteid':quoteid, 'vendor_status_c':vendor_status_c},
                    success: function (response) {
                       alert("Status changed Successfully...");
					       location.reload();

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log("sawood says:"+textStatus, errorThrown);
                    }
                });
		
	});
	
	$("#manager_custom_status_c").on('change', function(){
		var quoteid = $(this).attr('quoteid');
		var manager_status_c = $(this).val();
		//alert(quoteid + " "+manager_status_c);
		$.ajax({
                    url: "index.php?entryPoint=updateStatus",
                    type: "POST",
                    async: true,
                    data: {'quoteid':quoteid, 'manager_status_c':manager_status_c},
                    success: function (response) {
                       alert("Status changed Successfully...");
					       location.reload();

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log("sawood says:"+textStatus, errorThrown);
                    }
                });
		
	});
	
	
	$("#custom_assign_to").on('click', function(){
		var quoteid = $(this).attr('quoteid');
		var userid = $(this).attr('userid');
		var flag = "assign";
		//alert(quoteid + " "+userid+" "+flag);
		$.ajax({
                    url: "index.php?entryPoint=quoteAssignTo",
                    type: "POST",
                    async: true,
                    data: {'quoteid':quoteid, 'userid':userid, 'flag':flag},
                    success: function (response) {
                       alert("Status changed Successfully...");
					       location.reload();

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log("sawood says:"+textStatus, errorThrown);
                    }
                });
		
	});

	$("#custom_unassign_to").on('click', function(){
		var quoteid = $(this).attr('quoteid');
		var userid = $(this).attr('userid');
		var flag = "unassign";
		//alert(quoteid + " "+userid+" "+flag);
		$.ajax({
                    url: "index.php?entryPoint=quoteAssignTo",
                    type: "POST",
                    async: true,
                    data: {'quoteid':quoteid, 'userid':userid, 'flag':flag},
                    success: function (response) {
                       alert("Status changed Successfully...");
					       location.reload();

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       console.log("sawood says:"+textStatus, errorThrown);
                    }
                });
		
	});
	
});