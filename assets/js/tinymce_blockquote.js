( function( $ ) {
    var formData;
    formData = new FormData(form);
    $.ajax({
        url: $(form).attr("action"),
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        timeout: 15000,
        success: function() {
            $(".content-form__cta-item").find("a").trigger("click");
            $(".form-validation-modal").remove();
            return $("body").append(_self.openModelTemplate);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error. textStatus: %s  errorThrown: %s", textStatus, errorThrown);
            return alert("There was an error handling your request please try again.");
        },
        complete: function(jqXHR, textStatus) {
            return console.log("complete. textStatus: %s", textStatus);
        }
    });


    var formData;
    formData = new FormData(form);
    $.ajax({
        url: $(form).attr("action"),
        type: "POST",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        timeout: 15000,
        async: true,
        headers: {
            "cache-control": "no-cache"
        },
        success: function() {
            $(".content-form__cta-item").find("a").trigger("click");
            $(".form-validation-modal").remove();
            return $("body").append(_self.openModelTemplate);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("error. textStatus: %s  errorThrown: %s", textStatus, errorThrown);
            return alert("There was an error handling your request please try again.");
        },
        complete: function(jqXHR, textStatus) {
            return console.log("complete. textStatus: %s", textStatus);
        }
    });





} )( jQuery );