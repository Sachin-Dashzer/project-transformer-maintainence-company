// for word captcha start
var code;
function createCaptcha() {
  //clear the contents of captcha div first
  document.getElementById("captcha").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 120;
  canv.height = 35;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
}
$("#refresh_captcha").click(function () {
  createCaptcha();
});
function validateCaptcha(action) {
  //   debugger
  if (document.getElementById("cpatchaTextBox").value == code) {
    $("#enquiryForm").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox").val("");
    return false;
  }
}

// for word captcha start
var code2;
function createCaptcha2() {
  //clear the contents of captcha div first
  document.getElementById("captcha2").innerHTML = "";
  var charsArray = "0123456789";
  var lengthOtp = 6;
  var captcha2 = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha2.indexOf(charsArray[index]) == -1)
      captcha2.push(charsArray[index]);
    else i--;
  }
  var canv2 = document.createElement("canvas");
  canv2.id = "captcha2";
  canv2.width = 120;
  canv2.height = 35;
  var ctx2 = canv2.getContext("2d");
  ctx2.font = "25px Georgia";
  ctx2.strokeText(captcha2.join(""), 0, 30);
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code2 = captcha2.join("");
  document.getElementById("captcha2").appendChild(canv2); // adds the canvas to the body element
}
$("#refresh_captcha2").click(function () {
  createCaptcha2();
});
function validateCaptcha2() {
  //   debugger
  if (document.getElementById("cpatchaTextBox2").value == code) {
    $("#enquiryForm2").attr("action", action + ".php");
    return true;
  } else {
    event.preventDefault();
    $("#enquiryForm2").attr("action", "");
    alert("Invalid Captcha. try Again");
    createCaptcha();
    $("#cpatchaTextBox2").val("");
    return false;
  }
}

$(function () {
  AOS.init();
  window.addEventListener("load", AOS.refresh);
  $(window).on("scroll", function () {
    $(function () {
      if ($(".stricky").length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
          $(".stricky").addClass("stricky-fixed");
          $(".scroll-to-top").fadeIn(1500);
        } else if ($(this).scrollTop() <= strickyScrollPos) {
          $(".stricky").removeClass("stricky-fixed");
          $(".scroll-to-top").fadeOut(1500);
        }
      }
    });
  });
});
$(function () {
  $(window).on("scroll", function () {
    var scrolled = $(window).scrollTop();
    if (scrolled > 80) $(".go-top").addClass("active");
    if (scrolled < 80) $(".go-top").removeClass("active");
  });
  $(function () {
    $(".go-top").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: "0",
        },
        500
      );
    });
  });
});
$(function () {
  $(".dropDown").click(function () {
    $(this).siblings("li").find("ul").slideUp();
    $(this)
      .siblings("li")
      .find("i")
      .removeClass("fa-chevron-up")
      .addClass("fa-chevron-down");
    $(this).find("ul").slideToggle();
    $(this).find("i").toggleClass("fa-chevron-up");
  });
});
$(function () {
  var a = 0;
  $(window).scroll(function () {
    if ($(".counter")[0]) {
      var oTop = $(".counter").offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter-value").each(function () {
          var $this = $(this),
            countTo = $this.attr("data-count");
          $({
            countNum: $this.text(),
          }).animate(
            {
              countNum: countTo,
            },
            {
              duration: 1000,
              easing: "swing",
              step: function () {
                $this.text(Math.floor(this.countNum));
              },
              complete: function () {
                $this.text(this.countNum);
                //alert('finished');
              },
            }
          );
        });
        a = 1;
      }
    }
  });
});
$(".partner-slider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 5,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 5,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(".certificateSlider").slick({
  dots: true,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});

$(".projectSlider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});

$(".testimonial-slider").slick({
  dots: false,
  infinite: true,
  speed: 500,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: true,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});

$(".gvideoslider").slick({
  dots: false,
  infinite: true,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: false,
  prevArrow:
    "<button type='button' class='slick-prev pull-left'><i class='bi bi-chevron-left'></i></button>",
  nextArrow:
    "<button type='button' class='slick-next pull-right'><i class='bi bi-chevron-right'></i></button>",
  slidesToScroll: 1,
  slidesToShow: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(function () {
  $(".faqHeader").click(function () {
    $(this).parents(".itemFaq").siblings(".itemFaq").removeClass("active");
    $(this).parents(".itemFaq").toggleClass("active");
  });
  $(".mainLeader").click(function () {
    $(this).parents(".itemLeader").addClass("active");
  });
  $(".btnCloseLeader").click(function () {
    $(this).parents(".itemLeader").removeClass("active");
  });
});

document.querySelectorAll(".nav-link").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    const targetElement = document.querySelector(targetId);
    const offset = 90;
    const targetPosition =
      targetElement.getBoundingClientRect().top + window.pageYOffset - offset;

    window.scrollTo({
      top: targetPosition,
      behavior: "smooth",
    });
    const navMenu = document.querySelector("rightMenu");
    if (navMenu.classList.contains("active")) {
      navMenu.classList.remove("active");
    }
  });
});

