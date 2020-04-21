let pollDelay = 1000;
let value = 0;
function poll(){
    setTimeout(function(){
        $.ajax({ url: "./test.php?poll="+value, cache: false, success: function(data){
            value = data;
            $("#ob").html(value);
            poll();
        }});
    }, pollDelay);
}

$(document).ready(function(){
    poll();
});