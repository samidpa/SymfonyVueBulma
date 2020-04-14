import Router from 'vue-router'
  
// components
import Product from './pages/Product'
// import notfound from '../components/notFound'
  
export default new Router({
    mode: 'history',
    routes: [
        // {
        //     path: '/',
        //     name: 'shop',
        //     component: Shop
        // },
        // {
        //     path: '/cashier',
        //     name: 'cashier',
        //     component:Cashier
        // },
        {
            path: '/product',
            name: 'prodcut',
            component: Product
        },
        // {
        //     path: '*',       // * => wildcard. Matches all other routes
        //     name: 'notfound',
        //     component: notfound
        // }
    ]
})