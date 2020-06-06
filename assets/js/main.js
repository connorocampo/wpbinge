// toggle responsive menu

function toggleNav() {
  var nav = document.getElementById("nav");
  if (nav.className === "nav-links") {
    nav.className += " responsive";
  } else {
    nav.className = "nav-links";
  }
}

// close dropdownMenu when clicking anywhere on the screen

window.onclick = function (toggle) {
  if (!toggle.target.matches(".toggle-btn")) {
    var dropdowns = document.getElementsByClassName("nav-links");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("responsive")) {
        openDropdown.classList.remove("responsive");
      }
    }
  }
};

// add active class to nav link

let navLink = document.querySelectorAll(".selectedLink");

navLink.forEach((selectedLink) => {
  selectedLink.addEventListener("click", function () {
    navLink.forEach((btn) => btn.classList.remove("active"));
    this.classList.add("active");
  });
});
