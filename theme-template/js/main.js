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

// followandrew function
// $(document).ready(function () {
//   $(window).scroll(function () {
//     if ($(this).scrollTop() > 1) {
//       $(".page-title").addClass("sticky");
//     } else {
//       $(".page-title").removeClass("sticky");
//     }
//   });
// });

// ADD ACTIVE CLASS TO NAV LINKS WHEN SELECTED

let navLink = document.querySelectorAll('.selectedLink');

navLink.forEach(selectedLink => {
  selectedLink.addEventListener("click", function () {
    navLink.forEach(btn => btn.classList.remove("selected"));
    this.classList.add("selected");
  });
});
