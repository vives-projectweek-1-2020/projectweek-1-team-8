<template>
        <ul class="navbar">
            <li>
                <router-link :to="{ name: 'home' }" >
                    Home
                </router-link>
            </li>
            <template v-if="authenticated">
              <li>
              <router-link :to="{ name: 'dashboard' }" >
                    Dashboard
                  </router-link>
              </li>
                <router-link :to="{ name: 'queue' }" >
                    Queue
                  </router-link>
              <li>
                Hello, {{ user.name }}
              </li>
              <li>
                  <a href= "#" @click.prevent="signOut">
                      Sign out
                  </a>
              </li>
            </template>
            <template v-else>
              <li>
                <router-link :to="{ name: 'signin' }" >
                  Sign in
                </router-link>
              </li>
              <li>
                <router-link :to="{ name: 'register' }" >
                  Register
                </router-link>
              </li>
              <li>
                <router-link :to="{ name: 'About' }" >
                  About us
                </router-link>
              </li>
            </template>
        </ul>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'

export default {
  methods: {
    ...mapActions({
      signOutAction: 'auth/signOut'
    }),

    signOut () {
      this.signOutAction().then(() => {
        this.$router.replace({
          name: 'home'
        })
      })
    }
  },

  computed: {
    ...mapGetters({
      authenticated: 'auth/authenticated',
      user: 'auth/user'
    })
  }

}
</script>

<style scoped>

.navbar {
  overflow: hidden;
  display: flex;
  flex-direction: row;
  margin: 0;
  background-color: #444;
}

.navbar li {
  list-style-type: none;
  padding: 20px;
  cursor: pointer;
  color: white
}

.navbar a {
  color: white;
  text-decoration: none;
}

.router-link-exact-active {
  color: lightblue !important;
}

.navbar li:hover {
  background-color: lightseagreen;
}
</style>
