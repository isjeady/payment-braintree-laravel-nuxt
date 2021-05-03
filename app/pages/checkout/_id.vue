<template>
  <div class="flex flex-col mx-auto  max-w-lg p-10 justify-middle">
    <div class="text-2xl">
      Stai acquistando il prodotto con id: {{ $route.params.id }}
    </div>

    <Payment />

    <button
      v-if="!disableBuyButton"
      class="w-full text-center px-4 py-3 bg-green-500 rounded-md shadow-md text-white font-semibold"
      @click.prevent="beforeBuy"
    >
      Procedi con l'acquisto 🎉
    </button>
    <button
      v-else
      class="w-full text-center px-4 py-3 bg-green-300 rounded-md shadow-md text-white font-semibold cursor-not-allowed"
    >
      {{
        loadingPayment ? 'Loading...' : 'Procedi con l\'acquisto 🎉'
      }}
    </button>
  </div>
</template>

<script>
export default {
  data () {
    return {
      disableBuyButton: false,
      loadingPayment: true
    }
  }
}
</script>

<style>

</style>
