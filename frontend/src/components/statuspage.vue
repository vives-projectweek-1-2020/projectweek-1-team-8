<template>
  <div class="statuspage">
    <img src="@/assets/logo.png"/>
    <h2>Fill in this form to select the right business:</h2>
    <h3>Choose your type business:</h3>
    <hr>
    <select id="business" @change="loadbusinesnames($event)">
      <option   v-for="(business, idx) in businesses" :key="idx" v-bind:value="business.value">{{business.typebussiness}}</option>
    </select>
    <h3>Choose your city:</h3>
      <hr id="short-hr">
      <select id="city" @change="loadbusinesnames($event)">
        <option v-for="(city, idx) in cities" :key="idx">{{city.city}}</option>
      </select>
    <h3>Choose the right business where you wanna reservate:</h3>
    <select multiple id="specificoptions">
      <option v-for="(row, idx) in title" :key="idx" v-bind:value="row.value">{{row.name}}</option>
      </select>
      <h3>Select date and time:</h3>
      <hr>
      <label for="timestamp"></label>
      <Datepicker type="datetime" id="timestamp" name="timestamp" format="YYYY-MM-DD H:i:s" width="20%"/>
      <br>
      <input type="submit" value="Make reservation"/>
  </div>
</template>

<script>
import Datepicker from 'vuejs-datetimepicker'
import axios from 'axios'
export default {
  name: 'statuspage',
  components: {
    Datepicker
  },
  data () {
    return {
      businesses: [],
      cities: [],
      title: [],
      type: '',
      city: ''
    }
  },
  created: function () {
    this.loadAll()
  },
  methods: {
    async loadAll () {
      await Promise.all([
        this.loadbusinesses(),
        this.loadcities(),
        this.loadbusinesnames()])
    },
    loadcities () {
      return axios.get('address/get-cities')
        .then(({ data }) => {
          this.cities = data
        })
    },
    loadbusinesses () {
      return axios.get('shops/get-business-types')
        .then(({ data }) => {
          this.businesses = data
        })
    },
    loadbusinesnames () {
      const e = document.getElementById('business')
      this.type = e.options[e.selectedIndex].text
      const e2 = document.getElementById('city')
      this.city = e2.options[e2.selectedIndex].text

      console.log('/shops/get-business-names/' + this.type + '/' + this.city)
      return axios.get('/shops/get-business-names/' + this.type + '/' + this.city)
        .then(({ data }) => {
          this.title = data
        })
    }
  }
}
</script>

<style scoped>
#app {
  background: lightgray;
}
input, option,#city,#business{
  padding: 5px;
}
input{
  margin: 20px 0px 20px 0px;
}
hr{
  border-top: solid darkgray 1px;
  margin-top: -10px;
  width: 16%;
}
#long-hr {
  width: 35%;
}
#short-hr {
  width: 12%;
}
#timestamp.datetime-picker{
  margin: auto;
}
.calender-div[data-v-4bd11526]{
  top: -300px;
}
button{
  background: linear-gradient(to right, #6065D9, #17D7FA);
  color: white;
  border: none;
  border-radius: 50px;
  padding: 10px 20px;
  outline: none;
  cursor: pointer;
}
.statuspage{
  background-image: linear-gradient(253deg,#DDD 0,#FFF 100%);
    margin: 20px;
    min-width: 240px;
    padding: 80px 10px;
}
#specificoptions{
  margin: 0px 0px 20px 0px;
}
</style>
