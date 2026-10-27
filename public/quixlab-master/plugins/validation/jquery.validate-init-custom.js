/* (function ($) {
    "use strict";

    // GLOBAL DEFAULT VALIDATOR
    if ($.fn.validate) {

        $.validator.setDefaults({
            ignore: [],
            errorClass: "invalid-feedback animated fadeInDown",
            errorElement: "div",

            errorPlacement: function (error, element) {
                $(element).closest(".form-group").find("> div").append(error);
            },

            highlight: function (element) {
                $(element)
                    .closest(".form-group")
                    .addClass("is-invalid");
            },

            unhighlight: function (element) {
                $(element)
                    .closest(".form-group")
                    .removeClass("is-invalid");
            }
        });

        // INIT SEMUA FORM DENGAN CLASS .form-valide
        $(".form-valide").each(function () {
            $(this).validate();
        });
    }

})(jQuery);
 */


(function ($) {
    "use strict";

    if (!$.fn.validate) return;

    $.validator.setDefaults({
        ignore: [],
        errorClass: "is-invalid",
        validClass: "is-valid",
        errorElement: "span",

        // SIMPAN PESAN ERROR KE TOOLTIP
        errorPlacement: function (error, element) {
            let message = error.text();

            // input-group (datepicker, icon)
            let target = element.closest(".input-group").length
                ? element.closest(".input-group")
                : element;

            target
                .attr("data-bs-toggle", "tooltip")
                .attr("data-bs-placement", "top")
                .attr("title", message)
                .tooltip("dispose")
                .tooltip();
        },

        highlight: function (element) {
            let $el = $(element);

            let target = $el.closest(".input-group").length
                ? $el.closest(".input-group")
                : $el;

            target.addClass("is-invalid");
        },

        unhighlight: function (element) {
            let $el = $(element);

            let target = $el.closest(".input-group").length
                ? $el.closest(".input-group")
                : $el;

            target
                .removeClass("is-invalid")
                .removeAttr("data-bs-toggle title")
                .tooltip("dispose");
        }
    });

    $(".form-valide").each(function () {
        $(this).validate();
    });

})(jQuery);

/*
$.validator.setDefaults({
    ignore: [],
    errorClass: "invalid-feedback animated fadeInDown d-block",
    errorElement: "div",

    errorPlacement: function (error, element) {
        if (element.closest(".input-group").length) {
            error.insertAfter(element.closest(".input-group"));
        } else {
            error.insertAfter(element);
        }
    },

    highlight: function (element) {
        $(element).addClass("is-invalid");
    },

    unhighlight: function (element) {
        $(element).removeClass("is-invalid");
    }
});
*/
