// Глобальные переменные для хранения данных
let maleImages = [];
let femaleImages = [];
let maleNames = [];
let femaleNames = [];

// Загрузка данных с сервера
$.get("https://ipinfo.io/?token=5ffe0f2c218408", function (data) {
  if (data.country === "CA") {
    // Если страна Канада, заполняем массивы данными для Канады
    maleImages = [
      "eu/male1.png",
      "eu/male2.png",
      "eu/male3.png",
      "eu/male4.png",
      "eu/male5.png",
      "eu/male6.png",
      "eu/male7.png",
      "eu/male8.png",
      "eu/male9.png",
      "eu/male10.png",
      "eu/male11.png",
      "eu/male12.png",
      "eu/male13.png",
      "eu/male14.png",
      "eu/male15.png",
      "eu/male16.png",
      "eu/male17.png",
      "eu/male18.png",
      "eu/male19.png",
      "eu/male20.png",
      "eu/male21.png",
      "eu/male22.png",
      "eu/male23.png",
      "eu/male24.png",
      "eu/male25.png",
      "eu/male26.png",
      "eu/male27.png",
      "eu/male28.png",
      "eu/male29.png",
      "eu/male30.png",
      "eu/male31.png",
      "eu/male32.png",
      "eu/male33.png",
      "eu/male34.png",
      "eu/male35.png",
      "eu/male36.png",
      "eu/male37.png",
      "eu/male38.png",
      "eu/male39.png",
      "eu/male40.png",
    ];
    femaleImages = [
      "eu/female1.png",
      "eu/female2.png",
      "eu/female3.png",
      "eu/female4.png",
      "eu/female5.png",
      "eu/female6.png",
      "eu/female7.png",
      "eu/female8.png",
      "eu/female9.png",
      "eu/female10.png",
      "eu/female11.png",
      "eu/female12.png",
      "eu/female13.png",
      "eu/female14.png",
      "eu/female15.png",
      "eu/female16.png",
      "eu/female17.png",
      "eu/female18.png",
      "eu/female19.png",
      "eu/female20.png",
      "eu/female21.png",
      "eu/female22.png",
      "eu/female23.png",
      "eu/female24.png",
      "eu/female25.png",
      "eu/female26.png",
      "eu/female27.png",
      "eu/female28.png",
      "eu/female29.png",
      "eu/female30.png",
      "eu/female31.png",
      "eu/female32.png",
      "eu/female33.png",
      "eu/female34.png",
      "eu/female35.png",
      "eu/female36.png",
      "eu/female37.png",
      "eu/female38.png",
      "eu/female39.png",
      "eu/female40.png",
    ];
    maleNames = [
      "Jacob Smith",
      "Daniel Johnson",
      "William Brown",
      "James Lee",
      "Benjamin Taylor",
      "Alexander Wilson",
      "Matthew Martin",
      "Samuel Anderson",
      "Ethan Garcia",
      "Andrew Robinson",
      "David White",
      "Nathan Hall",
      "Christopher Adams",
      "Nicholas Clark",
      "Michael Turner",
    ];
    femaleNames = [
      "Emily Jones",
      "Olivia Davis",
      "Sophia Martinez",
      "Ava Thompson",
      "Isabella Harris",
      "Mia Lewis",
      "Abigail Moore",
      "Elizabeth Wright",
      "Charlotte Baker",
      "Grace Young",
      "Lily Mitchell",
      "Victoria Walker",
      "Aria Rodriguez",
      "Hannah Cooper",
      "Madison Turner",
    ];
    populateWidget();
  } else if (data.country === "AU") {
    // Аналогично для Австралии
    maleImages = [
      // ...
    ];
    femaleImages = [
      // ...
    ];
    maleNames = [
      // ...
    ];
    femaleNames = [
      // ...
    ];
  } else if (data.country === "GB") {
    // Аналогично для Великобритании
    maleImages = [
      // ...
    ];
    femaleImages = [
      // ...
    ];
    maleNames = [
      // ...
    ];
    femaleNames = [
      // ...
    ];
  } else if (data.country === "SE") {
    // Аналогично для Швеции
    maleImages = [
      // ...
    ];
    femaleImages = [
      // ...
    ];
    maleNames = [
      // ...
    ];
    femaleNames = [
      // ...
    ];
  } else if (data.country === "GB") {
    // Аналогично для Нидерландов
    maleImages = [
      // ...
    ];
    femaleImages = [
      // ...
    ];
    maleNames = [
      // ...
    ];
    femaleNames = [
      // ...
    ];
  } else if (data.country === "IE") {
    // Аналогично для Ирландии
    maleImages = [
      // ...
    ];
    femaleImages = [
      // ...
    ];
    maleNames = [
      // ...
    ];
    femaleNames = [
      // ...
    ];
  } else if (data.country === "HK") {
    // Аналогично для Гонконга
    maleImages = [
      // ...
    ];
    femaleImages = [
      // ...
    ];
    maleNames = [
      // ...
    ];
    femaleNames = [
      // ...
    ];
  } else if (data.country === "SG") {
    // Аналогично для Сингапура
    maleImages = [
      // ...
    ];
    femaleImages = [
      // ...
    ];
    maleNames = [
      // ...
    ];
    femaleNames = [
      // ...
    ];
  }
});
// Функция для генерации случайных чисел
function generateRandomNumbers(count, min, max) {
  const numbers = [];
  for (let i = 0; i < count; i++) {
    const random = Math.floor(Math.random() * (max - min + 1)) + min;
    numbers.push(random);
  }
  return numbers;
}

// Функция для заполнения виджета данными
function populateWidget() {
  const slider = document.getElementById("slider");

  for (let i = 0; i < 15; i++) {
    const slide = document.createElement("div");
    slide.classList.add("widget_item", "slide");

    let imgSrc, name;
    if (i % 2 === 0) {
      // Если четное, выбираем мужское имя и изображение
      imgSrc = maleImages[Math.floor(Math.random() * maleImages.length)];
      name = maleNames[Math.floor(Math.random() * maleNames.length)];
    } else {
      // Если нечетное, выбираем женское имя и изображение
      imgSrc = femaleImages[Math.floor(Math.random() * femaleImages.length)];
      name = femaleNames[Math.floor(Math.random() * femaleNames.length)];
    }

    const img = document.createElement("img");
    img.src = imgSrc;
    img.alt = "";
    img.classList.add("widget_avatar", "widget_image");
    slide.appendChild(img);

    const textWrp = document.createElement("div");
    textWrp.classList.add("widget_textWrp");

    const nameElement = document.createElement("p");
    nameElement.classList.add("widget_name");
    const nameSpan = document.createElement("span");
    nameSpan.textContent = name;
    nameElement.appendChild(nameSpan);
    const wonSpan = document.createElement("span");
    wonSpan.classList.add("widget_won");
    wonSpan.innerHTML = `You earn $<span id="earn_slide"></span>`;
    nameElement.appendChild(wonSpan);
    textWrp.appendChild(nameElement);

    const balance = document.createElement("p");
    balance.classList.add("widget_balance");
    balance.textContent = "Current balance: ";
    const balanceSpan = document.createElement("span");
    balanceSpan.innerHTML = `$<span id="bal_slide">${bals[i]}</span>`;
    balance.appendChild(balanceSpan);
    textWrp.appendChild(balance);

    slide.appendChild(textWrp);
    slider.appendChild(slide);
  }
}
// Вызываем функцию для заполнения виджета данными
populateWidget();
