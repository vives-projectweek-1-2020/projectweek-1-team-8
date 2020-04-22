<template>
    <div>
        <ul>
            <li>
                <router-link :to="{ name: 'home' }" >
                    Home
                </router-link>
            </li>
            <template v-if="authenticated">
              <li>
                  Hello, {{ user.name }}
              </li>
              <li>
                  <a href= "#" @click.prevent="signOut">
                      Sign out
                  </a>
              </li>
              <li>
              <router-link :to="{ name: 'dashboard' }" >
                      Dashboard
                  </router-link>
              </li>
            </template>
            <template v-else>
              <li>
                <router-link :to="{ name: 'signin' }" >
                  Sign in
                </router-link>
              </li>
            </template>
        </ul>
    </div>
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

.router-link-exact-active {
  color: #42b983;
}

</style>
