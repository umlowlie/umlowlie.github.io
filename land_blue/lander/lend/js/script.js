const stepsTextWrapper = document.querySelectorAll(".step_itemWrp");
const stepsIllustrations = document.querySelectorAll(".step_img");
const removeActiveClass = () => {
  stepsTextWrapper.forEach((item) => {
    item.classList.remove("active");
  });
  stepsIllustrations.forEach((item) => {
    item.classList.remove("active");
    item.style.transform = "translateY(-100px)";
  });
};
function myFunction() {
  document.getElementById("dropdownList").classList.toggle("show");
}
window.onclick = function (event) {
  if (event.target.classList.value.includes("current")) {
    event.preventDefault();
  }
  if (!event.target.matches(".router_btn")) {
    var dropdowns = document.getElementsByClassName("router_list");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

if (window.innerWidth > 767) {
  $(".step_itemWrp.step1").click(() => {
    removeActiveClass();
    $(".step1").addClass("active");
    $(".step_img.step1").css("transform", "translateY(0px)");
  });
  $(".step_itemWrp.step2").click(() => {
    removeActiveClass();
    $(".step2").addClass("active");
    $(".step_img.step2").css("transform", "translateY(0px)");
  });
  $(".step_itemWrp.step3").click(() => {
    removeActiveClass();
    $(".step3").addClass("active");
    $(".step_img.step3").css("transform", "translateY(0px)");
  });
}

const scrollToForm = document.querySelectorAll(".scrollToForm");
const myform = document.getElementById("main-form");
scrollToForm.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.preventDefault();
    myform.scrollIntoView({
      block: "start",
      behavior: "smooth",
    });
  });
});
const hero_scrollArr = document.querySelectorAll(".hero_scrollArr");
const alerts = document.getElementById("alerts");
hero_scrollArr.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.preventDefault();
    alerts.scrollIntoView({
      block: "center",
      behavior: "smooth",
    });
  });
});
