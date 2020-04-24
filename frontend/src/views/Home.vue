<template>
  <div class="homescreen">
    <section class="big-title">
      <div></div>
      <div class="big-title-text">
          <h1>Be smarter than Corona</h1>
      </div>
      <div class="scrolling-icon">
          <a href="#highlights">
              <img src="../assets/homepage-scrolling-icon.png" alt="">
          </a>
      </div>
  </section>
  <section id="highlights" class="highlights">
      <div>
          <h3>Start with it today!</h3>
      </div>
      <div>
        <router-link :to="{ name: 'register' }" >
          <button>Register</button>
        </router-link>
      </div>
    </section>
    <section id="maincontent">
      <p>
        This is a website to track how many people are in or near a particular company at a time.
        These can be self-employed or small professions (convenience store, doctor, pharmacist, ...).
        People can wait at home until it is their turn in line. This prevents long queues and a potential spread of the virus.
      </p>
      <p>
        The shop accepts visitors until it has reached the maximum allowed visitors (can be 1).
        The amount of visitors will be live updated on the app/website. If possible, there will be a display outside too.
        The business owner can control the flow in his business via the same app.
      </p>
      <b>
        More info coming soon
      </b>
    </section>
  </div>
</template>

<style>
* {
    font-family: 'Corbel', sans-serif;
    font-weight: 300;
}

html {
    scroll-behavior: smooth;
}

body {
    background-color: #F0F0F0;
    margin: 0;
    min-width: 260px;
}

a {
  text-decoration: none;
}

/* > Big title */
.big-title {
    height: calc(100vh - 60px);
    min-height: 200px;
    background: url('../assets/homepage-background.jpg') no-repeat;
    background-size: cover;
    background-attachment: fixed;
    text-align: center;
    color: white;
    display: grid;
    justify-items: center;
    align-items: center;
}

.big-title h1 {
  font-size: 48px;
  color: darkslategray;
}

.scrolling-icon {
    height: 20px;
    position: relative;
    animation: scrolldown 5s infinite;
    cursor: pointer;
}

.scrolling-icon img {
    height: 100%;
}

/* > Highlights */
.highlights {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    color: white;
    background-color: #00837E;
}

.highlights router-link {
    display: flex;
    height: auto;
    text-decoration: none;
}

.highlights > * {
    text-align: center;
    padding: 20px 0px;
}

.highlights p {
    padding-left: 20px
}

#maincontent {
    margin: 5%;
}

#maincontent p {
  font-size: 16px;
  text-align: left;
  word-wrap: break-word;
}

button {
    display: block;
    margin: auto;
    margin-bottom: 20px;
    text-transform: uppercase;
    text-align: center;
    cursor: pointer;
    padding: 0.8rem 2rem;
    color: white;
    background: transparent;
    border: 0.07rem solid white;
    border-radius: 3rem;
    outline: none;
}

button:hover {
    transition-duration: 300ms;
    color: #222324;
    background: white;
    border-color: white;
}
</style>
