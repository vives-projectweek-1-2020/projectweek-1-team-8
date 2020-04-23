<template>
  <div id="demo">
    <h1>test {{title['data']['time']['updated']}} </h1>
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
        .get('https://api.coindesk.com/v1/bpi/currentprice.json')
        .then(response => (this.title = response))
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
