const sideMenu = document.querySelector("aside");
const menuButton = document.querySelector("#menuButton");
const closeIcon = document.querySelector("#close__icon");
const themeChange = document.querySelector("#theme__toggle");
const lightSwitch = document.querySelector("#lightOption");

menuButton.addEventListener("click", function () {
	sideMenu.style.display = "block";
	console.log("Hello");
});
closeIcon.addEventListener("click", () => {
	sideMenu.style.display = "none";
});

themeChange.addEventListener("click", () => {
	document.body.classList.toggle("dark__theme-variables");
	console.log("get");
	lightSwitch.classList.toggle("active__theme");
	document.querySelector(".theme__chng").classList.toggle("active__theme");
});
