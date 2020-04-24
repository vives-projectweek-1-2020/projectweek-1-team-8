<template>
  <div class="register">
    <RegisterScreen id="registerbox" />
  </div>
</template>

<script>
// @ is an alias to /src
import RegisterScreen from '@/components/RegisterScreen.vue'

export default {
  name: 'register',
  components: {
    RegisterScreen
  }
}
</script>

<style scoped>
div.register {
  height: calc(100vh - 60px);
  background-image: url('../assets/login-background.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  display: grid;
}

#registerbox {
  margin-top: 5vh;
  margin: 20px;
  min-width: 240px;
  width: 30%;
}

@media screen and (max-width: 775px) {
  #registerbox {
    width: 90%;
  }
}
</style>
