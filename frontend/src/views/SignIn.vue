<template>
  <div class="home">
    <SignInScreen />
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
