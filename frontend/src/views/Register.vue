<template>
  <div class="home">
    <RegisterScreen />
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
