<template>
  <div class="statuspage">
    <img src="@/assets/logo.png"/>
    <h2>Fill in this form to select the right business:</h2>
    <h3>Choose your type business:</h3>
    <hr>
      <select id="business">
        <option v-for="(business, idx) in businesses" :key="idx" v-bind:value="business.value">{{business.text}}</option>
      </select>
    <h3>Choose your city:</h3>
      <hr id="short-hr">
      <select id="city">
        <option v-for="(city, idx) in cities" :key="idx">{{city.city}}</option>
      </select>
    <h3>Choose the right business where you wanna reservate:</h3>
    <select multiple id="specificoptions">
      <option>A</option>
      <option>B</option>
      <option>C</option>
      <option>D</option>
      <option>E</option>
      <option>F</option>
      </select>
      <h3>Select date and time:</h3>
      <hr>
      <label for="timestamp"></label>
      <Datepicker type="datetime" id="timestamp" name="timestamp" format="YYYY-MM-DD H:i:s" width="20%"/>
      <br>
      <input type="submit" value="Make reservation"/>
      <form action="#" @submit.prevent="Test">
        <button type="submit">Send request</button>
      </form>
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
      businesses: [
        { text: 'Baker', value: 'Baker' },
        { text: 'Doctor', value: 'Doctor' },
        { text: 'Supermarket', value: 'Supermarket' }
      ],
      cities: []
    }
  },
  methods: {
    async Test () {
      await axios.get('address')
        .then(({ data }) => {
          this.cities = data
        })
    }
  }
}
</script>

<style>
button {
    background: linear-gradient(to right, #6065D9, #17D7FA);
    color: white;
    border: none;
    border-radius: 50px;
    padding: 10px 20px;
    outline: none;
    cursor: pointer;
}
.statuspage{
  background-image: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%);
    margin: 20px;
    width: 30%;
    min-width: 240px;
    padding: 80px 10px;
}
#specificoptions{
  margin: 0px 0px 20px 0px;
}
</style>
