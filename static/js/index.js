
// CHAT BOOT MESSENGER////////////////////////

$(document).ready(function(){

    $(".chat_on").click(function(){
        $(".Layout").toggle();
        $(".chat_on").hide(300);
		
		something();

    });
       $(".chat_close_icon").click(function(){
        $(".Layout").hide();
           $(".chat_on").show(300);
	});
    
});

$(document).ready(function(){
    $("#enter").click(function(){
        $(".Layout").toggle();
        $(".chat_on").hide(300);
    
    something();
    
    });
       $(".chat_close_icon").click(function(){
        $(".Layout").hide();
           $(".chat_on").show(300);
  });
    
});

var something = (function() {
  var executed = false;
  return function() {
    
    if (!executed) {
      
    	executed = true;

      setTimeout(
  		function() 
  		{
  		var BotResponse1 = '<img class="botAvatar" src="https://livestats.xyz/static/img/popcorn.png"><p class="botMsg">' + "Hey , bored at home and confused about what to watch , I am always here for you . I am your personal movie bot/assistant" + '</p><div class="clearfix"></div>';
		$(BotResponse1).appendTo('.chats').hide().fadeIn(1000);
		  }, 1000);
		  
        setTimeout(
  		function() 
  		{
		var BotResponse2 = '<img class="botAvatar" src="https://livestats.xyz/static/img/popcorn.png"><p class="botMsg">' + "You can ask me Most popular, Latest Movies , Trending movies in India , Top rated movies ." + '</p><div class="clearfix"></div>';
		$(BotResponse2).appendTo('.chats').hide().fadeIn(1000);
  		}, 2500);
		
		setTimeout(
      	function() 
      	{
    	var buttons = '<div class="bts"><button type="button" class="btn btn-sm btn-outline-primary btn-rounded waves-effect" id="popular">Most Popular Movies</button>&nbsp;&nbsp;<button type="button" class="btn btn-outline-primary btn-rounded waves-effect btn-sm" id="latest">Latest Movies</button></div>&nbsp;&nbsp;<button type="button" class="btn btn-outline-primary btn-rounded waves-effect btn-sm" id="trending">Trending movies in India</button></div>&nbsp;&nbsp;<button type="button" class="btn btn-outline-primary btn-rounded waves-effect btn-sm" id="ask">Ask about a Movie/Series</button></div>';
		$(buttons).appendTo('.chats').hide().fadeIn(1000);
      	}, 4000);


    }
  };
})();


function setUserResponse(val) {

	var UserResponse = '<img class="userAvatar" src=' + "https://livestats.xyz/static/img/userAvatar.jpg" + '><p class="userMsg">' + val + ' </p><div class="clearfix"></div>';
	$(UserResponse).appendTo('.chats').show('slow');
	$("#mymessage").val('');
	scrollToBottomOfResults();
}

function scrollToBottomOfResults() {
	var terminalResultsDiv = document.getElementById('chats');
	terminalResultsDiv.scrollTop = terminalResultsDiv.scrollHeight;
}

function setBotResponse(val) {

			var BotResponse = '<img class="botAvatar" src="https://livestats.xyz/static/img/popcorn.png"><p class="botMsg">' + val + '</p><div class="clearfix"></div>';
      var buttons = '<div class="bts"><button type="button" class="btn btn-sm btn-outline-primary btn-rounded waves-effect" id="popular">Most Popular Movies</button>&nbsp;&nbsp;<button type="button" class="btn btn-outline-primary btn-rounded waves-effect btn-sm" id="latest">Latest Movies</button></div>&nbsp;&nbsp;<button type="button" class="btn btn-outline-primary btn-rounded waves-effect btn-sm" id="trending">Trending movies in India</button></div>&nbsp;&nbsp;<button type="button" class="btn btn-outline-primary btn-rounded waves-effect btn-sm" id="ask">Ask about a Movie/Series</button></div>';
			$(BotResponse).appendTo('.chats').hide().fadeIn(1000);
      $(buttons).appendTo('.chats').hide().fadeIn(1000);
			scrollToBottomOfResults();
}



