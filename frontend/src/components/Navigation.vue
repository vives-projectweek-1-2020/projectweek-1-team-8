<template>
    <div class="navigationscreen">
        <ul>
            <li>
                <router-link :to="{ name: 'home' }" >
                    Home
                </router-link>
            </li>
            <li>
                <router-link :to="{ name: 'signin' }" >
                    Sign in
                </router-link>
            </li>
            <li>
                <a href ="#">
                    Sign out
                </a>
            </li>
            <li>
                Hello, *username comes here*
            </li>
            <li>
                <router-link :to="{ name: 'dashboard' }" >
                    Dashboard
                </router-link>
            </li>
        </ul>
    </div>
</template>

<style scoped>

.router-link-exact-active {
  color: red;
}
.navigationscreen{
    background-image: linear-gradient(253deg,#3ba5b4 0,#38ba8a 100%);
    list-style-type: none;
    margin: 20px;
    padding: 80px 10px;
    width: 30%;
    min-width: 240px;
}
li{
    display: inline;
    margin: 10px;
}
ul{
    margin: 0px;
    padding-inline-start: 0px;
}

</style>
