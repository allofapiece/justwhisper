(function(){
    var list = $("#list");

    var getListMessages= function(){
        $.ajax({
            url: "http://localhost/justwhisper/?page=loading-messages",
            success: function(res) {
                $("#list").html("");
                for (key in res) {
                    $("#list").append("<div class='well well-sm'><img src='" + res[key][3] + "'> " + res[key][1] + "</div>");
                    //alert(res[key][0]);
                }
            }
        });
    };

    var sendMessage = function(text){
        $.ajax({
            method: "POST",
            url: "http://localhost/justwhisper/?page=send-message",
            data: {
                text: text
            },
            success: function() {
                getListMessages();
            }
        });
    };

    $('html, #message').keydown(function(e){ //отлавливаем нажатие клавиш
        if (e.keyCode == 13) { //если нажали Enter, то true
            sendMessage($("#message").val());
            $("#message").val("");
        }
    });

    $(document).on("click","#send",function () {
        sendMessage($("#message").val());
        $("#message").val("");
    });
    getListMessages();

    setInterval(function(){
        getListMessages();
    }, 1000);
})();/**
 * Created by Listratsenka Stas on 05.03.2018.
 */
