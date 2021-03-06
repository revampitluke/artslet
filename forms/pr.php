<?php
session_start();



?>

<!--[if lt IE 10]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<body id="public">
<div id="container" class="col-xs-12">


<form id="form37" name="form37" class="wufoo rightLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" target="_self"
      action="https://artslet.wufoo.eu/forms/qrc023a1i6qbql/#public">
  
<header id="header" class="info">
<h2>Weekly Performance Report</h2>
<div>At Carindale our culture is a mature one, where individuals are interested and take responsibility for their own performance with support from the business.<br />
Your figures need to be filled in after each week has finished, typically on Fridays.  This will enable you to keep track of how you are progressing and what areas you need to ask for support with.<br />
<br />
Note - If you don't complete the document, it will be noted on your file and we will assume that you are acknowledging that you don't need support and know what you need to improve and how to get there.<br />
A copy of each of these reports will be kept on file to assist with your staff appraisals.    <br />
<br />
Remember:<br />
Firstly you must understand what you need to focus on by analyzing the weekly sales sheet for opportunities.<br />
Second, You need to think about 'HOW' you are going to improve or refine a behaviour or skill to impact this.  As you are aware there are many resources you can utilize from asking your colleagues,  Retail Live, Telstra - My Future, Talking to your manager or the business owner.</div>
</header>

<ul>

<li id="foli3" class="notranslate leftHalf      ">
<label class="desc" id="title3" for="Field3">
Customer Advisor
<span id="req_3" class="req">*</span>
</label>
<div>
<select id="Field61" name="Field61" class="field select small"      tabindex="1" >


<?php
if ($_SESSION["role"] == "admin") {
$connection = mysql_connect("labeeto3.cloudapp.net", "artslet", "dale4152");
$db = mysql_select_db("artslet", $connection);
//SQL query to fetch information of registered users and finds user match.
$query = mysql_query("select name from login where active=1", $connection);
$rows = mysql_num_rows($query);
$staff = mysql_fetch_array($query);
while($staff = mysql_fetch_array($query)){
	if (!empty($staff['name'])) {
echo '<option value="' . $staff['name']. '">' . $staff['name']. '</option>';
}

}
mysql_close($connection);
}
else {
echo '<option value="'. $_SESSION["name"]. '">' . $_SESSION["name"]. '</option>';

}
?>


