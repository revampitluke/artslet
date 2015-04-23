<?php

//----------------------------- include vcontrol -----------------------------//

include("vcontrol.php");

//----------------------------- set form styles -----------------------------//

?>

<style type="text/css">
	.header {color: #<?php echo $header_color; ?>; font-family: helvetica, arial, sans-serif; font-size: <?php echo $header_size; ?>px;}
	.asterisk {color: #<?php echo $ast_color; ?>; font-family: helvetica, arial, sans-serif; font-size: <?php echo $ast_size; ?>px; font-weight: bold;}
	.field {color: #<?php echo $text_color; ?>; font-family: helvetica, arial, sans-serif; font-size: <?php echo $text_size; ?>px;}		
	.input {color: #<?php echo $input_color; ?>; font-family: helvetica, arial, sans-serif; font-size: <?php echo $input_size; ?>px;}
	.error {color: #<?php echo $error_color; ?>; font-family: helvetica, arial, sans-serif; font-size: <?php echo $error_size; ?>px;}
	.notes {color: #<?php echo $notes_color; ?>; font-family: helvetica, arial, sans-serif; font-size: <?php echo $notes_size; ?>px;}
	.sent  {color: #<?php echo $sent_color; ?>; font-family: helvetica, arial, sans-serif; font-size: <?php echo $sent_size; ?>px;}
</style>

<?php

//----------------------------- get post variables -----------------------------//

$v_type = $_POST["v_type"];
$v_first = $_POST["v_first"];
$v_middle = $_POST["v_middle"];
$v_last = $_POST["v_last"];
$v_nick = $_POST["v_nick"];
$v_company = $_POST["v_company"];
$v_title = $_POST["v_title"];
$v_email = $_POST["v_email"];
$v_web = $_POST["v_web"];
$v_street = $_POST["v_street"];
$v_city = $_POST["v_city"];
$v_state = $_POST["v_state"];
$v_zip = $_POST["v_zip"];
$v_country = $_POST["v_country"];
$v_phone = $_POST["v_phone"];
$v_cell = $_POST["v_cell"];
$v_fax = $_POST["v_fax"];
$v_note = $_POST["v_note"];
$formfirst = $_POST["formfirst"];

//----------------------------- if no vtype is specified -----------------------------//

if (!$v_type) {
	if ($vcard_type=="individual") { $v_type="individual"; }
	elseif ($vcard_type=="company") { $v_type="company"; }
	else { $vcard_type="choice"; $v_type="individual"; }
}	

//----------------------------- check form data -----------------------------//

$formstatus = "unsent";

if ($formfirst<>"no") { $form_error = ""; }
elseif ($firstname=="required" && !$v_first) 	{ $form_error = "Enter your first name."; }
elseif ($middlename=="required" && !$v_middle) 	{ $form_error = "Enter your middle name."; }
elseif ($lastname=="required" && !$v_last)	 	{ $form_error = "Enter your last name."; }
elseif ($nickname=="required" && !$v_nick) 		{ $form_error = "Enter your nickname."; }
elseif ($company=="required" && !$v_company) 	{ $form_error = "Enter your company name."; }
elseif ($jobtitle=="required" && !$v_title) 	{ $form_error = "Enter your job title."; }
elseif ($email=="required" && !$v_email) 		{ $form_error = "Enter your email address."; }
elseif (!validateEmail($v_email)) 				{ $form_error = "Enter a valid email address."; }
elseif ($web=="required" && !$v_web) 			{ $form_error = "Enter your website url."; }
elseif ($address=="required" && !$v_street) 	{ $form_error = "Enter your street address."; }
elseif ($address=="required" && !$v_city) 		{ $form_error = "Enter your city."; }
elseif ($address=="required" && !$v_state) 		{ $form_error = "Enter your state."; }
elseif ($address=="required" && !$v_zip) 		{ $form_error = "Enter your zip."; }
elseif ($country=="required" && !$v_country) 	{ $form_error = "Enter your country."; }
elseif ($phone=="required" && !$v_phone) 		{ $form_error = "Enter your country."; }
elseif ($cell=="required" && !$v_cell) 			{ $form_error = "Enter your country."; }
elseif ($fax=="required" && !$v_fax) 			{ $form_error = "Enter your country."; }
elseif ($note=="required" && !$v_note) 			{ $form_error = "Enter your note."; }
else {
	makeVcard();
	sendEmail();
	$formstatus = "sent";
}

//----------------------------- html form -----------------------------//

?>

<!-- -------- vCardPHP script ---------------- -->
<!-- -------- (c)2009 vCardPHP --------------- -->
<!-- -------- www.vcardphp.com --------------- -->
<!-- -------- do not remove these credits ---- -->

<?php

echo"<div style='width:".$form_width."px; height:".$form_height."px; background-color:#".$form_color."; position: relative;'>";

	$astx="<span class='asterisk'>* </span>";
	$top=$row_height;
	
	if ($formstatus=="unsent") {

		echo"<form name='mailingform' action='".$PHP_SELF."' method='post'>
		<input type='hidden' name='formfirst' value='no'>\r";
		
		echo"<div style='top:".((($header_height-$header_size)/2)+3)."px; left:".($column_1+5)."px; text-align:left; position:absolute;'><span class='header'>".$header_message."</span></div>\r";				
		$top=$header_height;
		
		if ($firstname<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($firstname=="required") { echo $astx; }
			echo"<span class='field'>First Name</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_first' class='input' value='".$v_first."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($middlename<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($middlename=="required") { echo $astx; }
			echo"<span class='field'>Middle Name</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_middle' class='input' value='".$v_middle."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($lastname<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($lastname=="required") { echo $astx; }
			echo"<span class='field'>Last Name</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_last' class='input' value='".$v_last."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($nickname<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($nickname=="required") { echo $astx; }
			echo"<span class='field'>Nickname</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_nick' class='input' value='".$v_nick."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($vcard_type=="choice") {
			echo"<div style='left:".($column_1+5)."px; top:".($top+1)."px; text-align:left; position:absolute;'>\r";
			
			echo"<input type='radio' class='input' name='v_type' value='individual'";
			if ($v_type != "company") { echo"checked"; }
			echo "/><span class='field'>Individual</span>\r";
			
			echo"<input type='radio' class='input' name='v_type' value='company'";
			if ($v_type == "company") { echo"checked"; }
			echo "/><span class='field'>Company</span>\r";
			
			echo"</div>\r";
			$top=$top+$row_height;
		}
		
		if ($company<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($company=="required") { echo $astx; }
			echo"<span class='field'>Company</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_company' class='input' value='".$v_company."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($jobtitle<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($jobtitle=="required") { echo $astx; }
			echo"<span class='field'>Job Title</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_title' class='input' value='".$v_title."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($email<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($email=="required") { echo $astx; }
			echo"<span class='field'>Email</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_email' class='input' value='".$v_email."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($website<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($website=="required") { echo $astx; }
			echo"<span class='field'>Website</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_web' class='input' value='".$v_web."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($address<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($address=="required") { echo $astx; }
			echo"<span class='field'>Street</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_street' class='input' value='".$v_street."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
	
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($address=="required") { echo $astx; }
			echo"<span class='field'>City</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_city' class='input' value='".$v_city."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
			
			$shortWidth=$input_width/3;
			
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($address=="required") { echo $astx; }
			echo"<span class='field'>State</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_state' class='input' value='".$v_state."' maxlength='120' size='".$shortWidth."'/></div>\r";
	
			echo"<div style='right:".$right_align."px; top:". $top ."px; text-align:right; position:absolute;'>\r";
			if ($address=="required") { echo $astx; }
			echo"<span class='field'>Zip</span>\r";
			echo"<input name='v_zip' class='input' value='".$v_zip."' maxlength='120' size='".$shortWidth."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($country<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($country=="required") { echo $astx; }
			echo"<span class='field'>Country</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_country' class='input' value='".$v_country."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($phone<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($phone=="required") { echo $astx; }
			echo"<span class='field'>Phone</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_phone' class='input' value='".$v_phone."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
			
		if ($cell<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($cell=="required") { echo $astx; }
			echo"<span class='field'>Cell</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_cell' class='input' value='".$v_cell."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($fax<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($fax=="required") { echo $astx; }
			echo"<span class='field'>Fax</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_fax' class='input' value='".$v_fax."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
		
		if ($note<>"no") {
			echo"<div style='top:".($top+3)."px; width:".$column_1."px; text-align:right; position:absolute;'>"; if ($note=="required") { echo $astx; }
			echo"<span class='field'>Note</span></div>\r";
			echo"<div style='left:".($column_1+5)."px; top:". $top ."px; text-align:left; position:absolute;'>\r";
			echo"<input name='v_note' class='input' value='".$v_note."' maxlength='120' size='".$input_width."'/></div>\r";
			$top=$top+$row_height;
		}
								
			echo"<div style='left:".($column_1+5)."px; top:".($top+4)."px; text-align:left; position:absolute;'>\r";
			echo"<span class='error'>".$form_error."&nbsp;&nbsp;&nbsp;&nbsp;</span></div>\r";
			echo"<div style='right:".$right_align."px; top:".($top+3)."px; text-align:right; position:absolute;'>";
			echo"<input class='inputtext' type='submit' value='submit' name='submit' /></div>\r";
			$top=$top+$row_height+5;
			
			echo"<div style='left:5px; top:".$top."px; text-align:left; position:absolute;'>\r";
			echo"<span class='asterisk'>*</span> <span class='notes'>".$req_message."</span></div>\r";
			echo"<div style='right:5px; top:".$top."px; text-align:left; position:absolute;'>\r";
			echo"<span class='asterisk'>&nbsp;</span> <span class='notes'>".$conf_message."</span></div>\r";

			echo"</form>";
			
	} // end unsent form status

	
	if ($formstatus=="sent") {

		echo"<div style='top:".(($form_height-$sent_size)/2)."px; width:".$form_width."px; height:".$form_height."px; text-align:center; position:absolute;'>\r";
		echo"<span class='sent'>".$sent_message."</span></div>\r";

	}

echo"</div>";
    
//----------------------------- validate email -----------------------------//

function validateEmail($email) {

    if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) { return false; }
	$email_array = explode("@", $email);
	$local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) { if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) { return false; } }	 
    if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) { return false; }									
		for ($i = 0; $i < sizeof($domain_array); $i++) { if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) { return false;} }		
	}
    return true;	
}

//----------------------------- make vcard -----------------------------//

function makeVcard() {

	global $vcard_content, $v_type, $v_first, $v_middle, $v_last, $v_nick, $v_company, $v_title, $v_email, $v_web, $v_street;
	global $v_city, $v_state, $v_zip, $v_country, $v_phone, $v_cell, $v_fax, $v_note, $formfirst;
	
	if ($v_type=="company") { $vt="WORK"; }
	else { $vt="HOME"; }
		
	$vcard_content  = "BEGIN:VCARD\r";
	$vcard_content .= "VERSION:3.0\r";
	$vcard_content .= "N:".$v_last.";".$v_first.";".$v_middle.";;\r";
	if ($v_type=="company") { $vcard_content .= "FN:".$v_company."\r"; }
	else { $vcard_content .= "FN:".$v_first." ".$v_middle." ".$v_last."\r"; }
	$vcard_content .= "NICKNAME:".$v_nick."\r";
	$vcard_content .= "ORG:".$v_company.";\r";
	$vcard_content .= "TITLE:".$v_title."\r";
	$vcard_content .= "EMAIL;type=INTERNET;type=".$vt.";type=pref:".$v_email."\r";
	$vcard_content .= "TEL;type=".$vt.";type=pref:".$v_phone."\r";
	$vcard_content .= "TEL;type=CELL:".$v_cell."\r";
	$vcard_content .= "TEL;type=".$vt.";type=FAX:".$v_fax."\r";
	$vcard_content .= "item1.ADR;type=".$vt.";type=pref:;;".$v_street.";".$v_city.";".$v_state.";".$v_zip.";".$v_country."\r";
	$vcard_content .= "item1.X-ABADR:us\r";
	$vcard_content .= "item2.URL;type=pref:".$v_web."\r";
	$vcard_content .= "item2.X-ABLabel:_$!<HomePage>!\$\_\r";
	$vcard_content .= "NOTE:".$v_note."\r";
	if ($v_type=="company") { $vcard_content .= "X-ABShowAs:COMPANY\r"; }
	$vcard_content .= "END:VCARD";
}

//----------------------------- send email with vcard attachment -----------------------------//

function sendEmail() {

	global $v_type, $v_first, $v_last, $formfirst;
	global $email_to, $email_from, $email_subject, $vcard_content;
	
	$fileatt_type = "application/octet-stream"; // File Type
	$fileatt_name = $v_first."_".$v_last.".vcf";
	
	$headers = "From: ".$email_from;
	$today = date("l, F j, Y, g:i a");
	
	$message = "<br />--- vCard Sent with vCardPHP ---<br />";
	$message .= $today." PST<br /><br />";
	$message .= $v_first." ".$v_last."<br />";
	
	$data = $vcard_content;
	$data = chunk_split(base64_encode($data));
	
	$semi_rand = md5(time());
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
	
	$headers .= "\nMIME-Version: 1.0\n" .
	"Content-Type: multipart/mixed;\n" .
	" boundary=\"{$mime_boundary}\"";
	
	$message .= "This is a multi-part message in MIME format.\n\n" .
	"--{$mime_boundary}\n" .
	"Content-Type:text/html; charset=\"iso-8859-1\"\n" .
	"Content-Transfer-Encoding: 7bit\n\n" .
	$message . "\n\n";
	$message .= "--{$mime_boundary}\n" .
	"Content-Type: {$fileatt_type};\n" .
	" name=\"{$fileatt_name}\"\n" .
	"Content-Transfer-Encoding: base64\n\n" .
	$data . "\n\n" .
	"--{$mime_boundary}--\n";
	
	@mail($email_to, $email_subject, $message, $headers);

}

?>