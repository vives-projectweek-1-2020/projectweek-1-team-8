<template>
  <div class="login-box">
    <img alt="WAITSMART" src="../assets/logo.png">
    <h2>Please log in to continue</h2>
    <form action="#" @submit.prevent="login">
      <p>Username</p>
      <input type="email" placeholder="Please enter your email." />
      <p>Password</p>
      <input type="password" placeholder="Please enter your password." />
      <br><br>
      <button type="submit" @click="login">Log in</button>
    </form>
  </div>
</template>

<script>
export default {
  data () {
    return {
      username: '',
      password: ''
    }
  },
  methods: {
    login () {
      this.$store.dispatch('login', {
        username: this.username,
        password: this.password 
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.login-box {
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

.login-box img {
    max-width: 80%;
}
</style>
