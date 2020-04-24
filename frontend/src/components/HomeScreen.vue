<template>
    <div class="homescreen">
        <div class="left">
                <img id="logo" src="@/assets/logo.png"/>
                <h2>Prevent long queques</h2>
                <p>With a few clicks in our app can you make a digital <br> reservation to a bussiness you select.
                <br>So you dont lose time waiting in a long queque.</p>
                <p>If you want more information:</p>
                <a href="/About">About us</a>
        </div>
    </div>
</template>

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
.homescreen{
  background-image: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%);
    margin: 20px;
    width: 30%;
    min-width: 240px;
    padding: 80px 10px;
}
#logo{
    width: 50%;
    float: center;

}
</style>
