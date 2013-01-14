function regForm_page_select() {
	
	if(document.getElementById('radioFaculty').checked) {
		window.location.href = "registerFaculty.php";
	} else if(document.getElementById('radioStudent').checked) {
		window.location.href = "registerStudent.php";		
	}

}