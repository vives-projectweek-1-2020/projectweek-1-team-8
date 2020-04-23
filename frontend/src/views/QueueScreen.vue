<template>
  <div id="demo">
    <table id='queue' align='center'>
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
        .get('queue/getQueue/'.concat(4))
        .then(response => (this.title = response))
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
#queue {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: lightgray;
}
</style>
