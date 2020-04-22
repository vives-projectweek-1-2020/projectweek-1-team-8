<template>
    <div>
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
  color: #42b983;
}

</style>
