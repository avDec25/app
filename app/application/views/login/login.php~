<!DOCTYPE HTML>

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
	<div id="topBanner">	
    	<div id="topBanner_text">SRMS Server</div>
    </div>
<!--top banner ends-->



<!--separator-->
<div id="separator" class="blockElement">separator</div>
<!--separator ends-->



<!--login box-->
<div id="loginBox" class="blockElement">
    <form id="loginBox_form" action="index.php/main/perform_login" method="post">
         <fieldset>
              <div id="fieldset_login">
                  <div id="fieldset_header">Srms Login<hr></div>
                      <div id="loginBox_fieldsetTable">
                            <table width="92%">
                                <tr>
                                    <td width="22%"><strong>Username:</strong></td>
                                    <td width="4%"></td>
                                    <td width="74%"><input name="userName" type="text" size="20"/></td>
                                </tr>
                                
                                <tr height="5%;"></tr>
                                
                                <tr>
                                    <td><strong>Password:</strong></td>
                                    <td></td>
                                    <td><input name="password" type="password" size="20" /></td>
                                </tr>
                                
                                <tr height="10px"></tr>
                                
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><input type="submit" value="Log In"> or <input type="button" value="Register" onClick="window.location.href='<?php echo base_url().'index.php/main/register'; ?>'"></td>
                                </tr>
                                
                                <tr height="5%;"></tr>
                                
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><a href="logout.php">Forgot your password?</a></td>
                                </tr>
                            </table>
                        </div></div>
                    </fieldset>
    </form>            
</div>
<!--login box ends-->

</body>
</html>