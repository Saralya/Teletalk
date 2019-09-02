

<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Web and SMS based Online Application System</title>
<link href="lib/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="lib/ajax.js"></script>
<script src="lib/FormManager.js"></script>
<script src="lib/form_submit.js"></script>
<script src="lib/GetList.js"></script>
<script src="lib/gpaBox.js"></script>
<script src="lib/uniBox.js"></script>
<script src="lib/subBox.js"></script>
<script src="lib/examBox.js"></script>
<script src="lib/retype_mobileno_validate.js"></script>
<script src="lib/enable_submit.js"></script>
<script type="text/javascript" src="lib/JobAddField.js"></script>
<script type="text/javascript" src="lib/JobEnable.js"></script>

<script type="text/javascript">
function dependencies()
{
    setupDependencies('app_form'); //name of form(s). Seperate each with a comma (ie: 'weboptions', 'myotherform' )
}

objImage = new Image();
function download()
{
	// preload the image file
	objImage.src="images/pload.gif";
}

// Loading------------------------------------------------------
function changeVisibility1()
{
	document.images["loading1"].style.visibility="visible";
}
function changeVisibility2()
{
	document.images["loading2"].style.visibility="visible";
}
function changeVisibility3()
{
	document.images["loading3"].style.visibility="visible";
}
function changeVisibility_hsc()
{
	document.images["loading_hsc"].style.visibility="visible";
}
function changeVisibility4()
{
	document.images["loading4"].style.visibility="visible";
}
</script>

<noscript>
	<style type="text/css">
		#appbody {display:none;}
	</style>
	<h1 align="center" style="color: red"> Please enable Javascript of your browser before you proceed. </h1>
</noscript>

</head>
<body id="appbody" ondragstart="return false" onselectstart="return false" onload="download(), dependencies();">


<form action="includes/signup.inc.php" method="POST" onsubmit="return Validate()" name="app_form" id="app_form">
			<input name="min_edu_stage" id="min_edu_stage" value="3" type="hidden">
			<input name="edu_stage" id="edu_stage" value="3" type="hidden">
			<input name="job_exp" id="job_exp" value="1" type="hidden">
			<input name="edu_mas" id="edu_mas" value="1" type="hidden">

