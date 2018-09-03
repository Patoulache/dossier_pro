EMAIL = {
	email1 : "",
	email2 : "",

	INIT : function(){
		document.getElementById("email1").addEventListener("focusout", EMAIL.checkUsed);
		document.getElementById("email2").addEventListener("focusout", EMAIL.checkValid);
	}

	checkUser: function(){
		EMAIL.email1 = document.getElementById("email1").value;
		console.log(EMAIL.email1);
	}
}
