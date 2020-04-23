<template>
  <div class="statuspage">
    <img src="@/assets/logo.png"/>
    <h2>Fill in this form to select the right business:</h2>
    <h3>Choose your type business:</h3>
    <hr>
      <select v-model="selectedbusiness" id="business">
        <option v-for="business in businesses" v-bind:key="business" v-bind:value="business.value">{{business.text}}</option>
      </select>
    <h3>Choose your city:</h3>
      <hr id="short-hr">
      <select v-model="selectedcity" id="city">
        <option v-for="city in cities" v-bind:key="city" v-bind:value="city.value">{{city.text}}</option>
      </select>
    <h3>Choose the right business where you wanna reservate:</h3>
    <select v-model="selectedspecificbusiness" multiple id="specificoptions">
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
  </div>
</template>

<script>
import Datepicker from 'vuejs-datetimepicker'

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
      cities: [
        { text: 'Brugge', value: 'Brugge' },
        { text: 'Gent', value: 'Gent' },
        { text: 'Antwerpen', value: 'Antwerpen' }
      ]
    }
  }
}
</script>

<style>
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
</style>
