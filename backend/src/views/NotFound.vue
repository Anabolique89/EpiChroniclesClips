<template>
  <div class="flex justify-center items-center min-h-full w-full min-w-full">
    <div class="text-indigo-600 text-5xl px-8 font-bold border-r"> 404 </div>
    <div class="px-8">
        <h1 class="text-5xl font-bold mb-4">Page Not Found</h1>
    
    <p class="text-gray-600">Please check the url in address bar and try again</p>
    <div>
        <router-link :to="{name:'app.dashboard'}"
        class="group relative flex justify-center py-2 px-4 border border-transparent text-sm font-md bg-indigo-700 text-white mt-4 rounded">Go back to homepage</router-link>
        </div>
    </div>
  </div>
</template>

<script setup>

</script>


<style scoped>


</style>