</select>
</div>
</li>
<li id="foli53" class="notranslate rightHalf      ">
<label class="desc" id="title53" for="Field53">
Store
<span id="req_53" class="req">*</span>
</label>
<div>
<select id="Field53" name="Field53" class="field select medium"       tabindex="2" >
<option value="Select Store" selected="selected">
Select Store
</option>
<option value="Ground Floor" >
Ground Floor
</option>
<option value="Level 1" >
Level 1
</option>
</select>
</div>
</li>
<li id="foli55" class="notranslate      ">
<label class="desc" id="title55" for="Field55">
Sales Week Ending Thursday The
<span id="req_55" class="req">*</span>
</label>
<div>
<input id="Field55" name="Field55" type="text" class="field text medium" value="" maxlength="255" tabindex="3" onkeyup=""       required />
</div>
</li>
<li id="foli50" class="notranslate      ">
<label class="desc" id="title50" for="Field50">
My GP per Hour was
<span id="req_50" class="req">*</span>
</label>
<span class="symbol">$</span>
<span>
<input id="Field50" name="Field50" type="text" class="field text currency nospin" value="" size="10" tabindex="4" required />
<label for="Field50">Dollars</label>
</span>
<span class="symbol radix">.</span>
<span class="cents">
<input id="Field50-1" name="Field50-1" type="text" class="field text nospin" value="" size="2" maxlength="2" tabindex="5"       />
<label for="Field50-1">Cents</label>
</span>
<p class="instruct" id="instruct50"><small>Enter the GP per hour from the bonuses sheet here. i.e. $236.23</small></p>
</li>
<li id="foli7" class="notranslate      ">
<label class="desc" id="title7" for="Field7">
KPI - 1.
<span id="req_7" class="req">*</span>
</label>
<div>
<input id="Field7" name="Field7" type="text" class="field text large" value="" maxlength="255" tabindex="6" onkeyup=""       required />
</div>
<p class="instruct" id="instruct7"><small>Type the wording for the 1st KPI from the Sales Performance Sheet here. i.e. "Total Bundles"</small></p>
</li>
<li id="foli8" class="notranslate      ">
<label class="desc " id="title8" for="Field8">
Weighting of KPI's
<span id="req_8" class="req">*</span>
</label>
<div>
<input id="Field8" name="Field8" type="text" class="field text nospin small"  value="" tabindex="7" onkeyup="" required       />
</div>
<p class="instruct " id="instruct8"><small>Type the weighting from the sales performance sheet of the KPI here minus the percentage sign, ie 40</small></p>
</li>
<li id="foli17" class="notranslate      ">
<label class="desc " id="title17" for="Field17">
My Result:<br />
<span id="req_17" class="req">*</span>
</label>
<div>
<input id="Field17" name="Field17" type="text" class="field text nospin small"  value="" tabindex="8" onkeyup="" required       />
</div>
<p class="instruct " id="instruct17"><small>Type the percentage you achieved of the KPI here. i.e 103</small></p>
</li>
<li id="foli10" class="notranslate      ">
<label class="desc" id="title10" for="Field10">
KPI - 2.
<span id="req_10" class="req">*</span>
</label>
<div>
<input id="Field10" name="Field10" type="text" class="field text large" value="" maxlength="255" tabindex="9" onkeyup=""       required />
</div>
<p class="instruct" id="instruct10"><small>Type the wording for the 2nd KPI from the Sales Performance Sheet here. i.e. "Tablets"</small></p>
</li>
<li id="foli11" class="notranslate      ">
<label class="desc " id="title11" for="Field11">
Weighting of KPI's
<span id="req_11" class="req">*</span>
</label>
<div>
<input id="Field11" name="Field11" type="text" class="field text nospin small"  value="" tabindex="10" onkeyup="" required       />
</div>
<p class="instruct " id="instruct11"><small>Type the weighting from the sales performance sheet of the KPI here. i.e. 40</small></p>
</li>
<li id="foli19" class="notranslate      ">
<label class="desc " id="title19" for="Field19">
My Result:<br />
<span id="req_19" class="req">*</span>
</label>
<div>
<input id="Field19" name="Field19" type="text" class="field text nospin small"  value="" tabindex="11" onkeyup="" required       />
</div>
<p class="instruct " id="instruct19"><small>Type the percentage you achieved of the KPI here. i.e 103</small></p>
</li>
<li id="foli12" class="notranslate     ">
<label class="desc" id="title12" for="Field12">
KPI - 3.
<span id="req_12" class="req">*</span>
</label>
<div>
<input id="Field12" name="Field12" type="text" class="field text large" value="" maxlength="255" tabindex="12" onkeyup=""       required />
</div>
<p class="instruct" id="instruct12"><small>Type the wording for the 3rd KPI from the Sales Performance Sheet here. i.e. "Stay Connected"</small></p>
</li>
<li id="foli15" class="notranslate      ">
<label class="desc " id="title15" for="Field15">
Weighting of KPI's
<span id="req_15" class="req">*</span>
</label>
<div>
<input id="Field15" name="Field15" type="text" class="field text nospin small"  value="" tabindex="13" onkeyup="" required       />
</div>
<p class="instruct " id="instruct15"><small>Type the weighting from the sales performance sheet of the KPI here. i.e. 20</small></p>
</li>
<li id="foli18" class="notranslate      ">
<label class="desc " id="title18" for="Field18">
My Result:<br />
<span id="req_18" class="req">*</span>
</label>
<div>
<input id="Field18" name="Field18" type="text" class="field text nospin small"  value="" tabindex="14" onkeyup="" required       />
</div>
<p class="instruct " id="instruct18"><small>Type the percentage you achieved of the KPI here. i.e 103</small></p>
</li>
<li id="foli14" class="notranslate  ">
<label class="desc" id="title14" for="Field14">
KPI - 4.
<span id="req_14" class="req">*</span>
</label>
<div>
<input id="Field14" name="Field14" type="text" class="field text large" value="" maxlength="255" tabindex="15" onkeyup=""       required />
</div>
<p class="instruct" id="instruct14"><small>Type the wording for the 4th KPI from the Sales Performance Sheet here. i.e. "ARO's"</small></p>
</li>
<li id="foli13" class="notranslate     ">
<label class="desc " id="title13" for="Field13">
Weighting of KPI's
<span id="req_13" class="req">*</span>
</label>
<div>
<input id="Field13" name="Field13" type="text" class="field text nospin small"  value="" tabindex="16" onkeyup="" required       />
</div>
<p class="instruct " id="instruct13"><small>Type the weighting from the sales performance sheet of the KPI here. i.e. 30</small></p>
</li>
<li id="foli42" class="notranslate     ">
<label class="desc " id="title42" for="Field42">
My Result:<br />
<span id="req_42" class="req">*</span>
</label>
<div>
<input id="Field42" name="Field42" type="text" class="field text nospin small"  value="" tabindex="17" onkeyup="" required       />
</div>
<p class="instruct " id="instruct42"><small>Type the percentage you achieved of the KPI here. i.e 103</small></p>
</li>
<li id="foli51" class="notranslate      ">
<label class="desc " id="title51" for="Field51">
My NPS Episode Score was<br />
<span id="req_51" class="req">*</span>
</label>
<div>
<input id="Field51" name="Field51" type="text" class="field text nospin small"  value="" tabindex="18" onkeyup="" required       />
</div>
<p class="instruct " id="instruct51"><small>Type your NPS score form the Sales Sheet </small></p>
</li>
<li id="foli57" class="notranslate      ">
<label class="desc " id="title57" for="Field57">
My NPS Interaction Score was<br />
<span id="req_57" class="req">*</span>
</label>
<div>
<input id="Field57" name="Field57" type="text" class="field text nospin small"  value="" tabindex="19" onkeyup="" required       />
</div>
<p class="instruct " id="instruct57"><small>Type your NPS score form the Sales Sheet </small></p>
</li>
<li id="foli48" class="notranslate      ">
<label class="desc " id="title48" for="Field48">
My Total % Achieved of my KPI's was<br />
<span id="req_48" class="req">*</span>
</label>
<div>
<input id="Field48" name="Field48" type="text" class="field text nospin small"  value="" tabindex="20" onkeyup="" required       />
</div>
<p class="instruct " id="instruct48"><small>Type the percentage you achieved overall of your total KPI's from the bonuses sheet.</small></p>
</li>
<li id="foli32" class="notranslate      ">
<label class="desc" id="title32" for="Field32">
My Bonus was
<span id="req_32" class="req">*</span>
</label>
<span class="symbol">$</span>
<span>
<input id="Field32" name="Field32" type="text" class="field text currency nospin" value="" size="10" tabindex="21" required />
<label for="Field32">Dollars</label>
</span>
<span class="symbol radix">.</span>
<span class="cents">
<input id="Field32-1" name="Field32-1" type="text" class="field text nospin" value="" size="2" maxlength="2" tabindex="22"       />
<label for="Field32-1">Cents</label>
</span>
<p class="instruct" id="instruct32"><small>Enter your achieved $$$ bonus here</small></p>
</li>
<li id="foli22"
class="notranslate      "><label class="desc" id="title22" for="Field22">
What I did well 
<span id="req_22" class="req">*</span>
</label>

