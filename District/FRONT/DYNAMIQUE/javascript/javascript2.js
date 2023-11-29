$(document) .ready(function()

{
$.get("header.php",null,function(data)
    {
        $("#header").html(data);
    });

});

$(document) .ready(function()

{
$.get("footer.php",null,function(data)
    {
        $("#footer").html(data);
    });

});