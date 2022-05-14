(function ($) {
    "use strict";

    $(".book-now").click(function () {
        window.open("https://hotelesthe.bookinweb.es/es/booking/process/room");
    });

    $("a[rel=external]").attr("target", "_blank");
}(jQuery));
