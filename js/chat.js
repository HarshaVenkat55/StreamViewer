function ajaxCall(){
    $.ajax({
        url: "ajax.php",
        type: "post",
		data: {videoId: p },
        success: (function (result){
            $("#div1").html(result);
            console.log(result);
            scrollToBottom()
        })
	})
};

ajaxCall();
function getData(){
	return false;
}

function scrollToBottom(){
	var div = document.getElementById('div1');
	div.scrollTop = div.scrollHeight;
}

document.addEventListener('readystatechange', function() {
	if (document.readyState === "complete") {
      scrollToBottom();
    }
 });

function sendMsg(message){
	if($.trim(message).length != 0){
		$.ajax({
			url: "send.php",
			type: "post",
			data: {message: message, videoId: p},
			success: (function (data){
				$(".msg").val('');
				ajaxCall();
			})
		})
	}
};

function tick(){
	var msg = $(".msg").val();
	sendMsg(msg);
	getData();
	ajaxCall();
}