const hamburger = document.getElementById("hamburger-icon");
const cross = document.getElementById("cross-icon");
const plus = document.getElementById("plus-icon");
const minus = document.getElementById("minus-icon");
const dropdown = document.getElementById("dropdown-items");
const mobileDropdown = document.getElementById("mobile-os-dropdown");

hamburger.addEventListener("click", () => {
    dropdown.style.display = "flex";
    hamburger.style.display = "none";
    cross.style.display = "block";
})

cross.addEventListener("click", () => {
    dropdown.style.display = "none";
    hamburger.style.display = "block";
    cross.style.display = "none";
})

plus.addEventListener("click", () => {
    mobileDropdown.style.display = "flex";
    plus.style.display = "none";
    minus.style.display = "block";
})

minus.addEventListener("click", () => {
    mobileDropdown.style.display = "none";
    plus.style.display = "block";
    minus.style.display = "none";
})