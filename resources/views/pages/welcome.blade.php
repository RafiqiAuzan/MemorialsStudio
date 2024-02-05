<x-layouts.base title="Memorials Studio">

    <div id="hero" class=" bg-[#F0E5CF]">
        <div class="h-screen mx-auto grid grid-cols-2 items-center">
            <div class="ml-48">
                <!-- Konten Anda disini -->
                <h1 class="text-[80px] leading-none font-bold px-10">Memorials Studio</h1>
                <br><br>
                <p class="text-[20px] leading-normal pl-10">Melayani jasa pemotretan bagi anda yang ingin mengabadikan
                    kenangan dalam keindahan yang tak terlupakan.</p>
            </div>
            <div class="mx-auto place-self-end">
                <img class="h-screen pt-32" src="{{ URL::to('/img/photographer.png') }}">
            </div>
        </div>
    </div>

    <div id="aboutus" class=" bg-[#F7F6F2]">
        <div class="h-screen mx-auto container items-center ">
            <div class="pt-28">
                <!-- Konten Anda disini -->
                <h1 class="text-[40px] text-center text-[#CD8D7A] leading-none font-bold">About us</h1>
                <br>
                <div class="mx-48 flex gap-8">
                    <img class="w-[370px]" src="{{ URL::to('/img/aboutusimg.jpg') }}">
                    <p class="text-[18px] text-justify leading-normal mx-">Selamat datang di Memorials Project! Kami
                        adalah studio fotografi yang mengabadikan momen-momen istimewa dalam hidup Anda, mulai dari
                        pemotretan wisuda, pernikahan, prewedding, hingga pemotretan keluarga. Dengan tim fotografer
                        berbakat dan berpengalaman.<br><br>Kami percaya bahwa setiap foto memiliki cerita tersendiri,
                        dan kami berusaha untuk menangkap esensi dari setiap momen dengan cermat dan penuh perhatian.
                        Dengan fokus pada kepuasan dan kepercayaan klien, kami siap berbagi perjalanan ini bersama Anda.
                        Mari kita ciptakan kenangan indah bersama-sama!</p>
                </div>
            </div>
        </div>
    </div>

    <div id="whatweoffer" class=" bg-[#C8C6C6]">
        <div class="h-screen mx-auto container items-center ">
            <div class="pt-28">
                <!-- Konten Anda disini -->
                <h1 class="text-[40px] text-center text-[#F7F6F2] leading-none font-bold">What we offer!</h1>
                <br>
                <div class="px-32 grid grid-cols-4 gap-5">
                    @foreach ($category as $category)
                        <div
                            class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <img class="rounded-t-lg w-full h-40" src="{{ asset('/img/category/' . $category->image) }}"
                                alt="" />
                            <div class="p-3">
                                <h5 class=" text-lg font-bold tracking-tight text-[#CD8D7A] dark:text-white">
                                    {{ $category->name }}</h5>
                                <p class="mb-3 text-sm font-normal text-gray-700 dark:text-gray-400">
                                    {{ $category->description }}
                                </p>

                                <div class="flex justify-end">
                                    <a href="https://wa.me/6285159559945?text=Halo%20Memorials%20Studio,%20boleh%20aku%20bertanya%20mengenai%20jasa%20fotonya?"
                                        target="_blank" rel="noopener noreferrer"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#CD8D7A] rounded-lg hover:bg-[#9c6b5d] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Lets talk
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div id="gallery" class="bg-[#4B6587] items-center justify-center p-10">
        <div class=" flex items-center justify-center pt-[72px] pb-12">
            <!-- Konten Anda disini -->
            <h1 class="text-5xl font-bold mb-4 text-white">Our Gallery</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($gallery as $gallery)
                <div>
                    <img class="size-[500px] max-w-full rounded-lg" src="{{ asset('/img/gallery/' . $gallery->image) }}"
                        alt="">
                </div>
            @endforeach
        </div>
    </div>
    </div>
</x-layouts.base>
