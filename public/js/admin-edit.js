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