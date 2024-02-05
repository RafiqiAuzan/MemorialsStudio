<navbar class="fixed z-20 w-full bg-[#F0E5CF] backdrop-blur bg-opacity-60">
    <div class="container mx-auto gap-[85px] px-2 lg:flex lg:items-center lg:justify-between">
        <div class="flex justify-between">
            {{-- Kiri --}}
            <div class="">
                <a href="/"><img class="w-32" src="{{ asset('img/logo.png') }}" alt="Logo"></a>
            </div>
            
        </div>
        {{-- Tampilan mobile masih menunggu design  --}}
        <div>
            <div class="bg-[#F6F6F6] lg:bg-opacity-0 absolute py-4 rounded-lg max-w-[150px] w-full right-7 top-full lg:static lg:max-w-full lg:shadow-none lg:rounded-none">
                <div class=" lg:items-center">
                    <ul class="lg:flex">
                        <li><a class="flex py-2 mx-6 font-semibold transition-all lg:py-3 text-xl text-base-600 hover:text-[#CD8D7A] hover:font-semibold"
                                href="#hero">Home</a></li>
                        <li><a class="flex py-2 mx-6 font-semibold transition-all lg:py-3 text-xl text-base-600 hover:text-[#CD8D7A] hover:font-semibold"
                                href="#aboutus">About us</a></li>
                        <li>
                        <li><a class="flex py-2 mx-6 font-semibold transition-all lg:py-3 text-xl text-base-600 hover:text-[#CD8D7A] hover:font-semibold"
                                href="#whatweoffer">Our Services</a></li>
                        <li>
                        <li><a class="flex py-2 mx-6 font-semibold transition-all lg:py-3 text-xl text-base-600 hover:text-[#CD8D7A] hover:font-semibold"
                                href="#gallery">Gallery</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</navbar>
