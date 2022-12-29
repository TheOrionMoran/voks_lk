<template>
    <div>
        <swiper :spaceBetween="2" 
        :centeredSlides="true" 
        :loop="true"
        :autoplay="{
            delay: 5000,
            disableOnInteraction: false,
        }" 
        :pagination="{
            clickable: true,
        }"  
        :modules="modules" 
        class="mySwiper max-h-[400px] rounded-xl bg-slate-800">
            <swiper-slide>
                <div class="bg-center bg-cover" style="background-image: url('/img/slider/1.jpg');">
                    <div
                        class="h-[400px] bg-gradient-to-t from-[#00000094] to-[#f0f8ff00] flex flex-col justify-end p-4">
                        <div class="text-white self-start rounded-xl">
                            <p class="text-5xl font-bold leading-9 drop-shadow-sm sm:text-3xl">Волжские <br>коммунальные системы</p>
                            <p class="text-2-xl drop-shadow-sm mt-4 sm:mt-0">Любимому городу - чистую воду</p>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="bg-center bg-cover" style="background-image: url('/img/slider/2.jpg');">
                    <div
                        class="h-[400px] bg-gradient-to-t from-[#00000094] to-[#f0f8ff00] flex flex-col justify-end p-4">
                        <div class="text-white self-start rounded-xl">
                            <p class="text-5xl font-bold leading-9 drop-shadow-sm sm:text-2xl">Тестовый текст</p>
                            <p class="text-2-xl drop-shadow-sm mt-4 sm:mt-0">Тестовый текст...</p>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="bg-center bg-cover" style="background-image: url('/img/slider/4.jpg');">
                    <div
                        class="h-[400px] bg-gradient-to-t from-[#00000094] to-[#f0f8ff00] flex flex-col justify-end p-4">
                        <div class="text-white self-start rounded-xl">
                            <p class="text-5xl font-bold leading-9 drop-shadow-sm sm:text-2xl">Тестовый текст</p>
                            <p class="text-2-xl drop-shadow-sm mt-4 sm:mt-0">Тестовый текст...</p>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="bg-center bg-cover" style="background-image: url('/img/slider/5.jpg');">
                    <div
                        class="h-[400px] bg-gradient-to-t from-[#00000094] to-[#f0f8ff00] flex flex-col justify-end p-4">
                        <div class="text-white self-start rounded-xl">
                            <p class="text-5xl font-bold leading-9 drop-shadow-sm sm:text-2xl">Тестовый текст</p>
                            <p class="text-2-xl drop-shadow-sm mt-4 sm:mt-0">Тестовый текст...</p>
                        </div>
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="bg-center bg-cover" style="background-image: url('/img/slider/6.jpg');">
                    <div
                        class="h-[400px] bg-gradient-to-t from-[#00000094] to-[#f0f8ff00] flex flex-col justify-end p-4">
                        <div class="text-white self-start rounded-xl">
                            <p class="text-5xl font-bold leading-9 drop-shadow-sm sm:text-2xl">Тестовый текст</p>
                            <p class="text-2-xl drop-shadow-sm mt-4 sm:mt-0">Тестовый текст...</p>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";
import "swiper/css/navigation";



// import required modules
import { Autoplay, Pagination, Navigation } from "swiper";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
           
            modules: [Autoplay, Pagination, Navigation],
        };
    },
};
</script>


<style>

</style>
  