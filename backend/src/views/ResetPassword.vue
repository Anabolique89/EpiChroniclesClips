

<template>
    <GuestLayout title="Set new password">
            <form class="space-y-6" action="#" method="POST"> 
                <input type ="hidden" name="remember" value="true"/>
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
          <label for="new-password" class="block text-sm/6 font-medium text-gray-900">New Password</label>
          <div class="mt-2">
            <input type="password" name="password" id="new-password" required="" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 " placeholder="Email" />
          </div>
        </div>
</div>
        <div>
          <div class="flex items-center justify-between">
            <label for="password-repeat" class="block text-sm/6 font-medium text-gray-900">Repeat Password</label>
           
          </div>
          <div class="mt-2">
            <input type="password" name="password_repeat" id="password-repeat" required="" class="block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 " placeholder="Password" />
          </div>
        </div>

        <div class="mt-4">
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">Sign in</button>
        </div>
     
      
     </form>  
    </GuestLayout>
</template>

<script setup>
import GuestLayout from '@/components/GuestLayout.vue';

</script>
