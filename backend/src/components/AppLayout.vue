<template>
  <div class="min-h-full flex bg-gray-200">
    
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
          <router-view></router-view>
        </div>
      </main>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import Sidebar from "./Sidebar.vue";
import Navbar from "./Navbar.vue";

const sidebarOpened = ref(true);

function toggleSidebar() {
  sidebarOpened.value = !sidebarOpened.value;
}

function handleSidebarOpened() {
  // Use innerWidth for more accurate screen width
  sidebarOpened.value = window.innerWidth > 768;
}

onMounted(() => {
  handleSidebarOpened();
  window.addEventListener('resize', handleSidebarOpened);
});

onUnmounted(() => {
  window.removeEventListener('resize', handleSidebarOpened);
});
</script>
