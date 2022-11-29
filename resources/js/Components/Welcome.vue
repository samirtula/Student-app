<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <ApplicationLogo class="block h-12 w-auto"/>
            </div>
            <div
                class="rounded lg:p-6 md:p-4 p-3 hover:shadow-element relative cursor-pointer duration-75 shadow dark:bg-theme-fon_dark dark:hover:bg-theme-fon_dark_hover bg-theme-fon_light">
                <div class="absolute z-10 inset-0"></div>
                <section class="grid grid-cols-4 flex items-end mt-2">
                    <div class="col-span-3">
                        <span class="lg:text-[14px] text-[12px] mb-2">0%</span>
                        <div class="w-full h-[8px] rounded-full dark:bg-theme-course_progress_dark_bg bg-theme-course_progress_light_bg relative overflow-hidden">
                            <div class="h-[8px] dark:bg-theme-course_progress_dark bg-theme-course_progress_light absolute rounded-full"
                                 style="z-index: 3; width: 0%;"></div>
                        </div>
                    </div>
                    <div class="flex items-center ml-auto z-20 col-span-1">
                        <span class="icon_size text-[#606669] mr-2">
                          <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M3.8 3.8a2.4 2.4 0 0 1 2.4-2.4h5.503a2.4 2.4 0 0 1 1.697.703L17.497 6.2a2.4 2.4 0 0 1 .703 1.697V18.2a2.4 2.4 0 0 1-2.4 2.4H6.2a2.4 2.4 0 0 1-2.4-2.4V3.8ZM6.2 11a1.2 1.2 0 0 1 1.2-1.2h7.2a1.2 1.2 0 0 1 0 2.4H7.4A1.198 1.198 0 0 1 6.2 11Zm1.2 3.6a1.2 1.2 0 1 0 0 2.4h7.2a1.2 1.2 0 1 0 0-2.4H7.4Z"
                                  fill="currentColor"></path>
                          </svg>
                        </span>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>
