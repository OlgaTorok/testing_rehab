// Add the popover tips to the activities
$(function () {
  $('.tip-popover').popover({
    container: 'body'
  })
});

// ???
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
