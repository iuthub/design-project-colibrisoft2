function enter() {
	var actionButtons = document.getElementById("buttons");
		actionButtons.parentNode.removeChild(actionButtons);
	var formInsert = document.getElementById("divContainer");
		formInsert.innerHTML='<div class="myContainer" id="ourContainer"><div>Registration Type:<br><input type="text" name="regType" class="inputs" value="Entrance" readonly></input><hr id="hr1"></div><div id="enter_AskCertificate">Do you have any certificate that informs about your knowledge of languages?<input type="button" class="greenBtn" id="enter_AskCertificate_IELTS" onclick="enter_AskCertificate_IELTSf()" value="IELTS"></input><input type="button" class="greenBtn" id="enter_AskCertificate_TOEFL" onclick="enter_AskCertificate_TOEFLf()" value="TOEFL"></input><input type="button" class="greenBtn" id="enter_AskCertificate_OTHER" onclick="enter_AskCertificate_OTHERf()" value="OTHER"></input><input type="button" class="blueBtn" id="enter_AskCertificate_NONE" onclick="enter_AskCertificate_NONEf()" value="None Of Them"></input></div></div>';
	window.scrollTo(0, 250);
}
function enter_AskCertificate_IELTSf() {
	var formInsertIELTSscore = document.getElementById("enter_AskCertificate");
		formInsertIELTSscore.innerHTML='<div>Certificate:<br><input type="text" name="certificateType" class="inputs" value="IELTS" readonly></input><hr><div id="certificateScore"></div>';
	addIELTSscoreF();
}
	function addIELTSscoreF() {
		var formInsertIELTSs = document.getElementById("certificateScore");
			formInsertIELTSs.innerHTML='For which range fits your IELTS band score?<input type="button" class="greenBtn" id="enter_AskCertificate_IELTS_1040" onclick="addedIELTSscore(\'1.0 – 4.0\')" value="1.0 – 4.0"><input type="button" class="greenBtn" id="enter_AskCertificate_IELTS_4555" onclick="addedIELTSscore(\'4.5 – 5.5\')" value="4.5 – 5.5"></input><input type="button" class="greenBtn" id="enter_AskCertificate_IELTS_6070" onclick="addedIELTSscore(\'6.0 – 7.0\')" value="6.0 – 7.0"><input type="button" class="greenBtn" id="enter_AskCertificate_IELTS_7590" onclick="addedIELTSscore(\'7.5 – 9.0\')" value="7.5 – 9.0"></input>';
	}
		function addedIELTSscore(selectedIELTSscore) {
				var formInsertIELTSss = document.getElementById("certificateScore");
				if (selectedIELTSscore == '7.5 – 9.0') {
					var selected = '7.5 – 9.0';
				}
				formInsertIELTSss.innerHTML='IELTS Score:<input type="text" class="inputs" id="added_IELTS_Score" name="score" value="' + selectedIELTSscore + '" readonly></input><hr><div id="univs"><div id="sendContact"></div></div>';
				addUniv(selected);
		}

function enter_AskCertificate_TOEFLf() {
	var formInsertTOEFLscore = document.getElementById("enter_AskCertificate");
		formInsertTOEFLscore.innerHTML='<div>Certificate:<br><input type="text" name="certificateType" class="inputs" value="TOEFL" readonly></input><hr><div id="certificateScore"></div>';
	addTOEFLscoreF();
}
	function addTOEFLscoreF() {
		var formInsertTOEFLs = document.getElementById("certificateScore");
			formInsertTOEFLs.innerHTML='For which range fits your TOEFL score?<input type="button" class="greenBtn" id="enter_AskCertificate_TOEFL_9_52" onclick="addedTOEFLscore(\'9 – 52\')" value="9 – 52"><input type="button" class="greenBtn" id="enter_AskCertificate_TOEFL_53_77" onclick="addedTOEFLscore(\'53 – 77\')" value="53 – 77"></input><input type="button" class="greenBtn" id="enter_AskCertificate_TOEFL_78_95" onclick="addedTOEFLscore(\'78 – 95\')" value="78 – 95"><input type="button" class="greenBtn" id="enter_AskCertificate_TOEFL_96_120" onclick="addedTOEFLscore(\'96 – 120\')" value="96 – 120"></input>';
	}
		function addedTOEFLscore(selectedTOEFLscore) {
				var formInsertTOEFLss = document.getElementById("certificateScore");
				if (selectedTOEFLscore == '96 – 120') {
					var selected = '96 – 120';
				}
				formInsertTOEFLss.innerHTML='TOEFL Score:<input type="text" class="inputs" id="added_TOEFL_Score" name="score" value="' + selectedTOEFLscore + '" readonly></input><hr><div id="univs"><div id="sendContact"></div></div>';	
				addUniv(selected);
		}