<table width="760" cellspacing="0" cellpadding="0" border="0" align="center">
  <tbody><tr>
    <td class="topbg" valign="middle" height="10" align="center">&nbsp;</td>
  </tr>
	<tr>
		  <td class="green" valign="top" height="100" align="left"><table class="white14bold" width="100%" cellspacing="0" cellpadding="0" border="0">
		  <tbody><tr><td class="green" valign="top" height="100" align="left"><table class="white14" width="100%" cellspacing="0" cellpadding="0" border="0">
		    <tbody><tr>
		      <td width="16%" valign="middle" height="100" bgcolor="Green" align="center">
                                 <img src="images/logo.png" width="760" height="80"></td>

 		
		     			
	        </tr>
	</tbody></table></td>
  		</tr>
	<tr>
				        <td valign="middle" height="30" bgcolor="Green" align="left">


					<table class="#FF0000 " cellspacing="0" cellpadding="8" bordercolor="White" border="1">
						<tbody><tr>

						  <td width="200"align="middle" valign="middle"><a href="home.html" class="link-home"><font color='white'>Home</font></a></td>
                          <td width="200"align="middle" valign="middle"><a href="process.html" class="link-home"><font color='white'>Process</font></a></td>
						  <td width="200"align="middle" valign="middle"><a href="services.html" class="link-home"><font color='white'>Services</font></a></td>
						  <td width="200"align="middle" valign="middle"><a href="downloadattachment.html" class="link-home"><font color='white'>Download Attachment</font></a></td>
						  <td width="200"align="middle" valign="middle"><a href="application.php" class="link-home"><font color='white'>Registration Form</font></a></td>
						  <td width="200"align="middle" valign="middle"><a href="doc/teletalkhandbook.pdf" class="link-home"><font color='white'>User Manual</font></a></td>


						</tr>
					</tbody></table>
				</td>
			</tr>
  <tr>
    <td valign="top" bgcolor="#E3E3E3" align="left">
      <table class="black12" width="100%" cellspacing="0" cellpadding="5" border="0">
        <tbody><tr bgcolor="#A2A2A2">
          <td width="60%" valign="middle" height="35" align="left">Organization Basic Information<span class="red12">*</span></td>
          
          </tr>

 
		<tr>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="left">Name of Organization<span class="red12">*</span></td>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" bgcolor="#E3E3E3" align="left"><input required name="nameoforganization" class="textfield03" id="nameoforganization" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" type="text"></td>
        </tr>
        <tr>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="left">Department<span class="red12">*</span></td>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" bgcolor="#E3E3E3" align="left"><input required name="department" class="textfield03" id="department" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" type="text"></td>
        </tr>
        <tr>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="left">Name of Ministry<span class="red12">*</span></td>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" bgcolor="#E3E3E3" align="left"><input required name="nameofministry" class="textfield03" id="nameofministry" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" type="text"></td>
        </tr>
        
        <td width="3%" valign="middle" align="left">&nbsp;</td>


	<tr bgcolor="#A2A2A2">
          <td width="60%" valign="middle" height="35" align="left">Contact Person Information<span class="red12">*</span></td>
          
        </tr>
		    <tr>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="left">Name of Contact Person<span class="red12">*</span></td>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" bgcolor="#E3E3E3" align="left"><input required name="nameofcontactperson" class="textfield03" id="nameofcontactperson" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" type="text"></td>
        </tr>
        <tr>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="left">Designation of Contact Person<span class="red12">*</span></td>
          <td class="black12" valign="middle" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" bgcolor="#E3E3E3" align="left"><input required name="designationofcontactperson" class="textfield03" id="designationofcontactperson" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" type="text"></td>
        </tr>
        <tr>
			<td width="3%" valign="middle" align="left">&nbsp;</td>
	<tr bgcolor="#A2A2A2">
          <td width="60%" valign="middle" height="35" align="left">Contact Information<span class="red12">*</span></td>
          
          </tr>
        <tr>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="left">Mobile Number<span class="red12">*</span></td>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" height="30" bgcolor="#E3E3E3" align="left"><table class="black12" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
              <td width="26%" valign="middle" height="23" align="left"><input required name="mobileno" class="textfield02" id="mobileno" maxlength="11" onkeypress="return alpha(event,numbers)" type="text" pattern="[0]{1}[1]{1}[5-9]{1}[0-9]{8}"></td>
              <td class="red11" width="70%" valign="middle" align="left">&#xAB Please mention a Mobile Number of any operator.</td>
              <td class="red12" width="4%" valign="middle" align="left">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr>
        <tr>
		</tr><tr>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="left">Confirm Mobile<span class="red12">*</span></td>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" height="30" bgcolor="#E3E3E3" align="left"><table class="black12" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
              <td width="26%" valign="middle" height="23" align="left"><input required name="confirmmobile" class="textfield02" id="confirmmobile" maxlength="11" onkeypress="return alpha(event,numbers)" type="text" pattern="[0]{1}[1]{1}[5-9]{1}[0-9]{8}"></td>
              <td class="black11" width="70%" valign="middle" align="left">&#xAB Please Retype Mobile Number.</td>
              <td class="red12" width="4%" valign="middle" align="left">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr><tr>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="left">Email<span class="red12">*</span></td>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" height="30" bgcolor="#E3E3E3" align="left"><table class="black12" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
              <td width="26%" valign="middle" height="23" align="left"><input required name="Email" class="textfield02" id="Email" type="email"></td>
              <td class="red11" width="70%" valign="middle" align="left">&#xAB Please Give A Valid Email Address.</td>
              <td class="red12" width="4%" valign="middle" align="left">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr>
		<td width="3%" valign="middle" align="left">&nbsp;</td>

	<tr bgcolor="#A2A2A2">
          <td width="60%" valign="middle" height="35" align="left">Application Information<span class="red12">*</span></td>
          
          </tr>
        <tr>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="left">Application Start Date<span class="red12">*</span></td>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" height="30" bgcolor="#E3E3E3" align="left"><table class="black12" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
              <td width="26%" valign="middle" height="23" align="left"><input required name="applicationstartdate" class="textfield02" id="applicationstartdate" maxlength="11" onkeypress="return alpha(event,numbers)" type="text"></td>
              <td class="red11" width="70%" valign="middle" align="left">&#xAB Please mention a Start Date.</td>
              <td class="red12" width="4%" valign="middle" align="left">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr>
        <tr>
		</tr><tr>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="left">Applicant End Date<span class="red12">*</span></td>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" height="30" bgcolor="#E3E3E3" align="left"><table class="black12" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
              <td width="26%" valign="middle" height="23" align="left"><input required name="applicationenddate" class="textfield02" id="applicationenddate" maxlength="11" onkeypress="return alpha(event,numbers)" type="text"></td>
              <td class="red11" width="70%" valign="middle" align="left">&#xAB Please mention a End Date.</td>
              <td class="red12" width="4%" valign="middle" align="left">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr><tr>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="left">Age Limit<span class="red12">*</span></td>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" height="30" bgcolor="#E3E3E3" align="left"><table class="black12" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
              <td width="26%" valign="middle" height="23" align="left"><input required name="agelimit" class="textfield02" id="agelimit" type="text"></td>
              <td class="black11" width="70%" valign="middle" align="left">&#xAB Please mention a minimum age limit for the application.</td>
              <td class="red12" width="4%" valign="middle" align="left">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr><tr>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="left">No. Of Post<span class="red12">*</span></td>
          <td class="black12" valign="middle" height="30" bgcolor="#E3E3E3" align="center">:</td>
          <td valign="middle" height="30" bgcolor="#E3E3E3" align="left"><table class="black12" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
              <td width="26%" valign="middle" height="23" align="left"><input required name="postno" class="textfield02" id="postno." type="text"></td>
              <td class="black11" width="70%" valign="middle" align="left">&#xAB Please Give No of Posts Available.</td>
              <td class="red12" width="4%" valign="middle" align="left">&nbsp;</td>
            </tr>
          </tbody></table></td>
        </tr>
		<td width="3%" valign="middle" align="left">&nbsp;</td>

        
        <tr>
          <td colspan="3" class="black11" valign="middle" bgcolor="#A2A2A2" align="center">
            <input name="info_yes" id="info_yes" onclick="EnableSubmit(this)" type="checkbox">
            The above information is correct and I would like to submit.</td>
        </tr>
		<tr>
          <td colspan="3" valign="middle" bgcolor="#A2A2A2" align="center">
            <input name="button" id="button" value="   Submit   " disabled="" type="submit"></td>
        </tr>
		
      </tbody></table>
    </td>
  </tr>
  <tr>
    <td class="black10" valign="middle" height="25" bgcolor="lightgreen" align="center"><font size="1"><b><i>For any inconvenience, please send email to vas.query@teletalk.com.bd</i></b></font></td>
  </tr>
  <tr>
    <td valign="top" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" align="left"><fieldset>
      <table class="black10" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tbody><tr>
          <td width="1%" valign="middle" align="left">&nbsp;</td>
          <td width="80%" valign="middle" align="left">�2018 Teletalk Bangladesh, All Rights Reserved.</td>
          <td width="10%" valign="middle" align="left">Powered by:</td>
          <td width="9%" valign="middle" align="left"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="61" height="38">
            <param name="movie" value="tbl_logo.jpg">
            <param name="quality" value="high">
            <param name="wmode" value="transparent">
            <param name="swfversion" value="6.0.65.0">
            <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don?t want users to see the prompt. -->
            <param name="expressinstall" value="Scripts/expressInstall.swf">
            <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="tbl_logo.jpg" width="61" height="38">
              <!--<![endif]-->
              <param name="quality" value="high">
              <param name="wmode" value="transparent">
              <param name="swfversion" value="6.0.65.0">
              <param name="expressinstall" value="Scripts/expressInstall.swf">
              <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
              <div>
                <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33"></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->     
          </object></td>
        </tr>
      </tbody></table>
    </fieldset></td>
  </tr>
</tbody></table>


</td></tr></tbody></table></form></body></html>