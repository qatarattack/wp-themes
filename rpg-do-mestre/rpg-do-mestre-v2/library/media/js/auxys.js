jQuery(function() {
    $('input').focusin(function() {
        var value_input = $(this).attr("value");
        $(this).attr("value", "").focusout(function() {
            if ($(this).attr("value") == "") {
                $(this).attr("value", value_input);
            }
        });
    }).focusout(function() {
    });
});