<div>
<textarea id="Field22"
name="Field22"
class="field textarea large"
spellcheck="true"
rows="10" cols="50"

tabindex="23"
onkeyup=""
      required  ></textarea>

</div>

<p class="instruct" id="instruct22"><small>Type here what you did well for the week and what you tried new that gave you better results.  Ensure you are detailed in your response.</small></p></li>
<li id="foli23"
class="notranslate      "><label class="desc" id="title23" for="Field23">
What areas need my attention
<span id="req_23" class="req">*</span>
</label>

<div>
<textarea id="Field23"
name="Field23"
class="field textarea small"
spellcheck="true"
rows="10" cols="50"

tabindex="24"
onkeyup=""
      required  ></textarea>

</div>

<p class="instruct" id="instruct23"><small>Type here the areas you failed to meet targets.  simple bullet points are fine. i.e. Bundles, ARO's etc...</small></p></li>
<li id="foli24"
class="notranslate      "><label class="desc" id="title24" for="Field24">
What am I going to change and focus on in order to improve this week.
<span id="req_24" class="req">*</span>
</label>

<div>
<textarea id="Field24"
name="Field24"
class="field textarea large"
spellcheck="true"
rows="10" cols="50"

tabindex="25"
onkeyup=""
      required  ></textarea>

</div>

