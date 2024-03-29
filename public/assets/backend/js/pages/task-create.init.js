$(document).ready(function () {
    "use strict";
    (window.outerRepeater = $(".outer-repeater").repeater({
        defaultValues: { "text-input": "outer-default" },
        show: function () {
            console.log("outer show"), $(this).slideDown();
        },
        hide: function (e) {
            console.log("outer delete"), $(this).slideUp(e);
        },
        repeaters: [
            {
                selector: ".inner-repeater",
                defaultValues: { "inner-text-input": "inner-default" },
                show: function () {
                    console.log("inner show"), $(this).slideDown();
                },
                hide: function (e) {
                    console.log("inner delete"), $(this).slideUp(e);
                },
            },
        ],
    }));

});
