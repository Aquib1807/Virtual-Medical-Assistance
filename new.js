var bannerstatus = 0;
var bannertimer = 3000;
window.onload = function () {
  bannerloop();
};
var startBannerLoop = setInterval(function () {
  bannerloop();
}, bannertimer);

document.getElementById('imgbanbtn-next').onclick = function () {
  bannerloop();
};
document.getElementById('imgbanbtn-prev').onclick = function () {
  bannerloop2();
};

function bannerloop() {
  var banners = [
    document.getElementById('imgban0'),
    document.getElementById('imgban1'),
    document.getElementById('imgban2'),
    document.getElementById('imgban3'),
  ];

  banners.forEach(function (banner, index) {
    banner.style.opacity = '0';
    banner.style.right = '100vw';
    banner.style.zIndex = '500';
  });

  setTimeout(function () {
    banners[bannerstatus].style.right = '0px';
    banners[bannerstatus].style.zIndex = '1000';
  }, 500);

  setTimeout(function () {
    banners[bannerstatus].style.opacity = '1';
  }, 1000);

  bannerstatus = (bannerstatus + 1) % banners.length;
}

function bannerloop2() {
  var banners = [
    document.getElementById('imgban0'),
    document.getElementById('imgban1'),
    document.getElementById('imgban2'),
    document.getElementById('imgban3'),
  ];

  banners.forEach(function (banner, index) {
    banner.style.opacity = '0';
    banner.style.right = '100vw';
    banner.style.zIndex = '500';
  });

  setTimeout(function () {
    banners[bannerstatus].style.right = '0px';
    banners[bannerstatus].style.zIndex = '1000';
  }, 500);

  setTimeout(function () {
    banners[bannerstatus].style.opacity = '1';
  }, 1000);

  bannerstatus = (bannerstatus - 1 + banners.length) % banners.length;
}