function enter_AskCertificate_OTHERf() {
	var formInsertOTHERscore = document.getElementById("enter_AskCertificate");
		formInsertOTHERscore.innerHTML='<div>Certificate:<br><input type="text" name="certificateType" class="inputs" value="OTHER" readonly></input><hr><div id="certificateScore"></div>';
	addOTHERscoreF();
}
	function addOTHERscoreF() {
		var formInsertOTHERs = document.getElementById("certificateScore");
			formInsertOTHERs.innerHTML='Which type of Certificate do you have?<input type="text" class="inputs" id="OTHER_Certificate" oninput="inputOTHERscore();" placeholder="Certificate Name"></input><div id="OTHERs_score_def"></div><input type="text" class="inputs" id="OTHER_Score" placeholder="Certificate Score"></input><input type="button" class="blueBtn" value="OK" onclick="addedOTHERscore()"></input>';
	}
	function inputOTHERscore() {
		var input = document.getElementById("OTHER_Certificate");
	    var div = document.getElementById("OTHERs_score_def");
	    	div.innerHTML = 'What is your ' + input.value + ' score?';
}
		function addedOTHERscore() {
			var OTHERcertificateType = document.getElementById('OTHER_Certificate').value;
			var scoresOTHERs = document.getElementById('OTHER_Score').value;
			var formInsertOTHERss = document.getElementById("enter_AskCertificate");
			if (OTHERcertificateType == '') {addOTHERscoreF();}
			else if (scoresOTHERs == '') {formInsertOTHERss.innerHTML = '<div>Certificate:<br><input type="text" name="certificateType" class="inputs" value="' + OTHERcertificateType + '" id="OTHER_Certificate" readonly></input><hr>' + OTHERcertificateType + ' Score:<input type="text" class="inputs" id="OTHER_Score" placeholder="Certificate Score"></input><input type="button" class="blueBtn" value="OK" onclick="addedOTHERscore()"></input>'}
			else {formInsertOTHERss.innerHTML = '<div>Certificate:<br><input type="text" name="certificateType" class="inputs" value="' + OTHERcertificateType + '" readonly></input><hr>' + OTHERcertificateType + ' Score:<input type="text" class="inputs" id="added_OTHER_Score" name="score" value="' + scoresOTHERs + '" readonly></input><hr><div id="univs"><div id="sendContact"></div></div>';
		addUniv();}
		}
function enter_AskCertificate_NONEf() {
	var formInsertNONEscore = document.getElementById("enter_AskCertificate");
		formInsertNONEscore.innerHTML='<div>Certificate:<br><input type="text" name="certificateType" class="inputs" value="No Certificate" readonly></input><hr><div id="certificateScore"></div>';
		addNONEscoreF();
}
	function addNONEscoreF() {
		var formInsertNONEs = document.getElementById("certificateScore");
			formInsertNONEs.innerHTML='Do you know English?<input type="button" class="greenBtn" value="YES" onclick="addedNONEscoreYES()" id="NONE_Score"></input><input type="button" class="blueBtn" value="NO" onclick="addedNONEscoreNO()" id="NONE_Score"></input>';
	}
		function addedNONEscoreYES() {
			var formInsertNONEss = document.getElementById("certificateScore");
			formInsertNONEss.innerHTML='Knowledge of English:<input type="text" class="inputs" id="added_NONE_Score" name="score" value="Know English" readonly></input><hr><div id="univs"><div id="sendContact"></div></div>';
		addUniv();
		}
		function addedNONEscoreNO() {
			var formInsertNONEss = document.getElementById("certificateScore");
			formInsertNONEss.innerHTML='Knowledge of English:<input type="text" class="inputs" id="added_NONE_Score" name="score" value="Don\'t Know English" readonly></input><hr><div id="univs"><div id="sendContact"></div></div>';
		addUniv();
		}

