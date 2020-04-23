<template>
  <div id="demo">
    <h1>hello  {{title['data'].get(1)}} </h1>

    <form action="#" @submit.prevent="test">
      <button type="submit">test</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Queue',
  data: () => ({
    title: 'test'
  }),
  head: {
    title () {
      return {
        inner: this.title
      }
    }
  },
  methods: {
    test () {
      axios
        .get('http://localhost:8000/queue')
        .then(response => (this.title = response))
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
