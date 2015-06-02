<?php

session_start();

?>

<!--<script src="../js/jquery-1.9.1.min.js"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="profile.php">Dashboard</a></li>
			<li><a href="#">Stats</a></li>
			<li><a href="#">Trello</a></li>
		</ol>
	</div>
</div>
<style>
.ow-server {
font-size:10px;

}
.knob {
margin-top:45px !important;

}
.vlabel {

position:relative;
left:-72px;
top:-60px;
color:#6AA662;
font-size:11px;
text-align:center;
display: inline; 
width:100px;
margin:0 auto
z-index:10;
}
</style>
 <div class="row">
 
				
								<div class="col-xs-12 ow-server" id="panel1" style="border-style:outset;border-size:5px;">
								<h4 class="page-header">Bundles</h4>
							<input id="vKnob" class="knob" data-width="100"  data-height="100" data-angleOffset="180"  data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="100"><span class="vlabel"><i>Pending</i></span>
														<input id="pKnob" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="100"><span class="vlabel"><i>Provisioning</i></span>
														<input id="followup" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662"data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="100"><span class="vlabel"><i>Followup</i></span>
														<input id="bKnob" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#F51631"data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="100"><span class="vlabel"><i>Overdue</i></span>
						</div><p>
						
<!--							<div class="col-xs-12 ow-server" id="panel2" style="border-style:outset;border-size:5px;">
								<h4 class="page-header">EFM Ground Floor</h4>
										
														<input id="bundles" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="30"><span class="vlabel"><i>Bundles</i></span>
														<input id="credits" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="30"><span class="vlabel"><i>Credits</i></span>
														<input id="orders" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="30"><span class="vlabel"><i>Orders</i></span>
														<input id="messages" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="10"><span class="vlabel"><i>Messages</i></span>
														<input id="eKnob" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#F51631"data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="50"><span class="vlabel"><i>Overdue</i></span>
						</div><p>
													<div class="col-xs-12 ow-server" id="panel2" style="border-style:outset;border-size:5px;">
								<h4 class="page-header">EFM Level 1</h4>
						
														<input id="bundles2" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="30"><span class="vlabel"><i>Bundles</i></span>
														<input id="credits2" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="30"><span class="vlabel"><i>Credits</i></span>
														<input id="orders2" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="30"><span class="vlabel"><i>Orders</i></span>
														<input id="messages2" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="10"><span class="vlabel"><i>Messages</i></span>
														<input id="eKnob2" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#F51631"data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="50"><span class="vlabel"><i>Overdue</i></span>
						</div><p>
														<div class="col-xs-12 ow-server" id="panel2" style="border-style:outset;border-size:5px;">
								<h4 class="page-header">Credit Requests</h4>
						
														<input id="ccredits" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="30"><span class="vlabel"><i>To Action</i></span>
														<input id="cfollowup" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#6AA662" data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="30"><span class="vlabel"><i>Followup</i></span>
														<input id="eKnob3" class="knob" data-width="100"  data-height="100" data-angleOffset="180" data-fgColor="#F51631"data-bgColor="#525252" data-skin="tron" data-thickness=".2" data-readonly="true" data-max="50"><span class="vlabel"><i>Overdue</i></span>
												
						</div> -->
					

 <div class="col-xs-12 ow-server" id="msgpending" style="border-style:outset;border-size:5px;font-size:14px;">
<h4 class="page-header">Pending</h4> 					
					
					
</div>



 <div class="col-xs-12 ow-server" id="msgprov" style="border-style:outset;border-size:5px;font-size:14px;">
<h4 class="page-header">Provisioning</h4> 					
					
					
</div>

 <div class="col-xs-12 ow-server" id="msgfollowup" style="border-style:outset;border-size:5px;font-size:14px;">
<h4 class="page-header">Followup</h4> 					
					
					
</div>






 <div class="col-xs-12 ow-server" id="messages" style="border-style:outset;border-size:5px;font-size:14px;">
<h4 class="page-header">Overdue Cards</h4> 					
					
					
</div>


				

<script src="../plugins/jQuery-Knob/jquery.knob.js"></script>
<script>
var trelloKey = "&key=2b9e7d968e4d873a91fa5b00e879f98f&token=51959027afda5ee368d233ba656989afd458cba8d1acf64fa8289be8c99d3c96";
var trelloAPI = "https://api.trello.com";
var tCall = "";
var counter = 0;
var trelloID = "<?php echo $_SESSION['trello']; ?>";


