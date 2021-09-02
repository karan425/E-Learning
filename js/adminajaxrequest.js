// Ajax Call for Admin Login Verification
function loginadmin(){
	var adminLogEmail = $("#adminloginemail").val();
	var adminLogPass = $("#adminloginpass").val();

	$.ajax({
		url:"admin/loginAdmin.php",
		method: "POST",
		data:{
			checklogadmin: "checklogadmin",
			adminLogEmail:adminLogEmail,
			adminLogPass:adminLogPass

		},
		success:function(data){
            console.log(data);
			if (data == 0) {
				$("#adminValidLogMsg").html('<small class="alert-danger">Invelid Email and Password !</small>');	
			}else if (data == 1) {
				$("#adminValidLogMsg").html('<div class="spinner-border text-success" role="status"></div>');	
				setTimeout(() => {
					window.location.href = "admin/adminDeshborad.php";
				}, 1000);
			}
		}
	})
}

function adminLogClear(){
	$("#adminloginForm").trigger("reset");
	$("#adminValidLogMsg").html("");

}