<p class="instruct" id="instruct24"><small>Type here what you are going to change or implement into your sales process to improve your performance.  Please talk to you Sales  Manager if you need assistance. i.e. I missed my Bundles target so I am going to increase the number of ESQ checks I do this week. I will bring it into my Sales Pitch with every customer by asking them a simple question. " Telstra have improved their Internet speeds and packages recently, would you like me to check that you are on the best possible grade of service available to you?"</small></p></li><li id="foli38" class="notranslate section      ">
<section>
<h3 id="title38">
PERFORMANCE MATRIX
</h3>
<div id="instruct38">NPS                                                                                <br />
75+  NPS SCORE =         EXCELLENT <br />
65+  NPS SCORE =         GREAT                           <br />
55+  NPS SCORE = GOOD<br />
45+  NPS SCORE =         NEEDS IMPROVEMENT<br />
NPS SCORE below 45 = UNACCEPTABLE PERFORMANCE<br />
<br />
SALES KPI's<br />
GREATER THAN 120% of KPI's = EXCELLENT<br />
UP TO 120% of KPI's = GREAT<br />
UP TO 100% of KPI's = GOOD<br />
UP TO 75% of KPI's   = NEEDS IMPROVEMENT<br />
Less than 75% of KPI's = UNACCEPTABLE PERFORMANCE<br />
<br />
GROSS PROFIT PER HOUR<br />
GREATER THAN $175 = EXCELLENT<br />
UP TO $175 = GREAT<br />
UP TO $150 = GOOD<br />
UP TO $125 = NEEDS IMPROVEMENT<br />
UNDER $100 = UNACCEPTABLE PERFORMANCE</div>
</section>
</li>
<li id="foli36" class="notranslate       ">
<label class="desc" id="title36" for="Field36">
Gross Profit per Hour
<span id="req_36" class="req">*</span>
</label>
<div>
<select id="Field36" name="Field36" class="field select large"       tabindex="26" >
<option value="Choose bracket" selected="selected">
Choose bracket
</option>
<option value="GREATER THAN $175 = EXCELLENT" >
GREATER THAN $175 = EXCELLENT
</option>
<option value="UP TO $175 = GREAT" >
UP TO $175 = GREAT
</option>
<option value="UP TO $150 = GOOD" >
UP TO $150 = GOOD
</option>
<option value="UP TO $125 = NEEDS IMPROVEMENT" >
UP TO $125 = NEEDS IMPROVEMENT
</option>
<option value="UNDER $100 = UNACCEPTABLE PERFORMANCE" >
UNDER $100 = UNACCEPTABLE PERFORMANCE
</option>
</select>
</div>
</li>
<li id="foli46" class="notranslate       ">
<label class="desc" id="title46" for="Field46">
Sales KPI Results
<span id="req_46" class="req">*</span>
</label>
<div>
<select id="Field46" name="Field46" class="field select large"       tabindex="27" >
<option value="Choose bracket" selected="selected">
Choose bracket
</option>
<option value="GREATER THAN 120% KPI&#039;s = EXCELLENT" >
GREATER THAN 120% KPI's = EXCELLENT
</option>
<option value="100% to 120% KPI&#039;s = GREAT" >
100% to 120% KPI's = GREAT
</option>
<option value="75% to 100% KPI&#039;s = GOOD" >
75% to 100% KPI's = GOOD
</option>
<option value="50% to 75% KPI&#039;s = NEEDS IMPROVEMENT" >
50% to 75% KPI's = NEEDS IMPROVEMENT
</option>
<option value="Less than 50% KPI&#039;s =  UNACCEPTABLE PERFORMANCE" >
Less than 50% KPI's =  UNACCEPTABLE PERFORMANCE
</option>
</select>
</div>
</li>
<li id="foli44" class="notranslate       ">
<label class="desc" id="title44" for="Field44">
Episode NPS Result
<span id="req_44" class="req">*</span>
</label>
<div>
<select id="Field44" name="Field44" class="field select large"       tabindex="28" >
<option value="Choose bracket" selected="selected">
Choose bracket
</option>
<option value="75+ NPS SCORE = EXCELLENT" >
75+ NPS SCORE = EXCELLENT
</option>
<option value="65+ NPS SCORE = GREAT" >
65+ NPS SCORE = GREAT
</option>
<option value="55+ NPS SCORE = GOOD" >
55+ NPS SCORE = GOOD
</option>
<option value="45+ NPS SCORE = NEEDS IMPROVEMENT" >
45+ NPS SCORE = NEEDS IMPROVEMENT
</option>
<option value="NPS SCORE BELOW 45 = UNACEPTABLE PERFORMANCE" >
NPS SCORE BELOW 45 = UNACEPTABLE PERFORMANCE
</option>
</select>
</div>
</li>
<li id="foli59" class="notranslate       ">
<label class="desc" id="title59" for="Field59">
Interaction NPS Result
<span id="req_59" class="req">*</span>
</label>
<div>
<select id="Field59" name="Field59" class="field select large"       tabindex="29" >
<option value="Choose bracket" selected="selected">
Choose bracket
</option>
<option value="75+ NPS SCORE = EXCELLENT" >
75+ NPS SCORE = EXCELLENT
</option>
<option value="65+ NPS SCORE = GREAT" >
65+ NPS SCORE = GREAT
</option>
<option value="55+ NPS SCORE = GOOD" >
55+ NPS SCORE = GOOD
</option>
<option value="45+ NPS SCORE = NEEDS IMPROVEMENT" >
45+ NPS SCORE = NEEDS IMPROVEMENT
</option>
<option value="NPS SCORE BELOW 45 = UNACEPTABLE PERFORMANCE" >
NPS SCORE BELOW 45 = UNACEPTABLE PERFORMANCE
</option>
</select>
</div>
</li>
<li id="foli28" class="date eurodate notranslate    private  " style="display:none">
<label class="desc" id="title28" for="Field28">
Date
<span id="req_28" class="req">*</span>
</label>
<span>
<input id="Field28-1" name="Field28-1" type="text" class="field text" value="16" size="2" maxlength="2" tabindex="28" required       />
<label for="Field28-1">DD</label>
</span>
<span class="symbol">/</span>
<span>
<input id="Field28-2" name="Field28-2" type="text" class="field text" value="02" size="2" maxlength="2" tabindex="29" required />
<label for="Field28-2">MM</label>
</span>
<span class="symbol">/</span>
<span>
 <input id="Field28" name="Field28" type="text" class="field text" value="2015" size="4" maxlength="4" tabindex="30" required />
