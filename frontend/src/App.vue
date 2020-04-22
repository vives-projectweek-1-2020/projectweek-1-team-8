<template>
  <div id="app">
    <LoginScreen msg="Please log in to continue"/>
  </div>
</template>

<script>
import axios from 'axios'
import LoginScreen from './components/LoginScreen.vue'

export default {
  name: 'App',
  components: {
    LoginScreen
  }
}
</script>

<style>
body {
  background-color: #f0f0f0;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
