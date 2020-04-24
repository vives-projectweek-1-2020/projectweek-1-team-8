<template>
  <div class="signin">
      <SignInScreen id="signinbox" />
  </div>
</template>

<script>
// @ is an alias to /src
import SignInScreen from '@/components/SignInScreen.vue'

export default {
  name: 'sign-in',
  components: {
    SignInScreen
  }
}
</script>

<style scoped>
div.signin {
  height: calc(100vh - 60px);
  background: url('../assets/login-background.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  display: grid;
}

#signinbox {
  margin-top: 5vh;
  margin: 20px;
  min-width: 240px;
  width: 30%;
}

@media screen and (max-width: 775px) {
  #signinbox {
    width: 90%;
  }
}
</style>
