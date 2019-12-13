(function () {
   "use strict";

    var expiryDate = "February 28 2020 08:30:59 GMT+0700";

    function getTimeLeft(endTime) {

        var dateDiff = Date.parse(endTime) - Date.parse(new Date());
        var seconds = Math.floor((dateDiff / 1000) % 60);
        var minutes = Math.floor((dateDiff / 1000 / 60) % 60);
        var hours = Math.floor((dateDiff / (1000 * 60 * 60)) % 24);
        var days = Math.floor(dateDiff / (1000 * 60 * 60 * 24));

        if (dateDiff <= 0) {
            days = "0";
            hours = "0";
            minutes = "0";
            seconds = "0";
        }

        return {
            "total": dateDiff,
            "days": days,
            "hours": hours,
            "minutes": minutes,
            "seconds": seconds
        };

    }

    function counterStart(id, endTime) {

        var counterPlay = document.getElementById(id);
        var daysEle = counterPlay.querySelector(".counting-days");
        var hoursEle = counterPlay.querySelector(".counting-hours");
        var minutesEle = counterPlay.querySelector(".counting-minutes");
        var secondsEle = counterPlay.querySelector(".counting-seconds");

        function timerUpdate() {
            var time = getTimeLeft(endTime);

            daysEle.textContent = time.days;
            hoursEle.textContent = ("0" + time.hours).slice(-2);
            minutesEle.textContent = ("0" + time.minutes).slice(-2);
            secondsEle.textContent = ("0" + time.seconds).slice(-2);

            if (time.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        timerUpdate();
        var timeinterval = setInterval(timerUpdate, 1000);

    }

    counterStart("countdown-display", expiryDate);

})();