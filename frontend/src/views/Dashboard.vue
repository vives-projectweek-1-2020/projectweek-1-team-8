<template>
  <div class="home">
    <statuspage />
  </div>
</template>

<script>
// @ is an alias to /src
import statuspage from '@/components/statuspage.vue'

export default {
  name: 'dashboard',
  components: {
    statuspage
  }
}
</script>
