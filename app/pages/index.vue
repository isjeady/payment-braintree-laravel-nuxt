<template>
  <div class="container">
    <div v-if="loading" class="text-4xl">
      Loading...
    </div>
    <div v-else class="text-4xl">
      <div
        v-for="product in products"
        :key="product.id"
        class="flex inline-flex gap-4 m-8"
      >
        <Product :product="product" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data () {
    return {
      loading: true,
      products: []
    }
  },
  async mounted () {
    this.loading = true
    const response = await this.$axios.$get('/api/products')
    this.products = response.data
    this.loading = false
  }
}
</script>

<style>
/* Sample `apply` at-rules with Tailwind CSS
.container {
@apply min-h-screen flex justify-center items-center text-center mx-auto;
}
*/
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.title {
  font-family:
    'Quicksand',
    'Source Sans Pro',
    -apple-system,
    BlinkMacSystemFont,
    'Segoe UI',
    Roboto,
    'Helvetica Neue',
    Arial,
    sans-serif;
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>
