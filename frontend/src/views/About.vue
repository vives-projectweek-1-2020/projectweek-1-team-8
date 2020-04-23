<template>
  <div class="home">
    <AboutScreen />
  </div>
</template>

<script>
// @ is an alias to /src
import AboutScreen from '@/components/AboutScreen.vue'

export default {
  name: 'about',
  components: {
    AboutScreen
  }
}
</script>
