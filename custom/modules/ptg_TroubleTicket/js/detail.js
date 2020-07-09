$(document).ready(function(){
	//alert("I am Here....");
	//$("#top-panel-3 > .tab-content").children().hide();
	
	
	$("#employee_custom_status_c").on('change', function(){
		var ticketid = $(this).attr('ticketid');
		var employee_status_c = $(this).val();
		// alert(ticketid + " "+employee_status_c);
		$.ajax({
                    url: "index.php?entryPoint=updateStatusTT",
                    type: "POST",
                    async: true,
                    data: {'ticketid':ticketid, 'employee_status_c':employee_status_c},
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
		var ticketid = $(this).attr('ticketid');
		var vendor_status_c = $(this).val();
		// alert(ticketid + " "+vendor_status_c);
		$.ajax({
                    url: "index.php?entryPoint=updateStatusTT",
                    type: "POST",
                    async: true,
                    data: {'ticketid':ticketid, 'vendor_status_c':vendor_status_c},
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
		var ticketid = $(this).attr('ticketid');
		var manager_status_c = $(this).val();
		// alert(ticketid + " "+manager_status_c);
		$.ajax({
                    url: "index.php?entryPoint=updateStatusTT",
                    type: "POST",
                    async: true,
                    data: {'ticketid':ticketid, 'manager_status_c':manager_status_c},
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
		var ticketid = $(this).attr('ticketid');
		var userid = $(this).attr('userid');
		var flag = "assign";
		// alert(ticketid + " ."+userid+". "+flag);
		$.ajax({
                    url: "index.php?entryPoint=ttAssignTo",
                    type: "POST",
                    async: true,
                    data: {'ticketid':ticketid, 'userid':userid, 'flag':flag},
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
		var ticketid = $(this).attr('ticketid');
		var userid = $(this).attr('userid');
		var flag = "unassign";
		// alert(ticketid + " ."+userid+". "+flag);
		$.ajax({
                    url: "index.php?entryPoint=ttAssignTo",
                    type: "POST",
                    async: true,
                    data: {'ticketid':ticketid, 'userid':userid, 'flag':flag},
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