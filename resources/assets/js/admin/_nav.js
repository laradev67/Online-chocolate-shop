export default {
  items: [
    {
      name: 'Dashboard',
      url: '/dashboard',
      icon: 'icon-speedometer',
      badge: {
        variant: 'primary'
      }
    },
    {
      name: 'Products',
      url: '/products',
      icon: 'fa fa-th-large',
      children: [
        {
          name: 'Add Products',
          url: '/products/add',
          icon: 'fa fa-th-large'
        },
        {
          name: 'Show Products',
          url: '/products/list',
          icon: 'fa fa-th-large'
        }
      ]
    },
    {
      name: 'Category',
      url: '/category',
      icon: 'fa fa-th-large',
      children: [
        {
          name: 'Show Category',
          url: '/category/list',
          icon: 'fa fa-th-large'
        }
      ]
    },
    {
      name: 'Order',
      url: '/orders',
      icon: 'fa fa-users',
      children : [
        {
          name : "List orders",
          url : '/order/list',
          icon : 'fa fa-user'
        }
      ]
    },
    {
      name: 'Langs',
      url: '/langs',
      icon: 'fa fa-language',
      children : [
        {
          name : "List langs",
          url : '/langs/list',
          icon : 'fa fa-globe'
        }
      ]
    }
  ]
}
