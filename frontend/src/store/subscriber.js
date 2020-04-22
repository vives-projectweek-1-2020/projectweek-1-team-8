import store from '@/store'
import axios from 'axios'

// Add token to Axios-headers and save token in local storage
store.subscribe((mutation) => {
  switch (mutation.type) {
    case 'auth/SET_TOKEN':
      if (mutation.payload) {
        axios.defaults.headers.common.Authorization = `Bearer ${mutation.payload}`
        localStorage.setItem('token', mutation.payload)
      } else {
        axios.defaults.headers.common.Authorization = null
        localStorage.removeItem('token')
      }
      break
  }
})
