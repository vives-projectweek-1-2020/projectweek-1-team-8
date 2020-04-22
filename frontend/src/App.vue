<template>
  <div id="app">
    <statuspage v-bind="statuspage" />
  </div>
</template>

<script>
import statuspage from './components/statuspage.vue'

export default {
  name: 'App',
  components: {
    statuspage
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
