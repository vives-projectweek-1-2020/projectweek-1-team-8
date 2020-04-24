<template>
<div class="register-box">
      <img alt="WAITSMART" src="../assets/logo.png"/>
      <h2>Register</h2>
      <hr>
      <div class="input-create">
        <form action="#" @submit.prevent="Register">
          <div id="firstname">
            <p>Firstname</p>
            <input v-model="form.firstname" type="firstname" placeholder="Please enter your firstname." />
          </div>
          <div id="lastname">
            <p>Lastname</p>
            <input v-model="form.lastname" type="lastname" placeholder="Please enter your lastname." />
          </div>
          <div id="age">
            <p>Age</p>
            <input v-model="form.age" type="age" placeholder="Please enter your age." />
          </div>
          <div id="email">
            <p>Email</p>
            <input v-model="form.email" type="email" placeholder="Please enter your email." />
          </div>
          <br><br>
          <button type="submit">Register</button>
        </form>
        <p class="message" id="alert" v-if="showAlert">
          Something went wrong. Please try again later.
          <br>
          If this problem keeps occuring, please contact the site administrator.
        </p>
        <p class="message" id="notice" v-if="showNotice">
        We're creating your account...
        </p>
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
        password: '',
        firstname: '',
        lastname: '',
        age: ''
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
.register-box {
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
