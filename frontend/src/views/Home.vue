<template>
  <div class="home">
    <HomeScreen />
    <form action="#" @submit.prevent="Test">
      <button type="submit">Send request</button>
  </form>
  </div>
</template>

<script>
import HomeScreen from '@/components/HomeScreen.vue'
import axios from 'axios'

export default {
  name: 'home',
  components: {
    HomeScreen
  },
  methods: {
    async Test () {
      const response = await axios.get('address')
      console.log(response)
    }
  }
}
</script>
