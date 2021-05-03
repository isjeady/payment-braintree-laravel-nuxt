<template>
  <div class="flex flex-col justify-center items-center max-w-sm mx-auto m-8">
    <div
      :style="`background-image: url(${product.img})`"
      class="bg-gray-300 h-64 w-full rounded-lg shadow-md bg-cover bg-center"
    />
    <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden">
      <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">
        {{ product.name }}
      </div>
      <div class="flex items-center justify-between py-2 px-3 bg-gray-400">
        <h1 class="text-gray-800 font-bold ">
          €{{ product.price }}
        </h1>
        <NuxtLink :to="`/checkout/${product.id}`">
          <button class=" bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700">
            BUY
          </button>
        </NuxtLink>
      </div>
      <div class="text-sm">
        {{ product.description }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    product: {
      required: true,
      type: Object
    }
  }
}
</script>

<style>

</style>
