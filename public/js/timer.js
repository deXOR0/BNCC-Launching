function convertDate(myDate) {
    var dateStr = myDate; //returned from mysql timestamp/datetime field
    var a = dateStr.split(" ");
    var d = a[0].split("-");
    var t = a[1].split(":");
    var formatedDate = new Date(d[0], d[1] - 1, d[2], t[0], t[1], t[2]);
    return formatedDate.getTime();
}

const countDownDate = convertDate(
    document.getElementById("schedule").getAttribute("date")
);

//var countDownDate = new Date("Jul 13, 2020 15:37:25").getTime();

var x = setInterval(function () {
    var now = new Date().getTime();

    var distance = countDownDate - now;

    if (distance > 0) {
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("day").innerHTML = days;

        document.getElementById("hour").innerHTML = hours;

        document.getElementById("minute").innerHTML = minutes;

        document.getElementById("second").innerHTML = seconds;
    } else {
        location.reload();
    }
}, 1000);
