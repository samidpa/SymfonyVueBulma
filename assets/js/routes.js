import Router from 'vue-router'
  
// components
import Home from './pages/Home'
  
export default new Router({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
    ]
})