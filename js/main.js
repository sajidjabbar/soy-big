// Pre Loader Js
$(window).on("load", function () {
  console.log("test");
  $("#preloader").fadeOut(1000);
});
// Pre Loader Js

// Single Post Attachments Js
// updateList = function () {
//   var input = document.getElementById("attachments");
//   var output = document.getElementById("fileList");
//   var children = "";
//   for (var i = 0; i < input.files.length; ++i) {
//     children +=
//       "<li>" +
//       input.files.item(i).name +
//       '<span class="remove-list" onclick="return this.parentNode.remove()">X</span>' +
//       "</li>";
//   }
//   output.innerHTML = children;
// };
// Single Post Attachments Js

// Mobile Header Js
$("header .canvas_btn").click(function () {
  $(".mobile_header").addClass("show");
});

$(".mobile_header .cancel").click(function () {
  $(".mobile_header").removeClass("show");
});
// Mobile Header Js

// Header Fixed Js
// $(window).on("scroll", function () {
//   if ($(window).scrollTop() > 150) {
//     $("header#headerTop").addClass("active");
//   } else {
//     $("header#headerTop").removeClass("active");
//   }
// });
// Header Fixed Js

// Menu Active Js
// const CurrentLocation = location.href;
// const menuItem = document.querySelectorAll(".navs-menu li a");
// const menuLength = menuItem.length;
// for (let i = 0; i < menuLength; i++) {
//   if (menuItem[i].href === CurrentLocation) {
//     menuItem[i].className = "active_tab";
//   }
// }
// Menu Active Js

// Go to Top Button Js On Scroll
// $(window).on("scroll", function () {
//   if ($(window).scrollTop() > 800) {
//     $(".go_to_top").addClass("active");
//   } else {
//     $(".go_to_top").removeClass("active");
//   }
// });
// Go to Top Button Js On Scroll
