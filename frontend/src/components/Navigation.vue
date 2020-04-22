<template>
    <div>
        <nav class="navbar">
            <a>
                Welcome *username comes here*!
            </a>
            <router-link :to="{ name: 'home' }" >
                Home
            </router-link>
            <router-link :to="{ name: 'signin' }" >
                Sign in
            </router-link>
            <router-link :to="{ name: '#' }">
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

.navbar > *:hover {
    color: lightsalmon;
}
</style>
