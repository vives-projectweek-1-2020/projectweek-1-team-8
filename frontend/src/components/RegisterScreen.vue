<template>
<div class="create-user">
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
        </form>
      </div>
      <button type="submit">Register</button>
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
      }
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
        alert('Wrong credentials. Please try again.')
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
input {
    border: 1px solid gray;
    padding: 5px 10px;
    width: 50%;
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

.create-user {
    width: 30%;
    min-width: 240px;
    background-image: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%);
    padding: 80px 10px;
    margin: 20px;
}
hr {
    width: 80%;
}
</style>
