// Add the code here

$(function () {
  $('.tip-popover').popover({
    container: 'body'
  })
});


$(document).ready(function()
{
    $("#new").change(function() {
        if($(this).val() == "Other") {
            $("#new_step").show();
        }
        else {
            $("#new_step").hide();
        }
    });
});
