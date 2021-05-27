function validateEmail() {
    const regex = new RegExp("^((?!\.)[\w-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$");

    if (!$("#email").toString().val().match(regex)) {
        $("#email")[0].setCustomValidity(
            "Please input a valid email"
        );
        $("#email-message").text(
            "Please input a valid email"
        );
    } else {
        $("#email")[0].setCustomValidity("");
        $("#email-message").text("");
    }
}

function validatePassword() {
    const regex = new RegExp("(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,}");
    if (!$("#pass").val().match(regex)) {
        $("#pass")[0].setCustomValidity(
            "Password must contain at least 8 characters, including uppercase and lowercase"
        );
        $("#pass-message").text(
            "Password must contain at least 8 characters, including uppercase and lowercase"
        );
    } else {
        $("#pass")[0].setCustomValidity("");
        $("#pass-message").text("");
    }
}

function confirmPassword() {
    if ($("#pass").val() == $("#confirm-pass").val()) {
        $("#confirm-pass")[0].setCustomValidity("");
        $("#confirmPass-message").text("");
    } else {
        $("#confirm-pass")[0].setCustomValidity("Please match your password");
        $("#confirmPass-message").text("Please match your password");
    }
}

function checkNIM() {
    validateNIM();
    checkNIMtoFYP();
}

function validateNIM() {
    const nim = $("#NIM").val();

    if ((String(nim).startsWith("24") || String(nim).startsWith("23") || String(nim).startsWith("22")) && String(nim).length == 10) {
        $("#NIM")[0].setCustomValidity("");
        $("#NIM-message").text("");
    } else {
        $("#NIM")[0].setCustomValidity("Please input a valid Binusian ID");
        $("#NIM-message").text("Please input a valid Binusian ID");
    }
}

function checkNIMtoFYP() {
    const nim = $("#NIM").val();

    if (
      (String(nim).startsWith("22") || String(nim).startsWith("23")) &&
      String(nim).length == 10
    ) {
      var dropdown = document.getElementById("fyp");
      dropdown.innerHTML =
        "<select> <option value='Non-FYP'>Non-FYP</option> </select>";
    } else if (String(nim).startsWith("24") && String(nim).length == 10) {
      var dropdown = document.getElementById("fyp");
      dropdown.innerHTML =
        "<select> <option value='ABN/AAS'>ABN/AAS</option> <option value='BBN/BAS'>BBN/BAS</option> <option value='CBN/CAS'>CBN/CAS</option> <option value='DBN/DAS'>DBN/DAS</option> <option value='EBN/EAS'>EBN/EAS</option> <option value='FBN/FAS'>FBN/FAS</option></select>";
    }
  }

function validatePhone() {
    const number = $("#phone-number").val();
    if (number.length >= 10 && number.length <=14) {
        $("#phone-number")[0].setCustomValidity("");
        $("#phone-message").text("");
    } else {
        $("#phone-number")[0].setCustomValidity("Please input a valid phone number");
        $("#phone-message").text("Please input a valid phone number");
    }
}

function validateEmail(email) {
    const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email.value.match(regex)) {
        $("#email")[0].setCustomValidity("");
        $("#email-message").text("");
    } else {
        $("#email")[0].setCustomValidity("Please input a valid email");
        $("#email-message").text("Please input a valid email");
    }
};

var major = document.getElementById("major"),
    arr = [
        "Accounting", "Architecture",

        "Business Creation", "Business Law",

        "Chinese", "Civil Engineering", "Computer Engineering",
        "Computer Science", "Computer Science & Mathematics", "Computer Science & Statistics", "Cyber Security",

        "DKV Animation", "DKV Creative Advertising", "DKV New Media",

        "English",

        "Film", "Finance", "Food Technology",

        "Game Application and Technology", "Global Business Marketing",

        "Hotel Management (D4)",

        "Industrial Engineering", "Information Systems",
        "Information Systems Accounting and Auditing", "Interior Design",
        "International Business Management", "International Relations", "Information Systems and Management",

        "Japanese",

        "Management", "Marketing Communication",
        "Mass Communication", "Mobile Application and Technology",

        "Pendidikan Guru Sekolah Dasar", "Psychology",

        "Tourism"
    ];

for (var i = 0; i < arr.length; i++) {
    var option = document.createElement("OPTION"),
        txt = document.createTextNode(arr[i]);
    option.appendChild(txt);
    option.setAttribute("value", arr[i]);
    major.insertBefore(option, major.lastChild);
}


function setRequired() {
    var campusLocation = document.getElementById('campus-select');
    if (campusLocation.value.match('AlamSutera')) {
        document.getElementById("brief-schedule").required = false;
        document.getElementById("brief-schedule").disabled = true;
    } else {
        document.getElementById("brief-schedule").required = false;
        document.getElementById("brief-schedule").disabled = true;
    }
}


// DYNAMIC DROPDOWN CAMPUS LOCATION & YOUR PREFERENCES
var course = {
    Kemanggisan: ['Web Programming', 'UI/UX', 'Mobile Apps', 'Web Design', 'Java Programming'],
    AlamSutera: ['C Programming', 'Java Programming']
}


var briefing = {
    // Kemanggisan: [
    //     schedule.map(function(item){return item.date})
    // ],
    Kemanggisan: ["Closed"],
    AlamSutera: ["Closed"]
}

var campusSelect = document.getElementById('campus-select');
var briefSchedule = document.getElementById('brief-schedule');
var courseSelect = document.getElementById('course');

campusSelect.addEventListener('change', function () {
    var selected_course = course[this.value];
    var selected_briefing = briefing[this.value];
    while (briefSchedule.options.length > 0) {
        briefSchedule.options.remove(0);
    }
    while (courseSelect.options.length > 0) {
        courseSelect.options.remove(0);
    }

    Array.from(selected_course).forEach(function (e1) {
        let option = new Option(e1, e1);
        courseSelect.appendChild(option);
    });

    var fixed_briefing = selected_briefing.toString().split(",");
    var idx = 1;

    Array.from(fixed_briefing).forEach(function (e1) {
        if(e1.localeCompare("Coming soon")==0 || e1.localeCompare("Closed")==0){
            idx = null;
	    let option = new Option(e1, idx);
            briefSchedule.appendChild(option);
        }
        else if(idx >= 17){
            let option = new Option(e1, 18);
            briefSchedule.appendChild(option);
        }
        idx++;
    });
});
