<?php get_header(); ?>

    <header class="flex justify-center p-7">
        <p class=" font-afasha text-4xl font-bold text-sky-700">MuzikBiz</p>
    </header>

    <div class="search flex justify-items-center px-6 rounded">
        <input class="border-2 box-border w-full rounded outline-none p-2" placeholder="Search" />
    </div>

    <div class = "categories-picker d-flex min-h-7/10 justify-items-center pt-10 px-6" >
        <ul class="grid grid-cols-2 gap-4 category-list">
            <li class="border-2   animate-pulse rotate-in-center overflow-hidden rounded-lg drop-shadow-md min-h-card flex justify-start items-end news relative">
                <div class="absolute w-full h-full from-slate-900 to-transparent rounded-xl " ></div>
                <h5 class="text-2xl p-3 z-10 text-gray-200 font-bold">News</h5>
            </li>

            <li class="border-2  animate-pulse rotate-in-center overflow-hidden rounded-lg drop-shadow-md min-h-card flex justify-start items-end jobs relative">
                <div class="absolute w-full h-full from-slate-900 to-transparent rounded-xl" ></div>
                <h5 class="text-2xl p-3 z-10 text-gray-200 font-bold">Jobs</h5>
            </li>


            <li class="border-2  animate-pulse rotate-in-center overflow-hidden rounded-lg drop-shadow-md min-h-card flex justify-start items-end pod-casts relative">
                <div class="absolute w-full h-full from-slate-900 to-transparent rounded-xl " ></div>
                <h5 class="text-2xl p-3 z-10 text-gray-200 font-bold">Podcasts</h5>
            </li>

            <li class="border-2  animate-pulse rotate-in-center overflow-hidden rounded-lg drop-shadow-md min-h-card flex justify-start items-end events relative">
                <div class="absolute w-full h-full from-slate-900 to-transparent rounded-xl " ></div>
                <h5 class="text-2xl p-3 z-10 text-gray-200 font-bold">Upcoming Events</h5>
            </li>

            <li class="border-2  animate-pulse rotate-in-center overflow-hidden rounded-lg drop-shadow-md min-h-card flex justify-start items-end surveys relative">
                <div class="absolute w-full h-full from-slate-900 to-transparent rounded-xl " ></div>
                <h5 class="text-2xl p-3 z-10 text-gray-200 font-bold">Surveys</h5>
            </li>

            <li class="border-2  animate-pulse rotate-in-center overflow-hidden rounded-lg drop-shadow-md min-h-card flex justify-start items-end trends relative">
                <div class="absolute w-full h-full from-slate-900 to-transparent rounded-xl " ></div>
                <h5 class="text-2xl p-3 z-10 text-gray-200 font-bold">Trends</h5>
            </li>
       
        </ul>
    </div>


    <div class="mt-7 p-1 min-h-full">
        <div class="w-full justify-center min-h-card  flex rounded-lg">
            <!-- <div class="blog featured-blog">
                <div class="relative">
                    <img src="https://www.androidauthority.com/wp-content/uploads/2022/07/nothing-ear-1-black-white-scaled-792w-446h.jpg" /> 
                    <div class="absolute left-0 right-0 top-0 bottom-0 flex items-end flex-col p-2 justify-end">
                        <h3 class="text-xl text-gray-100  font-bold">
                            I’ve tried dozens of true wireless buds, but Nothing is as comfortable as these
                        </h3>
                    </div>
                </div>
                <p class="p-1">When comfort is at stake, spec sheets don't matter.</p>
                <a class="p-1 mb-2 block text-gray-500 font-bold text-lg">Isakiye Afasha</a>
                <hr />
            </div> -->
        </div>
        
    </div>
    
<?php
get_footer(); ?>