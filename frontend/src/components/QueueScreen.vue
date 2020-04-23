<template>
    <div class="homescreen">
        <div class=buttons>
        <form action="#" @submit.prevent="Queue">
            <button type="newqueque">Join new queque</button>
            <br><br>
            <button type="bussiness1">Apotherker</button>
            <button type="bussiness2">Bakker</button>
        </form>
        </div>
            <h3 id="numberqueue">waiting on place:
            <br>
            <span>3</span></h3>
    </div>
</template>
<script>

export default {
  data () {
    return {
      form: {
        newqueque: '',
        bussiness1: '',
        bussiness2: ''
      }
    }
  }
}
</script>
<style scoped>
span {
    font-size: 60px;
}

#numberqueue {
    width: 180px;
    height: 180px;
    border: 2px solid red;
    border-radius: 50%;
    margin-left: 120px;
}
h3 {
    margin-top: 30px;
}
.homescreen {
    width: 30%;
    min-width: 240px;
    background-image: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%);
    margin: 20px;
    padding: 80px 10px;
}
button {
    padding: 10px;
}
span1 {
    margin-top: 100px;
}
</style>
