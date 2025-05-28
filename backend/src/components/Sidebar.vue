<template>
    <div class=" w-[200px] transition-all bg-blue-700 text-white py-4 px-2">
<router-link :to="{name: 'app.dashboard'}"
             class=" flex items-center p-2 rounded transition-colors hover:bg-black/30 font-light mb-2">
    <span class="mr-2">
      <HomeIcon class="w-4 text-white"/>
    </span>
    <span class="text-white text-sm">Dashboard</span>
</router-link>
<router-link :to="{name: 'app.dashboard'}"
             class="flex items-center py-1 px-3 rounded transition-colors hover:bg-black/30 font-light mb-2">
    <span class="mr-2">
      <ViewListIcon class="w-4 text-white"/>
    </span>
    <span class="text-white text-sm">Products</span>
</router-link>
<router-link to="/app/dashboard" 
             class="flex items-center py-1 px-3 rounded transition-colors hover:bg-black/30 font-light mb-2">
    <span class="mr-2">
      <UsersIcon class="w-4 text-white"/>
    </span>
    <span class="text-white text-sm">Users</span>
</router-link>
<router-link to="/app/dashboard" 
             class="flex items-center py-1 px-3 rounded transition-colors hover:bg-black/30 font-light mb-2">
    <span class="mr-2">
      <ChartBarIcon class="w-4 text-white"/>
    </span>
    <span class="text-white text-sm">Reports</span>
</router-link>

    </div>
</template>


<script setup>

import {HomeIcon, UsersIcon, ViewListIcon, ChartBarIcon} from '@heroicons/vue/solid'
</script>


<style scoped>
</style>