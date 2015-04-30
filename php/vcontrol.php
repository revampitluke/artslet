<?php

//----------------------------- MAIN CONTROL  ----------------------------//
//           all main controls for form                                   //
//------------------------------------------------------------------------//

$email_to 		= "Test <test@yoursite.com>";				// email address that vcards will be send to //
$email_from 	= "Test <test@yoursite.com>";				// from email address - can be same as above  //
$email_subject 	= "--- MAILING LIST SIGNUP ---";
$vcard_type 	= "individual";   							// enter "individual" "company" or "choice" (user chooses)

//----------------------------- VCARD FIELDS -----------------------------//
//           "yes" = include field on form                                //
//           "no" =  do not include field on form                         //
//           "required" = include as required field on form               //
//------------------------------------------------------------------------//

$firstname	= "required";
$middlename	= "no";
$lastname	= "required";
$nickname	= "no";

$company	= "no";
$jobtitle	= "no";

$email		= "required";
$website	= "no";
$address	= "yes";
$country	= "no";

$phone		= "yes";
$cell		= "no";
$fax		= "no";
$note		= "no";

//----------------------------- FORM CONTENT -----------------------------//
//           form messages	                                              //
//------------------------------------------------------------------------//

$header_message = "Join Our Mailing List";
$req_message 	= "Required fields";
$conf_message 	= "All information is confidential.";
$sent_message 	= "Thank you. Your information has been sent.";

//----------------------------- FORM DESIGN ------------------------------//
//           choose form colors and sizes                                 //
//------------------------------------------------------------------------//

$form_color="d2e6b0";		// background color of form
$form_width=384;			// form width in pixels
$form_height=294;			// form height in pixels

$header_height=42;			// height of header section
$row_height=28; 			// height of rows

$column_1=94;				// first column width
$input_width=37;			// input width (in characters not pixels)

$header_color="000000";		// header font color
$header_size="16";			// header font size

$text_color="000000";		// text font color
$text_size="13";			// text font size

$input_color="000000";		// input field font color
$input_size="13";			// input field font size

$notes_color="666666";		// notes font color (required fields and confidential note)
$notes_size="12";			// notes font size (required fields and confidential note)

$ast_color="ff0000";		// asterisk font color
$ast_size="14";				// asterisk font size

$error_color="ff0000";		// error message font color
$error_size="13";			// error message font size

$sent_color="000000";		// sent message font color
$sent_size="13";			// sent message font size

$right_align=28;			// right align sumbit button and address zip
							// (measured from right side of form in pixels)
?>