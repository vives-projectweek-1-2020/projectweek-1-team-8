import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Dashboard from '../views/Dashboard.vue'
import Queue from '../views/Queue.vue'
import QueueList from '../views/QueueList.vue'
import SignIn from '../views/SignIn.vue'
import Register from '../views/Register.vue'
import store from '@/store'
import About from '../views/About.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/About',
    name: 'About',
    component: About
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    // component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/queue',
    name: 'queue',
    component: Queue
  },
  {
    path: '/queueList',
    name: 'queueList',
    component: QueueList
  },
  {
    path: '/dashboard',
    name: 'dashboard',
    component: Dashboard,
    beforeEnter: (to, from, next) => {
      if (!store.getters['auth/authenticated']) {
        return next({
          name: 'signin'
        })
      }

      next()
    }
  },
  {
    path: '/signin',
    name: 'signin',
    component: SignIn
  },
  {
    path: '/register',
    name: 'register',
    component: Register
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