function transfer() {
	var actionButtons = document.getElementById("buttons");
		actionButtons.parentNode.removeChild(actionButtons);
	var formInsert = document.getElementById("divContainer");
		formInsert.innerHTML='<div class="myContainer" id="ourContainer"><div>Registration Type:<br><input type="text" name="regType" class="inputs" value="Transfer" readonly></input><h5>*In order to Transfer to International University, your current University\'s Grading system should be GPA!</h5><hr></div><div id="transfer_askGPA">What\'s your GPA?<input type="text" class="inputs" id="GPA_Score" min="0.0" max="4.5" step="0.1"></input><input type="button" class="blueBtn" onclick="transfer_addGPA()" value="OK"></input></div></div>';
	window.scrollTo(0, 250);
}
	function transfer_addGPA() {
		var addedGPA = document.getElementById('GPA_Score').value;
		var convertedGPA = addedGPA.replace(",", ".");
		var scoresGPAs = parseFloat(convertedGPA, 10);
		if ((scoresGPAs >= 0) && (scoresGPAs <= 4.5)) {
		var formInsertGPAscore = document.getElementById("transfer_askGPA");
			formInsertGPAscore.innerHTML='<div>GPA:<br><input type="text" name="score" class="inputs" value="' + scoresGPAs + '" readonly></input><hr><div id="univs"><div id="sendContact"></div></div>';
		addUniv();} else {transfer();}
	}

function addUniv(selected) {
	var addFinal = document.getElementById("univs");
	if ((selected == '7.5 – 9.0') || (selected == '96 – 120')) {
		addFinal.innerHTML = '<div id="congrats">You have a chance to enter to the University in Grand basis</div><hr><div id="sendContact"></div>';
	}
	var addContacs = document.getElementById("sendContact");
		addContacs.innerHTML='<div id="contactDetails">Please leave your contacts to communicate with our consultant:<hr>What is your First Name?<input type="name" name="FName" id="FirstName" class="inputs" placeholder="Steve" required></input><hr>What is your Last Name?<input type="text" name="LName" id="LastName" class="inputs" placeholder="Jobs" required></input><hr>For which Country\'s University do you want to apply?<input type="text" name="UCountry" id="UniversityCountry" class="inputs" placeholder="The USA"></input><h5>You can leave empty this section if you haven\'t desided yet</h5><hr>What is your Mobile Number?<input type="text" name="MNumber" id="MobileNumber" class="inputs" value="+998" required></input><hr><input type="submit" id="finalSubmit" class="enterBtn" value="Send"></input></div>';
}

function final() {
	var fname = document.getElementById('FirstName').value;
	var lname = document.getElementById('LastName').value;
	var mnumb = document.getElementById('MobileNumber').value;
	if ((fname == '') || (lname = '') || (mnumb.length < 13)) {alert('Please check your Name, Surname or Number are correctly filled'); addUniv();
	} else {var finalInsert = document.getElementById("divContainer");
		finalInsert.innerHTML='<div id="finalAlert" style="border-width: 2px; border-style: dotted; border-radius: 10px; border-color: #fff; background-color: rgba(0,0,0,0.5); color: #0F0; padding: 1.5rem 3rem; font-size: 18px; font-weight: 600;">You have succesfully Registered to our system, wait for our consultants responds</div><a href="index.html"><input type"button" value="Go to MainPage" class="transferBtn" style="text-align: center;"></input></a>';
		window.scrollTo(0,0);
	}
}