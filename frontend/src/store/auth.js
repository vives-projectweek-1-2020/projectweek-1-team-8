import axios from 'axios'

export default {
  namespaced: true,

  getters: {
    authenticated (state) {
      return state.token && state.user
    },

    user (state) {
      return state.user
    }
  },

  state: {
    token: null,
    user: null
  },
  mutations: {
    SET_TOKEN (state, token) {
      state.token = token
    },
    SET_USER (state, data) {
      state.user = data
    }
  },
  actions: {
    // Sign in and return the token
    async signIn ({ dispatch }, credentials) {
      const response = await axios.post('api/auth/signin', credentials)

      return dispatch('attempt', response.data.token)
    },

    // Check if the token is valid
    async attempt ({ commit, state }, token) {
      if (token) {
        commit('SET_TOKEN', token)
      }

      if (!state.token) {
        return
      }

      try {
        const response = await axios.get('api/auth/me') // header from subscriber

        // Store the information of the response
        commit('SET_USER', response.data)
      } catch (e) {
        commit('SET_TOKEN', null)
        commit('SET_USER', null)
        alert('Login failed. Please try again or contact the site-administrator')
      }
    },

    signOut ({ commit }) {
      return axios.post('auth/signout').then(() => {
        commit('SET_TOKEN', null)
        commit('SET_USER', null)
      })
    }
  }
}
