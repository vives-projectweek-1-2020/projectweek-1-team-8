<template>
    <div>
        <nav class="navbar"
            <a>
                Welcome *username comes here*!
            </a>
            <router-link :to="{ name: 'home' }" >
                Home
            </router-link>
            <router-link :to="{ name: 'signin' }" >
                Sign in
            </router-link>
            <router-link :to="{ name: '#'}">
                Sign out
            </router-link>
            <router-link :to="{ name: 'dashboard' }" >
                Dashboard
            </router-link>
            <router-link :to="{ name: 'queue' }" >
                Queue
            </router-link>
        </nav>
    </div>
</template>

<style scoped>

.router-link-exact-active {
  color: #42b983;
}
.navbar {
    overflow: hidden;
    background-color: #303030;
}
.navbar > * {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}
.navbar > *:hover {
    color: lightsalmon;
}
</style>
