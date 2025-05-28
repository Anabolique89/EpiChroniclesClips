<template> 
 <GuestLayout title="Sign in to your account">
        
      <form class="space-y-6 mt-8"  method="POST" @submit.prevent="login">
        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input type="email" name="email" id="email" autocomplete="email" required="" v-model="user.email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 " placeholder="Email" />
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>

          </div>
          <div class="mt-2">
            <input type="password" name="password" id="password" autocomplete="current-password" required="" v-model="user.password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 mb-4" placeholder="Password" />
          </div>
        </div>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" v-model="user.remember"
                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"/>
                <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
            </div>
        </div>
<div class="text-sm">
    <!-- <router-link :to="{name:'requestPassword'}" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</router-link> -->
<router-link :to="{ name: 'requestPassword' }" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</router-link>

</div>
        <div class="mt-4">
        <button 
  type="submit" 
  :disabled="loading"
  class="flex w-full justify-center items-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
  :class="{
    'cursor-not-allowed': loading,
    'hover:bg-indigo-500': loading
  }"
>
  <svg
    v-if="loading"
    class="mr-2 h-5 w-5 animate-spin text-white"
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
  <span>Sign in</span>
</button>

                </div>
      </form>
    <p v-if="errorMsg" class="text-red-500 text-sm mt-2">{{ errorMsg }}</p>

</GuestLayout>
</template>


<script setup>
import GuestLayout from '@/components/GuestLayout.vue';
import {ref} from 'vue';
import store from '@/store';
import router from '@/router';
import { useRouter } from 'vue-router';

const router =useRouter()

let loading = ref(false);
let errorMsg = ref("");

const user = {
    email: '',
    password: '',
    remember: false
}

function login(){
    loading.value = true;

    store.dispatch('login', user)
    .then(() => {
        loading.value = false;
        router.push({ name: 'app.dashboard' });
    })
    .catch((error) => {
        loading.value = false;

        // Check if error.response exists
        if (error.response && error.response.data && error.response.data.message) {
            errorMsg.value = error.response.data.message;
        } else {
            errorMsg.value = "An unexpected error occurred. Please try again.";
            console.error("Login error:", error); // Log full error for debugging
        }
    });
}



</script>


<style scoped>


</style>