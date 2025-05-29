<template>
 <header class="flex justify-between items-center h-14 p-3 shadow bg-white">
    <button @click="emit('toggle-sidebar')" class="flex items-center justify-center w-8 h-8 text-gray-700 rounded transition-colours hover:bg-black/10">
<MenuIcon class="w-6"/>
</button>

 <Menu as="div" class="relative inline-block text-left">
    <MenuButton class="flex items-center"><img class="rounded-full w-8 mr-2" src="https://images.vexels.com/media/users/3/140237/isolated/preview/90175ec3f4696bde71b1d2890ed60c80-female-profile-avatar-4.png"> <small>{{currentUser.name}}</small>
    <ChevronDownIcon class="ml-2 -mr-1 h-5 w-5 text-violet-200 hover:text-violet-100" aria-hidden="true" /></MenuButton>
      <Transition
    enter-active-class="transition duration-100 ease-out"
    enter-from-class="transform scale-95 opacity-0"
    enter-to-class="transform scale-100 opacity-100"
    leave-active-class="transition duration-75 ease-in"
    leave-from-class="transform scale-100 opacity-100"
    leave-to-class="transform scale-95 opacity-0"
  >

 <MenuItems
  class="absolute right-0 mt-2 w-56 origin-top-right bg-white border border-gray-200 rounded-md shadow-lg focus:outline-none z-50"
>
  <MenuItem v-slot="{ active }">
    <a
      href="/account-settings"
      :class="[
        active ? 'bg-blue-500 text-white' : 'text-gray-900',
        'block px-4 py-2 text-sm rounded-md transition-colors duration-150'
      ]"
    >
      Profile
    </a>
  </MenuItem>
  <MenuItem v-slot="{ active }">
    <a
      href="/documentation"
      :class="[
        active ? 'bg-blue-500 text-white' : 'text-gray-900',
        'block px-4 py-2 text-sm rounded-md transition-colors duration-150'
      ]"
    >
      Account Settings
    </a>
  </MenuItem>
   <MenuItem v-slot="{ active }">
    <a
      href="/documentation"
      :class="[
        active ? 'bg-blue-500 text-white' : 'text-gray-900',
        'block px-4 py-2 text-sm rounded-md transition-colors duration-150'
      ]"
    >
      Documentation
    </a>
  </MenuItem>

  <MenuItem v-slot="{ active }">
    <button @click="logout"
    :class="[
    active ? 'bg-indigo-600 text-white': 'text-gray-900', 
    'group flex w-full items-center rounded-md px-2 py-2 text-sm',
  ]">
  <LogoutIcon
  :active="active"
  class="mr-2 h-5 w-5 text-indigo-400"
  aria-hidden="true"/>
      Logout
  </button>
  </MenuItem>
    <MenuItem disabled>
    <span
      class="block px-4 py-2 text-sm text-gray-400 cursor-not-allowed"
    >
      Invite a friend (coming soon!)
    </span>
  </MenuItem>
</MenuItems>
      </Transition>
  </Menu>


            </header>

</template>

<script setup>
import {MenuIcon, LogoutIcon, UserIcon} from '@heroicons/vue/outline'
import {Menu, MenuButton, MenuItems, MenuItem} from '@headlessui/vue'
import {ChevronDownIcon} from '@heroicons/vue/solid'
import store from "../store";
import router from "../router";
import {computed} from "vue";

const emit = defineEmits(['toggle-sidebar']);
// const user = computed(() => store.state.user.data);

const currentUser = computed(() => store.state.user.data);

function logout() {
  store.dispatch('logout')
    .then(() => {
      router.push({name: 'login'})
    })
}

</script>
<style scoped></style>