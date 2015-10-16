<?php

$sApplicationId = '[ID]';
$sApplicationSecret = '[secret]';
$iLimit = 99;

?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1062290310449149',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<!DOCTYPE html>
<html>
<head>
    <title>Facebook Thought Generator</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <script src="js/jquery.min.js"></script>
     
    <style>
    body {
        padding-top: 40px;
    }
    #main {
        margin-top: 80px;
        text-align: center;
    }
    </style>
</head>
<body>

    <div class="main">
        <div class="fill">
        <div class="container">
            <label>Free will is an illusion</label>
        </div>
    </div>
<script>
// Only works after `FB.init` is called

function myFacebookLogin() {
	str = generate_string();
	//str = "did I break everything?";
  
  FB.login(function(){FB.api('/me/feed', 'post', {message: str});
  }, {scope: 'publish_actions'});

	FB.api('/me', function(response) {
    console.log(JSON.stringify(response));
});

}

function generate_string(){

	var date = new Date();
	
	var phrases = ["I feel like a plastic bag blowing in the wind.", 
	"I'm feeling sassy.", "Politics is Performance Art","Shouldn't the whales be saving us?", 
	"What's the difference between a soup and a sauce? I mean really.", "S/O to all my Day 1 fans", "~Aesthetics~",
	"Commonwealth literature does not exist.", "Let's go Cubs!", "It's almost Friday!" ]; 
	
	var number = Math.floor((Math.random() * phrases.length));
	
	str1 = "Captain's Log: " + date.toDateString();
	var str2 = "\n" + phrases[number];
	
	var string = str1 + str2; 
	
	return string;

}

</script>
<button onclick="myFacebookLogin()">Tell me what to think</button>


    
    
    <!--
    <div id="main" class="container">
        <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" scope="publish_actions, read_custom_friendlists" data-auto-logout-link="true">
        
        </div>
    </div>
    --!>

<!--
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
--!>


</body>
</html>