<label for="Field28">YYYY</label>
</span>
<span id="cal28">
<img id="pick28" class="datepicker" src="images/calendar.png" alt="Pick a date." data-date="2015-16-02" data-date-format="yyyy-dd-mm"/>
</span>
</li> <li class="buttons ">
<div>

                    <input id="saveForm" name="saveForm" class="btTxt submit btn btn-default"
    type="submit" value="Submit"
 /></div>
</li>

<li class="hide">
<label for="comment">Do Not Fill This Out</label>
<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
<input type="hidden" id="idstamp" name="idstamp" value="59HlHj0Jyk2YWXHw6ZCfG+Sf6XdCoDkoBf5/9gpF7uk=" />
</li>
</ul>
</form>
 <div id="prWarning" class="info"><h2>It has passed the due date to submit this performance report. All reports must be submitted by COB Sunday in order to be valid. Please speak directly to John regarding this report so it can be manually entered.</h>
 </div>

</div><!--container-->



<script type="text/javascript">
//hide the warning at the bottom when page is initalised
$("#prWarning").hide();
</script>
<script type="text/javascript">

var role = "<?php echo $_SESSION['role']; ?>";



//fix the date field so it can not be modified
document.getElementById("Field55").readOnly = true;
// check if today is tuesday, wednesday or thursday, store true or false in variable
var d5 = Date.today().is().monday();
var d2 = Date.today().is().wednesday();
var d3 = Date.today().is().thursday();
var d4 = Date.today().is().tuesday();
// if today is thursday, set sales week ending to today, else set it to last thursday
if (d3 === true){
var d1 = Date.today().toString("dd-MM-yyyy"); }
else {
var d1 = Date.today().moveToDayOfWeek(4, -1).toString("dd-MM-yyyy");
};
document.getElementById('Field55').value = d1;
//if it is wednesday, hide the submit option and display overdue warning
	
	if (d2 === true || d4 === true || d5 === true) {
		      
			  $("#saveForm").hide();
			  $("#prWarning").show();
		}
		
	else {	

};

if (role == "admin") {
	$("#saveForm").show();
	$("#prWarning").hide();
	}
	
 
</script>
