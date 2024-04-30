import type { NavLink } from '../.vitepress/theme/types'

type NavData = {
  title: string;
  items: NavLink[];
};

export const NAV_DATA: NavData[] = [
  {
    title: 'Пассажирское такси',
    items: [
      {
        title: '1е Республиканское TAXI',
        link: 'https://dnr.taxi/',
        desc: 'От 150 рублей, 23р/км. ',
        phone: '555 • +7 949 521 61 04',
        icon: './img/firstresp.png',
      },
      {
        title: 'Единое такси',
        link: 'https://etaxidnr.ru/',
        desc: 'От 250 рублей посадка +3км. Работают по коммендантскому часу, есть услуга трезый водитель',
        phone: '215 • +7 949 349 43 19',
        icon: './img/edinoetaxi.png',
      },
      {
        title: 'Такси Фаэтон',
        link: 'https://faeton24.ru/',
        desc: 'Такси без межгородних наценок, от 175руб. Есть услуги трансфера до Ростова, буксировки и техпомощи',
        phone: '333 • +7 949 099-50-41',
        icon: './img/faeton.png',
      },
      {
        title: 'Алло Такси',
        link: 'https://taxi666.ru/',
        desc: 'от 180 руб, есть услуги трезвый водитель и техпомощи',
        phone: '666 • +7 949 555-555-0',
        icon: './img/allotaxi.png',
      },
      {
        title: 'Такси 505',
        link: 'https://taxi505.ru/',
        desc: 'от 150 руб, ездят вечером по тарифу х2, — ночью х2,2',
        phone: '505',
        icon: './img/taxi505.png',
      },
    ],
  },
  {
    title: 'Работают ночью',
    items: [
      {
        title: 'Единое такси',
        link: 'https://etaxidnr.ru/',
        desc: 'От 250 рублей посадка +3км. Работают по коммендантскому часу, есть услуга трезый водитель',
        phone: '215 • +7 949 349 43 19',
        icon: './img/edinoetaxi.png',
      },
      {
        title: 'Такси 505',
        link: 'https://taxi505.ru/',
        desc: 'от 150 руб, ездят вечером по тарифу х2, — ночью х2,2',
        phone: '666 • +7 949 555-555-0',
        icon: './img/taxi505.png',
      },
    ],
  },


  {
    title: 'Грузовое такси',
    items: [
      {
        title: 'Такси Фаэтон',
        link: 'https://faeton24.ru/',
        desc: 'Грузовое такси от 1200 рублей',
        phone: '333 • +7 949 099-50-41',
        icon: './img/faeton.png',
      },
      {
        title: 'Алло Такси',
        link: 'https://taxi666.ru/',
        desc: 'Грузовое такси от 1200 рублей, грузчик - от 700 руб/час',
        phone: '666 • +7 949 555-555-0',
        icon: './img/allotaxi.png',
      },
      {
        title: 'Везунчик',
        link: 'https://vk.com/vezunchikoleg',
        desc: 'Пунктуальные водители со стажем, крепкие и аккуратные грузчики.',
        phone: '+7 (949) 380-75-82',
        icon: './img/vezun.png',
      },
      {
        title: 'Грузовое Такси 955',
        link: 'https://gruztaxi-955.ru/',
        desc: 'Грузовое такси с большим спектром услуг. Квартирный переезд, перевозки в РФ из ДНР, перевозка техники, и др.',
        phone: '955 • +7 949 1 955 955',
        icon: './img/955.png',
      },
      {
        title: 'CargoTaxi',
        link: 'https://cargotaxi-dn.ru/',
        desc: 'от 1000 рублей, можно заказать грузчиков, вывоз мусора, переезд в другую страну',
        phone: '+7 949 494 83 65',
        icon: './img/cargo.png',
      },
      {
        title: 'ГрузимВозим',
        link: 'https://vk.com/gruzimvozimmakeevka',
        desc: 'Услуги грузчиков, вывоз мусора, доставка, перевозки бытовой техники, мягкой мебели и многое другое',
        phone: '+7 949 454 63 75',
        icon: './img/gruzimvozim.png',
      },
    ],
  },


  {
    title: 'Помощь водителям',
    items: [
      {
        title: 'Единое такси',
        link: 'https://etaxidnr.ru/',
        desc: 'От 250 рублей посадка +3км. Работают по коммендантскому часу, есть услуга трезый водитель',
        phone: '215 • +7 949 349 43 19',
        icon: './img/edinoetaxi.png',
      },
      {
        title: 'Такси Фаэтон',
        link: 'https://faeton24.ru/',
        desc: 'Такси без межгородних наценок, от 175руб. Есть услуги трансфера до Ростова, буксировки и техпомощи',
        phone: '333 • +7 949 099-50-41',
        icon: './img/faeton.png',
      },
      {
        title: 'Алло Такси',
        link: 'https://taxi666.ru/',
        desc: 'от 180 руб, есть услуги трезвый водитель и техпомощи',
        phone: '666 • +7 949 555-555-0',
        icon: './img/allotaxi.png',
      },
    ],
  },
];

