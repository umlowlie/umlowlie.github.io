import type { NavLink } from './docs/.vitepress/theme/types'

type NavData = {
  title: string;
  items: NavLink[];
};

export const NAV_DATA: NavData[] = [
  {
    title: 'Доставка продуктов на дом',
    items: [
      {
        title: 'Манна',
        link: 'https://manna-store.ru/',
        desc: 'Доставка продуктов и еды на дом',
        phone: '969',
        icon: './img/manna.png',
      },
      {
        title: 'МастерТорг',
        link: 'https://mt.delivery/',
        desc: 'МТ Доставка | интернет магазин продуктов и товаров.',
        phone: '377',
        icon: './img/mastertorg.png',
      },
    ],
  },
  {
    title: 'Рестораны — здесь есть всё',
    items: [
      {
        title: 'Базилик',
        link: 'https://basilrest.com/',
        desc: 'Большой выбор еды и напитков, от суши до эксклюзивных блюд',
        phone: '+7 949 001 90 18 • 345',
        icon: './img/basil.png',
      },
      {
        icon: './img/goodcity.png',
        title: 'GoodCity',
        desc: 'Доставка еды из ресторанов сети GoodCity',
        link: 'https://goodcity.com.ru/',
        phone: '606 • +7 949 050 30 50',
      },
      {
        icon: './img/hmeli.png',
        title: 'Хмели Сунели',
        desc: 'Ресторан грузинской кухни',
        link: 'https://hmelisuneli.com/',
        phone: '+7 949 501 22 22 • 344',
      },
      {
        icon: './img/rave.png',
        title: 'Rave',
        desc: 'Премиум суши, Авторская шаурма, хот-доги, сэндвичи, авторские бургеры, паназиатская кухня.',
        link: 'https://ravedelivery.com/',
        phone: '+7 949 507 27 01',
      },
      {
        icon: './img/foodhouse.png',
        title: 'Food house',
        desc: 'Ресторан грузинской кухни',
        link: 'https://vk.com/club223155879',
        phone: '+7 949 507 27 01',
      },
    ],
  },
  {
    title: 'Японская кухня',
    items: [
      {
        icon: './img/pantao.png',
        title: 'Пантао',
        desc: 'Доставка суши и роллов, Макеевка',
        link: 'https://pantao.ru/',
        phone: '310 • +7 949 467 86 59',
      },
      {
        icon: './img/donsushi.png',
        title: 'DonSushi',
        desc: 'Суши, роллы, пицца, шаурма, хот-дог',
        link: 'https://tinypng.com',
        phone: '+7 949 554 13 91',
      },
      {
        icon: './img/goodcity.png',
        title: 'GoodCity',
        desc: 'Доставка еды из ресторанов сети GoodCity',
        link: 'https://goodcity.com.ru/',
        phone: '606 • +7 949 050 30 50',
      },
      {
        title: 'Суши Таун',
        link: 'https://mk.sushi-town.com/',
        desc: 'Суши/роллы. Скидка -15% на самовывоз',
        phone: '+7 949 340 42 13',
        icon: './img/sushitown.png',
      },
      {
        title: 'Wasabi',
        link: 'https://vk.com/wasabi_sushi_makeevka',
        desc: 'Wasabi — это широкий выбор суши, роллов, Вок и пиццы!',
        phone: '+7 949 502 25 67',
        icon: './img/wasabi.png',
      },
      {
        title: 'Ninja Sushi',
        link: 'https://ninja-sushi-dn.ru/',
        desc: 'Японские блюда с бесплатной доставкой от 1500 ₽!',
        phone: '+7 949 381 05 34',
        icon: './img/ninjasushi.png',
      },
      {
        title: 'Avkd Sushi',
        link: 'https://www.avkdsushi.ru/',
        desc: 'Суши, роллы, сеты, маки. Беслатная доставка от 1000р ₽!',
        phone: '+7 949 600 71 17',
        icon: './img/avkd.png',
      },
      {
        title: 'Roll and Rolls',
        link: 'https://rollandrolls.com/',
        desc: 'Суши/Роллы. Доставка: 15 руб за 1км!',
        phone: '+7 949 770 81 11',
        icon: './img/rollrolls.png',
      },
      {
        title: 'Базилик',
        link: 'https://basilrest.com/',
        desc: 'Большой выбор еды и напитков, от суши до эксклюзивных блюд',
        phone: '+7 949 001 90 18 • 345',
        icon: './img/basil.png',
      },
      {
        title: 'Chill Sushi',
        link: 'https://chillsushi.ru/',
        desc: 'Суши и роллы премиум качества. Именинникам скидка -20%',
        phone: '+7 949 500 85 58',
        icon: './img/chilisushi.png',
      },
      {
        title: 'Sushi Life',
        link: 'https://sushi-life.org/',
        desc: 'Японская и Европейская кухня',
        phone: '+7 949 338 11 66',
        icon: './img/sushilife.png',
      },
      {
        title: 'Cуши на',
        link: 'https://vk.com/sushinadon',
        desc: 'Роллы/суши/салаты/японская кухня/гарниры и напитки!',
        phone: '+7 949 124 35 91',
        icon: './img/sushina.png',
      },
      {
        title: 'Sushi Guru',
        link: 'https://vk.com/sushigurumakeyevka',
        desc: 'Роллы/суши, Макеевка, Восточный',
        phone: '+7 949 630 74 04',
        icon: './img/sushiguru.png',
      },
      {
        title: 'Гостол',
        link: 'https://vk.com/gostol',
        desc: 'Роллы/бургеры/лапша',
        phone: '+7 949 498-45-64',
        icon: './img/gostol.png',
      },
    ],
  },
  {
    title: 'Пицца, шаурма, фастфуд',
    items: [
      {
        icon: './img/donsushi.png',
        title: 'DonSushi',
        desc: 'Суши, роллы, пицца, шаурма, хот-дог',
        link: 'https://vk.com/donsushi_dn',
        phone: '+7 949 554 13 91',
      },
      {
        icon: './img/goodcity.png',
        title: 'GoodCity',
        desc: 'Доставка еды из ресторанов сети GoodCity',
        link: 'https://goodcity.com.ru/',
        phone: '606 • +7 949 050 30 50',
      },
      {
        title: 'Wasabi',
        link: 'https://vk.com/wasabi_sushi_makeevka',
        desc: 'Wasabi — это широкий выбор суши, роллов, Вок и пиццы!',
        phone: '+7 949 502 25 67',
        icon: './img/wasabi.png',
      },
      {
        title: 'ПиццаЛюб',
        link: 'https://pizzaliub.ru/',
        desc: 'Любимая пицца в городе с доставкой!',
        phone: '+7 949 704-19-34',
        icon: './img/pizzalove.png',
      },
      {
        title: 'Как дома',
        link: 'https://vk.com/kakdomamakeevka',
        desc: 'Пицца, закуски, салаты, бургеры',
        phone: '+7 949 500-02-10',
        icon: './img/kakdoma.png',
      },
      {
        title: 'Mia Pizza',
        link: 'https://vk.com/public207283210',
        desc: 'Пицца, шаурма',
        phone: '+7 949 467-69-78',
        icon: './img/miapizza.png',
      },
    ],
  },
  {
    title: 'Раки',
    items: [
      {
        icon: './img/donsushi.png',
        title: 'Раки',
        desc: 'Вкусные раки! Бесплатная доставка по городу (Донецку) от 3кг.',
        link: 'https://t.me/ximik2106',
        phone: '+7 949 369 79 91',
      },
    ],
  },
];

