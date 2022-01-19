import menuPages from './menus/pages.menu'

export default {
  // main navigation - side menu
  menu: [{
    text: '',
    key: '',
    items: [
      { icon: 'mdi-account-multiple-outline', key: 'menu.employee', text: 'employee', link: '/employee' },
      { icon: 'mdi-calendar-account-outline', key: 'menu.worktime', text: 'worktime', link: '/worktime' }
    ]
  }, {
    text: 'Landing Pages',
    items: [
      { icon: 'mdi-airplane-landing', key: 'menu.landingPage', text: 'Landing Page', link: '/landing' },
      { icon: 'mdi-cash-usd-outline', key: 'menu.pricingPage', text: 'Pricing Page', link: '/landing/pricing' }
    ]
  }, {
    text: 'Pages',
    key: 'menu.pages',
    items: menuPages
  }],

  // footer links
  footer: [{
    text: 'Docs',
    key: 'menu.docs',
    href: 'https://vuetifyjs.com',
    target: '_blank'
  }]
}