function dispTrelloCount(t, div, div2){

$.getJSON(trelloAPI + t + trelloKey, function(result){
        $.each(result, function(i, field){
       //   $("#panel").append(counter + field.name + "<p>");   code to display a list of the name property for each item
        if(jQuery.inArray(trelloID, field.idMembers) != -1) {
    console.log("is in array");
	counter = counter + 1;

	var txt = "<a  href=" + field.url + " target='_blank'>" + field.name + "</a><br>";
	$(div2).append(txt);	 


} else {
    console.log("is NOT in array");
}  
        });
$(div).val(counter).trigger("change");
$(div).knob();
counter = 0;

});
}


function dispTrelloOverdue(t, div, d){
$.getJSON(trelloAPI + t + trelloKey, function(result){
        $.each(result, function(i, field){
       //   $("#panel").append(counter + field.name + "<p>");   code to display a list of the name property for each item

        if(jQuery.inArray(trelloID, field.idMembers) != -1) {
    
				 if (field.due < d) {
		 
		 counter = counter + 1;
	var txt = "<a  href=" + field.url + " target='_blank'>" + field.name + "</a><br>";
	$("#messages").append(txt);	 
	}
		 else {
		 
		 }





} else {
    console.log("is NOT in array");
}
        });




         
		 
        
$(div).val(counter).trigger("change");
$(div).knob();
counter = 0;
});
}


$(function() {
 var d1 = new Date();
 var d2 = d1.toISOString(); 

  // https://api.trello.com/1/boards/8qrZcjWO/lists?fields=name&key=2b9e7d968e4d873a91fa5b00e879f98f&token=75e22aeb246e463aa3939c1edf7de73093ab1d970671136d15bdf9e8d61ddf81
// api call to find list id. change boards url
 dispTrelloCount("/1/lists/54b6f314fccc6a04964a722c/cards?lists=open", "#vKnob", "#msgpending");
dispTrelloCount("/1/lists/54b6f31c8465c0b6d6c4971f/cards?lists=open", "#pKnob", "#msgprov");
//dispTrelloCount("/1/lists/54e59f47d51ec973a73cab52/cards?lists=open", "#pickup", "#msgpickup");
dispTrelloCount("/1/lists/54b706594ac01dba83dcd0a6/cards?lists=open", "#followup", "#msgfollowup");
//dispTrelloCount("/1/lists/54ed4a8152f71d6cf5e5fff0/cards?lists=open&fields=name&card_fields=name", "#priority");
//dispTrelloCount("/1/lists/54b6f31fa3e0cbd174387286/cards?lists=open&fields=name&card_fields=name", "#cfollowup");
//dispTrelloCount("/1/lists/54c6e05e4e230c602fdc92ad/cards?lists=open&fields=name&card_fields=name", "#cancelled");
//dispTrelloCount("/1/lists/54d17c1d2912c6468af8062c/cards?lists=open&fields=name&card_fields=name", "#bundles");
//dispTrelloCount("/1/lists/54d19a084cbe5e96e0093298/cards?lists=open&fields=name&card_fields=name", "#credits");
//dispTrelloCount("/1/lists/54d1a2e407d91a62dadb6550/cards?lists=open&fields=name&card_fields=name", "#orders");
//dispTrelloCount("/1/lists/54d19a1edeb8339514a938a5/cards?lists=open&fields=name&card_fields=name", "#messages");
dispTrelloOverdue("/1/boards/UpR18qm7/cards?lists=open&fields=due,name,url,idMembers", "#bKnob", d2);
//dispTrelloOverdue("/1/boards/8qrZcjWO/cards?lists=open&fields=due,name", "#eKnob", d2);
//dispTrelloCount("/1/lists/54d17e4e930f1eee7139160a/cards?lists=open&fields=name&card_fields=name", "#bundles2");
//dispTrelloCount("/1/lists/5535e127200952ab86f8c9cb/cards?lists=open&fields=name&card_fields=name", "#credits2");
//dispTrelloCount("/1/lists/54d2f81d3016114e9a71b25d/cards?lists=open&fields=name&card_fields=name", "#orders2");
//dispTrelloCount("/1/lists/54d2f8024e4d00009c85f531/cards?lists=open&fields=name&card_fields=name", "#messages2");
//dispTrelloOverdue("/1/boards/yu4Tmlx7/cards?lists=open&fields=due,name", "#eKnob2", d2);

//dispTrelloCount("/1/lists/54c73112b83a0684d4e96420/cards?lists=open&fields=name&card_fields=name", "#ccredits");
//dispTrelloCount("/1/lists/54d2ef60b5a1a436537e39f1/cards?lists=open&fields=name&card_fields=name", "#cfollowup");
//dispTrelloOverdue("/1/boards/M1FQ96TL/cards?lists=open&fields=due,name", "#eKnob3", d2);
//  $
});
</script>
 
 
 
 
