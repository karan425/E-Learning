// Ajax Call for student Registraion Verification

$(document).ready(function(){
	//Ajax call form Already exists email verificarion
	$("#sturegemail").on("keypress blur", function(){
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var stuemail = $("#sturegemail").val();
		$.ajax({
			url:"student/addstudent.php",
			method:"POST",
			data: {
				checkemail:"checkeamil",
				stuemail : stuemail
			},
			success:function(data){
				// console.log(data);
				if (data != 0) {
					$("#validationMsg2").html('<small style="color:red;">This Email is already used</small>');
					$("#signup").attr("disabled",true);
				}else if (data == 0 && reg.test(stuemail)) {
					$("#validationMsg2").html('<small style="color:green;">There You Go !</small>');
					$("#signup").attr("disabled",false);
				}else if (!reg.test(stuemail)) {
					$("#validationMsg2").html('<small style="color:red;">Please Enter vailed Email e.g example@mail.com</small>');
					$("#signup").attr("disabled",false);
				}
			}
		});
	});
});



function addstu(){
	var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i; 
	var stuname = $("#sturegname").val();
	var stuemail = $("#sturegemail").val();
	var stupass = $("#sturegpass").val();

// Checking form validation on form submission
	if (stuname.trim()=="") {
		$("#validationMsg1").html('<small style="color:red;">Please Enter Your Name !</small>');
		$("#stuname").focus();
		return false;
	}else if(stuemail.trim()==""){
		$("#validationMsg2").html('<small style="color:red;">Please Enter Your Email !</small>');
		$("#stuemail").focus();
		return false;
	}else if(stuemail.trim() != "" && !reg.test(stuemail)){
		$("#validationMsg2").html('<small style="color:red;">Please Enter vailed Email e.g example@mail.com</small>');
		$("#stuemail").focus();
		return false;
	}else if(stupass.trim()==""){
		$("#validationMsg3").html('<small style="color:red;">Please Enter New Password !</small>');
		$("#stupass").focus();
		return false;
	}else{

		$.ajax({
		url:"student/addstudent.php",
		method:"POST",
		dataType: "json",
		data:{
			stusignup: "stusignup",
			stuname : stuname,
			stuemail : stuemail,
			stupass  : stupass
		},
		success:function(data){
			console.log(data);
			if (data == "OK") {
			$("#successMsg").html("<span class='alert alert-success'>Registration Successful !</span>");
			clearStuRegField();
			}else if(data == "Failed"){
			$("#successMsg").html("<span class='alert alert-denger'>Unable to Registration!</span>");

			}
		}
		
	});

	}
	
}

// Emty all Fields
function clearStuRegField() {
	// body...
	$("#StuGegForm").trigger("reset");
	$("#validationMsg1").html("");
	$("#validationMsg2").html("");
	$("#validationMsg3").html("");
}





// Ajax Call for Student Login Verification
function loginstu(){
	var stuLogEmail = $("#stuloginemail").val();
	var stuLogPass = $("#stuloginpass").val();

	$.ajax({
		url:"student/loginstudent.php",
		method: "POST",
		data:{
			checklogstu: "checklogstu",
			stuLogEmail:stuLogEmail,
			stuLogPass:stuLogPass

		},
		success:function(data){
			if (data == 0) {
				$("#validationLogMsg").html('<small class="alert-danger">Invelid Email and Password !</small>');	
			}else if (data == 1) {
				$("#validationLogMsg").html('<div class="spinner-border text-success" role="status"></div>');	
				setTimeout(() => {
					window.location.href = "index.php";
				}, 1000);
			}
		}
	})

}

function stuLogClear(){
	$("#stuloginForm").trigger("reset");
	$("#validationLogMsg").html("");

}
