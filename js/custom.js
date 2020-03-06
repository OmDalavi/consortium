
var membersSwadesh = $("#members-Swadesh");
var membersTREC = $("#members-TREC");
var membersrenderico = $("#members-renderico");
var membersAdVenture = $("#members-AdVenture");
var membersnirmaan = $("#members-nirmaan");
var membersiplauction = $("#members-iplauction");
// var members = $("#members");
var permanentSwadesh = $(".permanent-Swadesh");
var permanentTREC = $(".permanent-TREC");
var permanentrenderico = $(".permanent-renderico");
var permanentAdVenture = $(".permanent-AdVenture");
var permanentnirmaan = $(".permanent-nirmaan");
var permanentiplauction = $(".permanent-iplauction");
var lock = $("#lock:checked");
var temp = $(".temp");
const my = '<div class="temp row g-margin-b-50--xs">'
                            + '<div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">'
                                +'<input type="text" class="form-control s-form-v3__input" placeholder="* Member 1">'
                            +'</div>'
                            +'<div class="col-sm-6">'
                              +'  <input type="text" class="form-control s-form-v3__input" placeholder="* Phone 1">'
                            +'</div>'
                        +'</div>';

function stringvalue(i){
	return '<div class="temp row g-margin-b-50--xs">'
                            + '<div class="col-sm-4 ">'
                                +'<input type="text" class="form-control s-form-v3__input" name="membername'+i+'" placeholder="* Member '+i+'">'
                            +'</div>'
                            +'<div class="col-sm-4">'
                              +'  <input type="text" class="form-control s-form-v3__input" name="memberemail'+i+'" placeholder="* Email '+i+'">'
                            +'</div>'
							+'<div class="col-sm-4">'
                              +'  <input type="text" class="form-control s-form-v3__input" name="memberphone'+i+'" placeholder="* Phone '+i+'">'
                            +'</div>'
                        +'</div>';
}

// alert(members.val());
$(document).ready(function(){

  membersSwadesh.on("change", function(e){

		e.preventDefault();
		$(".temp").remove();
		// permanent.append("<div class='temp'></div>");
		for(var i=2; i<= membersSwadesh.val(); i++){
			permanentSwadesh.append(stringvalue(i));
		}

	});

  membersTREC.on("change", function(e){

		e.preventDefault();
		$(".temp").remove();
		// permanent.append("<div class='temp'></div>");
		for(var i=2; i<= membersTREC.val(); i++){
			permanentTREC.append(stringvalue(i));
		}

	});

  membersrenderico.on("change", function(e){

    e.preventDefault();
    $(".temp").remove();
    // permanent.append("<div class='temp'></div>");
    for(var i=2; i<= membersrenderico.val(); i++){
      permanentrenderico.append(stringvalue(i));
    }

  });

  membersAdVenture.on("change", function(e){

    e.preventDefault();
    $(".temp").remove();
    // permanent.append("<div class='temp'></div>");
    for(var i=2; i<= membersAdVenture.val(); i++){
      permanentAdVenture.append(stringvalue(i));
    }

  });

  membersnirmaan.on("change", function(e){

		e.preventDefault();
		$(".temp").remove();
		// permanent.append("<div class='temp'></div>");
		for(var i=2; i<= membersnirmaan.val(); i++){
			permanentnirmaan.append(stringvalue(i));
		}

	});

  membersiplauction.on("change", function(e){

		e.preventDefault();
		$(".temp").remove();
		// permanent.append("<div class='temp'></div>");
		for(var i=3; i<= membersiplauction.val(); i++){
			permanentiplauction.append(stringvalue(i));
		}

	});




});

function validateData(){

  var team_name = document.getElementById('name').value;
  var team_email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var message = "";

  // checking empty fields



if (team_name == ""){
    message = "Enter your Name";

  }
  else if (team_email == ""){
    message = "Enter Email";

  }
  else if (team_email != ""){
      var emailPat = /^(\".*\"|[A-Za-z]\w*)@(\[\d{1,3}(\.\d{1,3}){3}]|[A-Za-z]\w*(\.[A-Za-z]\w*)+)$/
     var EmailmatchArray = team_email.match(emailPat);

     if (EmailmatchArray == false){
          message += "Your email address seems incorrect. Please try again.";
     }
  }
  else if (password =""){
   message = "Enter password";
 }

 else if (password.length < 8){
   message = "Minimum 8 digit password";
 }


  if(message == ""){
      return true;
  }
  else{

     $("#message").html(message);
     return false;
  }

}
