<template>
  <div class="statuspage">
    <img src="@/assets/logo.png"/>
    <h2>Fill in this form to select the right business:</h2>
    <h3>Choose your type business:</h3>
      <select v-model="selectedbusiness">
        <option v-for="business in businesses" v-bind:key="business" v-bind:value="business.value">{{business.text}}</option>
      </select>
    <h3>Choose your city:</h3>
      <select v-model="selectedcity">
        <option v-for="city in cities" v-bind:key="city" v-bind:value="city.value">{{city.text}}</option>
      </select>
    <h3>Choose the right business where you wanna reservate:</h3>
    <select v-model="selectedspecificbusiness" multiple id="specificoptions">
      <option>A</option>
      <option>B</option>
      <option>C</option>
    </select>
    <br>
    <button>Make reservation</button>
  </div>
</template>

<script>
export default {
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
