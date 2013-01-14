<!DOCTYPE html>

<html> 
	<head>
		<title>Login</title>
        <?php
    		$this->load->helper('html');
    		$link = array(
         	'href' => 'css/login/styles.css',
          	'rel' => 'stylesheet',
          	'type' => 'text/css',
          	'media' => 'all'
			);
			echo link_tag($link); 
    	?>	
    	
	</head>
<body>


<!--top banner-->
	<div id="topBanner" class="blockElement">
    	<div id="topBanner_text">Faculty Registeration</div>
    </div>
<!--top banner ends-->
    
<!--separator-->
    <div id="separator" class="blockElement">separator</div>
<!--separator ends-->

<!--login box-->	
<div id="loginBox">
    
    <form name="regForm" action="performFacultyRegistration" method="post">
      <fieldset>
        <legend><strong>Registration Form</strong></legend>
        <dl id="fieldset_dl">
          <dt>
            <label for="name">Name:</label> 
          </dt>
          <dd>
            <input autofocus="autofocus" type="text" name="name" tabindex="1" size="35" required placeholder="Enter name as in Class X Marksheet">
          </dd>
                    
          
          <dt>
            <label id="gender"><br>
            Gender:</label>
          </dt>
          <dd>
            <label for="gender_male">
              <input type="radio" name="gender" value="male" id="gender_male"  tabindex="6"/> male
            </label>
            <label for="gender_female">
              <input type="radio" name="gender" value="female" id="gender_female"  tabindex="7" /> female 
            </label>
          </dd>
                   
          <dt>
            <label id="registration_number">Registration Number:</label>
          </dt>
          <dd>
            <input type="number" name="regnum" size="30" tabindex="9" />
          </dd>
          
          <dt>
            <label id="father"><br>
            Father's Name:</label>
          </dt>
          <dd>
            <input type="text" name="fathersname" size="35" tabindex="10" required placeholder="Candidate's Father's Name"/>
          </dd>
          
          <dt>
            <label id="mother">Mother's Name:</label>
          </dt>
          <dd>
            <input type="text" name="mothersname" size="35" tabindex="11" required placeholder="Candidate's Mother's Name"/>
          </dd>
          
          <dt>
            <label id="permanent_address"><br>
            Permanent Address:</label>
          </dt>
          <dd>
            <textarea name="address" cols="35" rows="4" tabindex="12" required></textarea>
          </dd>
          
          <dt>
            <label id="phone">Phone Number:</label>
          </dt>
          <dd>
            <input type="tel" name="phone" size="30" tabindex="13"/>
          </dd>
          <dt>&nbsp;</dt>

		  <dt>
            <label id="Email">Email:</label>
		  </dt>
          <dd>
            <input type="email" name="email" size="35" tabindex="14" placeholder="Enter a valid email address"/>
          </dd>
        
          
			<dt>
            <label id="subjects"><br>
            Subjects:</label>
         </dt>
          
         <dd>
            <select name="subject1" tabindex="17">
            	 <option value="">Graph Theory</option>
                <option value="">discrete mathematics</option>
                <option value="">Electrical Engineering</option>
                <option value="">Mechanical Engineering</option>
                <option value="">Information Technology</option>
            </select>

            <select name="subject2" tabindex="18">
            	 <option value="">Graph Theory</option>
                <option value="">discrete mathematics</option>
                <option value="">Electrical Engineering</option>
                <option value="">Mechanical Engineering</option>
                <option value="">Information Technology</option>
            </select>

            <select name="subject3" tabindex="19">
            	 <option value="">Graph Theory</option>
                <option value="">discrete mathematics</option>
                <option value="">Electrical Engineering</option>
                <option value="">Mechanical Engineering</option>
                <option value="">Information Technology</option>
            </select>

            <select name="subject4" tabindex="20">
            	 <option value="">Graph Theory</option>
                <option value="">discrete mathematics</option>
                <option value="">Electrical Engineering</option>
                <option value="">Mechanical Engineering</option>
                <option value="">Information Technology</option>
            </select>
            
            <select name="subject5" tabindex="21">
            	 <option value="">Graph Theory</option>
                <option value="">discrete mathematics</option>
                <option value="">Electrical Engineering</option>
                <option value="">Mechanical Engineering</option>
                <option value="">Information Technology</option>
            </select>
            
         </dd>        
                
        </dl>
        
        <div id="Register_Buttons">
        		<input class="form_buttons" type="reset" value="Reset"  tabindex="23">
           	<input class="form_buttons" type="submit" value="Save"  tabindex="22">
	      </div>
      </fieldset>
    </form>
</div>
<!--login box ends-->

</body>
</html>