window.addEventListener("scroll", function () {
  let currentSectionId = "";
  const sections = document.querySelectorAll("section");
  sections.forEach(function (sec) {
    const secTop = sec.offsetTop;
    const secHeight = sec.clientHeight;
    if (pageYOffset >= secTop - secHeight / 3) {
      currentSectionId = sec.getAttribute("id");
    }
  });
  const navLinks = document.querySelectorAll(".nav-link");
  navLinks.forEach(function (link) {
    link.classList.remove("active");
    if (link.getAttribute("href").slice(1) === currentSectionId) {
      link.classList.add("active");
    }
  });
});

$(function () {
  $(".menuPlans ul li").click(function () {
    $(".tabItem").hide();
    $(".menuPlans ul li").removeClass("active");
    $(this).addClass("active");
    var getText = $(this).attr("data-tab");
    var chngData = $(".tabContent").attr("data-content", getText);
    var newTab = $(".tabContent").attr("data-content");
    if (getText == newTab) {
      $("#" + newTab).show();
    }
  });
});

const teamDetail = document.querySelectorAll(".teamDetail");
const teamImg = document.querySelectorAll(".teamImg");

teamImg.forEach((item, i) => {
  console.log("hi");

  item.addEventListener("click", () => {
    document.querySelector(".activeTeam").classList.remove("activeTeam");

    teamDetail[i].classList.add("activeTeam");
  });
});

const membtn = document.querySelectorAll(".membersBox button");
const memContainer = document.querySelectorAll(".membersDetails .mContainer");

membtn.forEach((item, i) => {
  item.addEventListener("click", () => {
    document
      .querySelector(".membersBox .activeBtn")
      .classList.remove("activeBtn");

    item.classList.add("activeBtn");

    document
      .querySelector(".membersDetails .activeContainer")
      .classList.remove("activeContainer");
    memContainer[i].classList.add("activeContainer");
  });
});

document.querySelectorAll('.newNavDrop').forEach((item , i)=>{


    item.addEventListener("click" , ()=>{

          document.querySelectorAll(".newNavBox")[i].classList.toggle("activeSidebarNew");


    })


})
document.querySelectorAll('.projectTabHomes ul li').forEach((item , i)=>{


    item.addEventListener("click" , ()=>{
      
      document.querySelector(".projectTabHomes ul li.active").classList.remove("active");
      item.classList.toggle("active");
      
      document.querySelector(".activetable").classList.remove("activetable");



      document.querySelectorAll(".itemContent")[i].classList.toggle("activetable");
    })


})
document.querySelectorAll('.projectTabHomes2 ul li').forEach((item , i)=>{


    item.addEventListener("click" , ()=>{
      
      document.querySelector(".projectTabHomes2 ul li.active").classList.remove("active");
      item.classList.toggle("active");
      
      document.querySelector(".activetable").classList.remove("activetable");



      document.querySelectorAll(".itemContent2")[i].classList.toggle("activetable");
    })


})



let tableList = document.querySelectorAll(".tableList tr");
let tableList2 = document.querySelectorAll(".tableList2 tr");
let tabledata = 10;
let tableflag1 = false;
let tableflag2 = false;

for(let i = tabledata; i < tableList.length; i++){

  tableList[i].style.display = "none";

}

document.querySelectorAll(".tableExpand").forEach((item, i)=>{

  item.addEventListener("click" , ()=>{

    if(tableflag1 == false){

      for(let i = tabledata; i < tableList.length; i++){
        tableList[i].style.display = "none";      
      }
      
      tableflag1 = true;
      item.innerHTML = "<span>Show More</span>";

    }else{
      
    for(let i = tabledata; i < tableList.length; i++){
      tableList[i].style.display = "table-row";
    }

      tableflag1 = false;
      item.innerHTML = "<span>Show Less</span>";
    }
   
  })

})

for(let i = tabledata; i < tableList2.length; i++){

  tableList2[i].style.display = "none";

}

document.querySelectorAll(".tableExpand2").forEach((item, i)=>{

  item.addEventListener("click" , ()=>{
    if(tableflag2 == false){

      for(let i = tabledata; i < tableList2.length; i++){
        tableList2[i].style.display = "none";      
      }
      
      tableflag2 = true;
      item.innerHTML = "<span>Show More</span>";

    }else{
      
    for(let i = tabledata; i < tableList2.length; i++){
      tableList2[i].style.display = "table-row";
    }

      tableflag2 = false;
      item.innerHTML = "<span>Show Less</span>";
    }
   

  })

})