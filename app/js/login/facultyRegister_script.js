function bringUpClassSelector() {
	
	var n = document.getElementById("numclass").value;
	
	var div = "<div class=\"class\"><select name=\"Course\"><option value=\"B.Tech\">B.Tech</option><option value=\"B.Pharma\">B.Pharma</option><option value=\"M.Tech\">M.Tech</option><option value=\"MCA\">MCA</option><option value=\"MBA\">MBA</option></select><select name=\"Batch\"><option value=\"2009\">2009</option><option value=\"2010\">2010</option><option value=\"2011\">2011</option><option value=\"2012\">2012</option></select><select name=\"Branch\"><option value=\"CSE\">Computer Science and Engineering</option><option value=\"EC\">Electronics and Communications</option><option value=\"EE\">Electrical Engineering</option><option value=\"ME\">Mechanical Engineering</option><option value=\"IT\">Information Technology</option></select><select name=\"Section\"><option value=\"One\">One(01)</option><option value=\"Two\">Two(02)</option></select></div>";
	
	var class_div = "Select Classes:<br>";
	
	for(i=0; i<n; ++i) {
		class_div += div;
	}
	
	document.getElementById("classes").innerHTML = class_div;
}