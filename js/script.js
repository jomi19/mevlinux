"use strict";
(function () {
    function time() {
        //Live clock function
        var time = new Date();

        document.getElementById("date").innerHTML =
            time.toLocaleString('default', {month: 'short'}).slice(0, -1) +
            " " + time.getHours() + ":" + time.getMinutes();
    }

    //Intervall for live clock
    setInterval(time, 500);
}());
