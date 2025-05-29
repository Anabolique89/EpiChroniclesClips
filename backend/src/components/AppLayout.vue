<template>
  <div v-if="currentUser.id" class="min-h-full flex bg-gray-200">
    
    <!-- Sidebar -->
    <div
      :class="[
        'bg-blue-700 transition-all duration-300',
        sidebarOpened ? 'w-[200px] ml-0' : 'ml-[-200px] w-[200px]',
        'md:ml-0 md:w-[200px]' // Always show sidebar on md and up
      ]"
    >
      <Sidebar />
    </div>
    <!-- /Sidebar -->

    <!-- Main Content -->
    <div class="flex-1">
      <Navbar @toggle-sidebar="toggleSidebar" class="h-8 shadow bg-white" />
      
      <main class="p-8">
        <div class="p-4 rounded bg-white">
          <router-view ></router-view>
        </div>
      </main>
    </div>
  </div>
  <div v-else class="min-h-full flex items-center justify-center bg-gray-200">
      <svg
  
    class="mr-2 h-16 w-16 animate-spin -ml-1 text-indigo-700"
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
  >
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path
      class="opacity-75"
      fill="currentColor"
      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
    ></path>
  </svg>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import Sidebar from "./Sidebar.vue";
import Navbar from "./Navbar.vue";
import store from '@/store';
import { computed } from 'vue';


// const {title} = defineProps({
//     title:String
// })

const sidebarOpened = ref(true);
const currentUser = computed(() => store.state.user.data);

function toggleSidebar() {
  sidebarOpened.value = !sidebarOpened.value;
}

function handleSidebarOpened() {
  // Use innerWidth for more accurate screen width
  sidebarOpened.value = window.innerWidth > 768;
}

onMounted(() => {
  store.dispatch('getUser')
  handleSidebarOpened();
  window.addEventListener('resize', handleSidebarOpened);
});

onUnmounted(() => {
  window.removeEventListener('resize', handleSidebarOpened);
});
</script>
