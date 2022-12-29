<template>
    <swiper
      :effect="'cards'"
      :grabCursor="true"
      :modules="modules"
      class="mySwiper h-[100%] max-w-[200px] max-h-[300px]"
      
    >
    <swiper-slide class="">
        <div class="bg-slate-700 h-[300px] p-4 rounded-xl flex flex-col">
            <p class="text-white text-xl font-bold">Тестовый текст dolor sit amet consectetur. </p>
            <p class="text-white mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, totam exercitationem qua</p>
            <p class="text-white text-sm font-thin mt-4">Lorem, ipsum dolor.</p>
        </div>
      </swiper-slide>
      <swiper-slide class="max-w-[200px]">
        <div class="bg-slate-900 h-[300px] p-4 rounded-xl flex flex-col">
            <p class="text-white text-xl font-bold">Lorem ipsum dolor sit amet consectetur. </p>
            <p class="text-white mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, totam exercitationem qua</p>
            <p class="text-white text-sm font-thin mt-4">Lorem, ipsum dolor.</p>
        </div>
      </swiper-slide>
      <swiper-slide class="max-w-[200px]">
        <div class="bg-rks__blue h-[300px] p-4 rounded-xl flex flex-col">
            <p class="text-white text-xl font-bold">Lorem ipsum dolor sit amet consectetur. </p>
            <p class="text-white mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, totam exercitationem qua</p>
            <p class="text-white text-sm font-thin mt-4">Lorem, ipsum dolor.</p>
        </div>
      </swiper-slide>
      <swiper-slide class="max-w-[200px]">
        <div class="bg-rks__red h-[300px] p-4 rounded-xl flex flex-col">
            <p class="text-white text-xl font-bold">Lorem ipsum dolor sit amet consectetur. </p>
            <p class="text-white mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, totam exercitationem qua</p>
            <p class="text-white text-sm font-thin mt-4">Lorem, ipsum dolor.</p>
        </div>
      </swiper-slide>
    </swiper>
  </template>
  <script>
  // Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from "swiper/vue";
  
  // Import Swiper styles
  import "swiper/css";
  
  import "swiper/css/effect-cards";
  
  
  // import required modules
  import { EffectCards } from "swiper";
  
  export default {
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [EffectCards],
      };
    },
  };
  </script>

  <style>





</style>
  