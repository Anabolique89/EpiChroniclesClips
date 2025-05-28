<script setup>
import GuestLayout from '@/components/GuestLayout.vue';

</script>

<template>
    <GuestLayout title="Request new password">
            <form class="space-y-6" action="#" method="POST"> 
        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
          <div class="mt-2">
            <input type="email" name="email" id="email" autocomplete="email" required="" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 " placeholder="Email" />
          </div>
        </div>
   <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">Back to Login</a>
        <div class="mt-4">
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 "><a href="/resetPassword" >Request new</a></button>
        </div>
     
      
     </form>  
    </GuestLayout>
</template>
