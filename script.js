function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
    console.log("yaaaaa");
}

window.onclick = function (event) {
    console.log("yaaaaa");
    if (!event.target.matches('.dropdown-btn')) {
        var dropdownContent = document.getElementById("dropdownContent");
        dropdownContent.style.display = "none";
    }
}