<template>
  <div id="queueList">
    <table id='queue-list' align='center'>
      <tr> <th>username</th> <th>number</th> </tr>
      <tr v-for="row in title.data" v-bind:key="row" v-bind:value="row.value">
        <td>{{row.firstname}}</td> <td>{{row.number}}</td>
      </tr>
    </table>
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
  created: function () {
    this.loadQueue()
  },
  methods: {
    loadQueue () {
      axios
        .get('/queue/get-queue/'.concat(4))
        .then(response => (this.title = response))
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#queueList {
    width: 30%;
    min-width: 240px;
    background-image: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%);
    padding: 80px 10px;
    margin: 20px;
}
#queue-list {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid rgb(59, 133, 108);
    text-align: center;
    padding: 8px;
    background-color: none;
}
</style>
