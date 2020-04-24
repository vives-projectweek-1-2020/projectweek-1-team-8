<template>
<div>
  <div class="signin-box">
    <img alt="WAITSMART" src="../assets/logo.png">
    <h2>Please log in to continue</h2>
    <hr>
    <form action="#" @submit.prevent="SignIn">
      <p>Username</p>
      <input id="email" v-model="form.email" type="email" placeholder="Please enter your email." />
      <p>Password</p>
      <input id="password" v-model="form.password" type="password" placeholder="Please enter your password." />
      <br><br>
      <button type="submit">Sign in</button>
      <p id="alert" v-if="showAlert">
        Something went wrong. Please check your credentials.
        <br>
        If this problem keeps occuring, please contact the site administrator.
      </p>
      <br><br>
      <p>Don't have a waitsmart account yet?</p><a href="/Register">Register now</a>
    </form>
  </div>
</div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
  data () {
    return {
      form: {
        email: '',
        password: ''
      },
      showAlert: false
    }
  },
  methods: {
    ...mapActions({
      signIn: 'auth/signIn'
    }),
    SignIn () {
      this.signIn(this.form).then(() => {
        this.$router.replace({
          name: 'dashboard'
        })
        this.showAlert = false
      }).catch(() => {
        this.showAlert = true
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.signin-box {
    width: 30%;
    min-width: 240px;
    background-image: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%);
    margin: 20px;
    padding: 80px 10px;
}

input {
    border: 1px solid gray;
    padding: 5px 10px;
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

#alert {
  background-color: #f8d7da;
  color: #721c24;
  border: 1px solid #f5c6cb;
  border-radius: 5px;
  padding: 16px 0px;
}

hr {
  width: 80%;
}
</style>
