<template>
<div>
  <div class="signin-box">
    <img alt="WAITSMART" src="../assets/logo.png">
    <h2>Please sign in to continue</h2>
    <hr>
    <form action="#" @submit.prevent="SignIn">
      <p>Username</p>
      <input id="email" v-model="form.email" type="email" placeholder="Please enter your email." />
      <p>Password</p>
      <input id="password" v-model="form.password" type="password" placeholder="Please enter your password." />
      <br><br>
      <button type="submit">Sign in</button>
      <p class="message" id="alert" v-if="showAlert">
        Something went wrong. Please check your credentials.
        <br>
        If this problem keeps occuring, please contact the site administrator.
      </p>
      <p class="message" id="notice" v-if="showNotice">
        We're trying to sign you in...
      </p>
      <br><br>
      <p>Don't have a waitsmart account yet?</p>
      <router-link :to="{ name: 'register' }" >
        Register now
      </router-link>
    </form>
  </div>
</div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
  name: 'SignInScreen',
  data () {
    return {
      form: {
        email: '',
        password: ''
      },
      showAlert: false,
      showNotice: false
    }
  },
  methods: {
    ...mapActions({
      signIn: 'auth/signIn'
    }),
    SignIn () {
      this.showNotice = true
      this.showAlert = false
      this.signIn(this.form).then(() => {
        this.$router.replace({
          name: 'dashboard'
        })
      }).catch(() => {
        this.showNotice = false
        this.showAlert = true
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.signin-box {
  background-image: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%);
  padding: 80px 10px;
}

input {
  border: 1px solid gray;
  padding: 8px 16px;
  width: 75%;
  max-width: 180px;
}

button {
  background: linear-gradient(to right, #6065D9, #17D7FA);
  color: white;
  border: none;
  border-radius: 50px;
  padding: 10px 20px;
  outline: none;
  cursor: pointer;
}

.signin-box img {
  max-width: 80%;
}

.message {
  border: 1px solid #f5c6cb;
  border-radius: 5px;
  padding: 16px 0px;
}

#notice {
  background-color: #bee5eb;
  color: #0c5460;
}

#alert {
  background-color: #f8d7da;
  color: #721c24;
}

hr {
  width: 80%;
}
</style>
