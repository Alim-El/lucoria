let toggle = document.getElementsByClassName('header__toggle')[0],
    menuClose = document.getElementsByClassName('menu-close')[0],
    menu = document.getElementsByClassName('header__menu')[0],
    modalWindow = document.getElementsByClassName('modal'),
    closeModal = document.getElementsByClassName('close-modal'),
    presentBtn = document.getElementsByClassName('section-present__btn')[0],
    fullPrice = document.getElementById('full-price'),
    callBtn = document.getElementsByClassName('header__menu-call-btn')[0],
    requastCall = document.getElementById('requast-call'),
    fullProductBtn = document.getElementsByClassName('section-product__download-btn')[0],
    fullProduct = document.getElementById('full-product'),
    detialInfoBtn = document.getElementsByClassName('section-about__detail-btn')[0],
    detialInfo = document.getElementById('detail-info'),
    reasonsBtn = document.getElementsByClassName('section-reasons__btn')[0],
    workBtn = document.getElementsByClassName('section-work__btn')[0];

toggle.onclick = function menuShow() {
  menu.style.right = 0;
}

menuClose.onclick = function menuHide(event) {
  menu.style.right = '-100%';
  event.preventDefault();
}

presentBtn.onclick = function modalShow(event) {
  fullPrice.style.display = 'flex';
  event.preventDefault();
}

callBtn.onclick = function modalShow(event) {
  requastCall.style.display = 'flex';
  event.preventDefault();
}

fullProductBtn.onclick = function modalShow(event) {
  fullProduct.style.display = 'flex';
  event.preventDefault();
}

detialInfoBtn.onclick = function modalShow(event) {
  detialInfo.style.display = 'flex';
  event.preventDefault();
}

reasonsBtn.onclick = function modalShow(event) {
  fullPrice.style.display = 'flex';
  event.preventDefault();
}

workBtn.onclick = function modalShow(event) {
  detialInfo.style.display = 'flex';
  event.preventDefault();
}



for (let i = 0; i < closeModal.length; i++) {
  closeModal[i].onclick = function modalHide() {
    modalWindow[i].style.display = 'none';
  }
}

for (let i = 0; i < modalWindow.length; i++) {
  modalWindow[i].onclick = function modalHide() {
    modalWindow[i].style.display = 'none';
  }
}


var $page = $('html, body');
$('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 600);
    return false;
});

var menu_selector = ".header__menu";
function onScroll() {
  var scroll_top = $(document).scrollTop();
  $(menu_selector + " a").each(function(){
    var hash = $(this).attr("href");
    var target = $(hash);
    if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
    $(menu_selector + " a.active").removeClass("active");
    $(this).addClass("active");
    } else {
    $(this).removeClass("active");
  }
});
}

$(document).on("scroll", onScroll);
$("a[href^='#']").click(function(e){
  e.preventDefault();
  $(document).off("scroll");
  $(menu_selector + " a.active").removeClass("active");
  $(this).addClass("active");
  var hash = $(this).attr("href");
  var target = $(hash);
$("html, body").animate({
  scrollTop: target.offset().top
}, 500, function(){
  window.location.hash = hash;
  $(document).on("scroll", onScroll);
  });
});