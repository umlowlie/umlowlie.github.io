import type { NavLink } from '../.vitepress/theme/types'

type NavData = {
  title: string;
  items: NavLink[];
};

export const NAV_DATA: NavData[] = [
  {
    title: 'Эвакуаторы',
    items: [
      {
        title: 'Эвакуатор 1000',
        link: 'https://evakuator1000.com/',
        desc: 'Подача по Донецку и Макеевке в течение 15-28 минут',
        phone: '+7 949 071 7 000',
        icon: './img/evo1000.png',
      },
      {
        title: 'Эвакуатор 24/7',
        link: 'https://evacuatordn.ru/',
        desc: 'Работаем по всей территории ДНР, ЛНР, РФ, Херсонской, Запорожской областей, Крымское побережье, Азовское побережье,',
        phone: '+7 949 303 97 79',
        icon: './img/evac247.png',
      },
      {
        title: 'Услуги эвакуатора, Макеевка',
        link: 'https://vk.com/public223470685',
        desc: 'Услуги эвакуатора по городу и области',
        phone: '+7 949 330 50 18',
        icon: './img/evacmak1.png',
      },
      {
        title: 'Донецкая Служба Эвакуации',
        link: 'http://t.me/evakuator_dnr',
        desc: 'Эвакуатор в г.Донецк, Макеевка, ДНР.',
        phone: '+7 (949) 323-90-80',
        icon: './img/donevac.png',
      },
      {
        title: 'Эвакуатор24',
        link: 'https://www.xn--80aaeh6apllfsj0j.xn--p1ai/',
        desc: 'Находимся в ДНР, Работаем по всей территории РФ',
        phone: '+7 (949) 499-94-96',
        icon: './img/evac24.png',
      },
      {
        title: 'Эвакуатор Донецк',
        link: 'https://vk.com/evakuatordonetsk',
        desc: 'Эвакуатор в Донецке, Макеевке и других городах ДНР, быстрая подача, большой выбор.        ',
        phone: '+7 (949) 505 70 40',
        icon: './img/evacdon1.png',
      },
      {
        title: 'Эвакуатор Манипулятор-Донецк',
        link: 'https://vk.com/id825171246',
        desc: 'Эвакуатор -манипулятор по Донецку и области. Работаем даже с самыми сложными авто',
        phone: '+7(949) 326 85 08',
        icon: './img/evacdonelite.png',
      },
      {
        title: 'Срочный вызов эвакуатора',
        link: 'https://evakuatordnr.ru/',
        desc: 'Донецк и область',
        phone: '+7 949 134 34 99',
        icon: './img/stepanov.png',
      },
      {
        title: 'Эвакуатор Донецк ДНР',
        link: 'https://vk.com/evakuator_dnr',
        desc: 'Услуги эвакуатора по всей территории ДНР!',
        phone: '+7 949 628 76 97',
        icon: './img/evadnr.png',
      },
    ],
  },
];