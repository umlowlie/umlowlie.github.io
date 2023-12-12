function showPopups(popupId) {
  const overlay = document.getElementById("overlay");
  const popups = document.getElementById(popupId);
  overlay.style.display = "block";
  popups.style.display = "block";
}

function closePopups(popupId) {
  const overlay = document.getElementById("overlay");
  const popups = document.getElementById(popupId);
  overlay.style.display = "none";
  popups.style.display = "none";
}

document.getElementById("button1").addEventListener("click", function () {
  showPopups("popup1");
});

document.getElementById("button2").addEventListener("click", function () {
  showPopups("popup2");
});

document.getElementById("button3").addEventListener("click", function () {
  showPopups("popup3");
});

document.getElementById("overlay").addEventListener("click", function () {
  closePopups("popup1");
  closePopups("popup2");
  closePopups("popup3");
});

document.addEventListener("DOMContentLoaded", function () {
  const gdprPopup = document.getElementById("gdpr-popup");
  const footer = document.getElementById("footer");

  // Функция, которая проверяет, виден ли footer на странице
  function isFooterVisible() {
    const rect = footer.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
  }

  // Проверяем видимость footer при загрузке страницы
  if (isFooterVisible() && !localStorage.getItem("cookiesAccepted")) {
    // Показываем всплывающее окно, если footer видим
    gdprPopup.style.display = "block";
  }

  // Добавляем обработчик события скролла
  window.addEventListener("scroll", function () {
    if (isFooterVisible() && !localStorage.getItem("cookiesAccepted")) {
      // Показываем всплывающее окно, если footer становится видимым во время прокрутки
      gdprPopup.style.display = "block";
    }
  });
});

function acceptCookies() {
  const gdprPopup = document.getElementById("gdpr-popup");

  // Hide the GDPR popup
  gdprPopup.style.display = "none";

  // Set a flag to remember that the user accepted cookies
  localStorage.setItem("cookiesAccepted", "true");
}

function learnMore() {
  // You can add a link to your detailed cookie policy here
  window.location.href = "https://example.com/cookie-policy";
}
