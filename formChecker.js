function validate() {
	console.log("Beginning Validation...");
	let valid = 1;
	let amount1 = document.getElementById("amnt1").value;
	let amount2 = document.getElementById("amnt2").value;
	let amount3 = document.getElementById("amnt3").value;
	let username = document.getElementById("user").value;
	let pass = document.getElementById("pass").value;
	let ship1 = document.getElementById("Free").checked;
	let ship2 = document.getElementById("Overnight").checked;
	let ship3 = document.getElementById("3Day").checked;
	
	if(pass == "") {
		valid = 0;
		console.log("Failed Password Check");
	}
	if(username != "" && username.length >= 7) {
		let splitUser = username.split("");
		let validUser = 0;
		if(splitUser[username.length-1] == 'm' || splitUser[username.length-2] == 'o' || splitUser[username.length-3] == 'c' || splitUser[username.length-4] == '.') {
			for(let i = 1; i < username.length-5; i++) {
				if(splitUser[i] == '@') {
					validUser = 1;
				}
			}
			if(validUser == 0) {
				console.log("Failed @ Check");
			}
		}
		else {
			console.log("Failed .com Check");
		}
		if(validUser == 0) {
			valid = 0;
		}
	}
	else {
		valid = 0;
		console.log("Failed Username Check");
	}
	
	if(amount1 < 0 || amount2 < 0 || amount3 < 0 || amount1 == '' || amount2 == '' || amount3 == '') {
		valid = 0;
		console.log("Failed Amount Check");

	}
	
	if(ship1 != 1 && ship2 != 1 && ship3 != 1) {
		valid = 0;
		console.log("Failed Shipping Check");

	}
		
	
	
	
	
	
	if(valid == 1) {
		console.log("Passed Validation");
		return true;
	}
	else {
		return false;
	}
};