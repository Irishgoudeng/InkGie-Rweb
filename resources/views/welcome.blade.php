<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&family=Megrim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body class="">
    <section class="bg-cover h-screen w-full" style="background-image: url(images/banner.jpg);">
        <div class="flex flex-col h-full justify-between">
            <!-- Navigation -->
            <div class="p-4">
                <nav class="mx-36">
                    <ul class="flex justify-between font-[Dosis]">
                        <div class="flex gap-16 mt-12">
                            <li></li>
                            <li><a href="#" class="text-white">Home</a></li>
                            <li><a href="#" class="text-white">Artist</a></li>
                            <li><a href="#" class="text-white">Gallery</a></li>
                        </div>
                        <div>
                            <img src="{{ asset('images/logo-header.png') }}" alt="Logo" class="h-32">
                        </div>
                        <div class="flex gap-16 mt-12">
                            <li></li>
                            <li><a href="#" class="text-white">Services</a></li>
                            <li><a href="#" class="text-white">Clinic</a></li>
                            <li></li>
                        </div>
                    </ul>
                </nav>
            </div>

            <!-- Heading -->
            <div class="flex-grow flex items-center justify-center pb-24">
                <h1 class="font-[Megrim] text-white text-[76px]">We Turn Skin Into Art;</h1>
            </div>

            <!-- Button -->
            <div class="flex justify-center mb-8 bg-[#7b7f5d] p-2 ">

                <button class="text-white font-[Dosis] font-semibold text-xl">BOOK NOW</button>

            </div>
        </div>
    </section>


    <section>
        <div class="w-full h-full py-52 shadow-[#405060]" style="background-image: url(images/bg-1.jpg);">
            <div class="flex flex-col items-center justify-center font-[Megrim] space-y-4">
                <h1 class="text-5xl">Artists;</h1>
                <h1 class="text-5xl">Masterpieces in Motion</h1>
                <p class="font-[Dosis]">Crafting Dreams into Stunning, Wearable Art.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="w-full h-full py-20 relative bg-cover bg-center bg-blend-screen" style="background-image: url('images/bg-2.jpg');">
            <div class="grid grid-cols-3 grid-rows-2 gap-10 mx-52 my-20">
                <!-- Image 1 -->
                <div class="relative group overflow-hidden w-full h-full">
                    <!-- Black and White Image -->
                    <img src="{{ asset('images/img-artist-bnw-1.png') }}" alt="Image 1" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">

                    <!-- Color Image on Hover -->
                    <img src="{{ asset('images/img-artist-1.png') }}" alt="Hover Image 1" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">

                    <!-- Rotated Text Container -->
                    <div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-full -rotate-90 origin-top-left bg-white bg-opacity-80 p-6 transition-transform duration-300 group-hover:translate-x-0 w-auto h-auto">
                        <div class="text-black text-center">
                            <h3 class="text-lg font-semibold">Solana Mercure</h3>
                            <p class="text-sm">Tattoo Artist</p>
                        </div>
                    </div>
                </div>

                <!-- Repeat for other images -->
                <!-- Image 2 -->
                <div class="relative group overflow-hidden w-full h-full">
                    <img src="{{ asset('images/img-artist-bnw-2.png') }}" alt="Image 2" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
                    <img src="{{ asset('images/img-artist-2.png') }}" alt="Hover Image 2" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-full -rotate-90 origin-top-left bg-white bg-opacity-80 p-6 transition-transform duration-300 group-hover:translate-x-0 w-auto h-auto">
                        <div class="text-black text-center">
                            <h3 class="text-lg font-semibold">Solana Mercure</h3>
                            <p class="text-sm">Tattoo Artist</p>
                        </div>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="relative group overflow-hidden w-full h-full">
                    <img src="{{ asset('images/img-artist-bnw-3.png') }}" alt="Image 3" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
                    <img src="{{ asset('images/img-artist-3.png') }}" alt="Hover Image 3" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-full -rotate-90 origin-top-left bg-white bg-opacity-80 p-6 transition-transform duration-300 group-hover:translate-x-0 w-auto h-auto">
                        <div class="text-black text-center">
                            <h3 class="text-lg font-semibold">Solana Mercure</h3>
                            <p class="text-sm">Tattoo Artist</p>
                        </div>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="relative group overflow-hidden w-full h-full">
                    <img src="{{ asset('images/img-artist-bnw-4.png') }}" alt="Image 4" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
                    <img src="{{ asset('images/img-artist-4.png') }}" alt="Hover Image 4" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-full -rotate-90 origin-top-left bg-white bg-opacity-80 p-6 transition-transform duration-300 group-hover:translate-x-0 w-auto h-auto">
                        <div class="text-black text-center">
                            <h3 class="text-lg font-semibold">Solana Mercure</h3>
                            <p class="text-sm">Tattoo Artist</p>
                        </div>
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="relative group overflow-hidden w-full h-full">
                    <img src="{{ asset('images/img-artist-bnw-5.png') }}" alt="Image 5" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
                    <img src="{{ asset('images/img-artist-5.png') }}" alt="Hover Image 5" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-full -rotate-90 origin-top-left bg-white bg-opacity-80 p-6 transition-transform duration-300 group-hover:translate-x-0 w-auto h-auto">
                        <div class="text-black text-center">
                            <h3 class="text-lg font-semibold">Solana Mercure</h3>
                            <p class="text-sm">Tattoo Artist</p>
                        </div>
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="relative group overflow-hidden w-full h-full">
                    <img src="{{ asset('images/img-artist-bnw-6.png') }}" alt="Image 6" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
                    <img src="{{ asset('images/img-artist-6.png') }}" alt="Hover Image 6" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                    <div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-full -rotate-90 origin-top-left bg-white bg-opacity-80 p-6 transition-transform duration-300 group-hover:translate-x-0">
                        <h3 class="text-lg font-semibold">Solana Mercure</h3>
                        <p class="text-sm">Tattoo Artist</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center bg-[#7b7f5d] p-2 ">
                <button class="text-white font-[Dosis] font-semibold text-xl">INQUIRE NOW</button>
            </div>
        </div>
    </section>

    <section>
        <div class="py-12" style="background-image: url('images/bg-1.jpg');">

        </div>
    </section>

    <section>
        <div class="w-full h-full py-20 px-28" style="background-image: url(images/bg-2.jpg);">
            <div class="flex flex-col items-center justify-center font-[Megrim] space-y-4">
                <h1 class="text-6xl text-white">Services;</h1>
                <p class="font-[Dosis] text-white pt-4">Harmonizing Art and Expression</p>
            </div>

            <div class="flex justify-between mx-72 pt-20">
                <div class="font-[Megrim] hover:bg-[#7b7f5d] px-28 py-4 ">
                    <button class="text-6xl text-white ">Tatoos</button>
                </div>
                <div class="font-[Megrim] hover:bg-[#7b7f5d] px-16 py-4">
                    <button class="text-6xl text-white">Aesthetics</button>
                </div>
            </div>
        </div>
    </section>


    <section class="w-full h-full bg-cover bg-center overflow-hidden" style="background-image: url(images/bg-1.jpg);">
        <div class="">
            <div class="flex flex-col items-center justify-center font-[Megrim] space-y-4 my-32">
                <h1 class="text-5xl">Our Works;</h1>
                <p class="font-[Dosis]">Ink Your Memories, Wear Your Story.</p>
            </div>
            <!-- Swiper -->
            <div class="swiper-container w-[900px] h-[720px] flex items-center justify-center mx-auto">
                <div class="swiper-wrapper flex ">
                    <div class="swiper-slide relative group flex items-center justify-center w-full h-full">
                        <div class="w-[full] h-full">
                            <img src="{{ asset('images/img-works-bnw-1.png') }}" alt="Image 1" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
                            <img src="{{ asset('images/img-works-1.png') }}" alt="Hover Image 1" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        </div>
                    </div>
                    <div class="swiper-slide relative group flex items-center justify-center w-full h-full">
                        <div class="w-full h-full">
                            <img src="{{ asset('images/img-works-bnw-2.png') }}" alt="Image 2" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
                            <img src="{{ asset('images/img-works-2.png') }}" alt="Hover Image 2" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        </div>
                    </div>
                    <div class="swiper-slide relative group flex items-center justify-center w-full h-full">
                        <div class="w-full h-full">
                            <img src="{{ asset('images/img-works-bnw-3.png') }}" alt="Image 3" class="w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0">
                            <img src="{{ asset('images/img-works-3.png') }}" alt="Hover Image 3" class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const swiper = new Swiper('.swiper-container', {
                        loop: true, // Enable looping
                        initialSlide: 1,
                        slidesPerView: 1, // Number of slides per view
                        spaceBetween: 80, // Space between slides
                        loopedSlides: 3,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: true,
                        },
                    });
                });
            </script>
            <div class="flex justify-center items-end bg-[#7b7f5d] p-4 mt-44 ">
                <button class="text-white font-[Dosis] text-lg tracking-wider">BOOK NOW</button>
            </div>
        </div>
    </section>



    <div class="py-20" style="background-image: url('images/bg-2.jpg');">
        <footer>
            <div class="flex flex-row mx-52 gap-48">
                <div class="flex flex-col">
                    <div class="flex flex-col">
                        <div class="flex">
                            <h1 class="text-white text-6xl pl-2  font-[Megrim]">Location</h1>
                        </div>
                        <h1 class="text-white pl-12 py-12 font-[Dosis]">Davao City, Philippines</h1>
                    </div>

                    <div class="flex">
                        <img src="{{ asset('images/img-maps-1.png') }} " alt="">
                    </div>
                </div>

                <div class="flex flex-col -mb-12 gap-8 ">
                    <div class="flex">
                        <img src="{{ asset('images/logo-header.png') }}" alt="Logo" class="h-44">
                    </div>

                    <div class="text-center flex flex-col gap-2 ml-2">
                        <h1 class="text-white font-[Megrim] text-5xl">I n k G i e</h1>
                        <h1 class="text-white font-[Dosis] text-lg">Tatoo & Aesthetics</h1>
                    </div>
                </div>
                <div class="flex flex-col items-center md:items-end space-y-4 gap-20 ">
                    <!-- Hours Section -->
                    <div class="text-center md:text-center text-white -mr-80">
                        <h2 class="text-5xl font-medium font-[Megrim]">Hours</h2>
                        <p class="pt-4 font-[Dosis]">Mon - Sat: 9AM - 6PM</p>
                    </div>

                    <!-- Socials Section -->
                    <div class="text-center md:text-right -mr-80">
                        <h2 class="text-5xl font-medium font-[Megrim] text-white ">Socials</h2>

                        <div class="flex pt-8">
                            <a href="#" class="group ">
                                <i class="fab fa-facebook-f text-5xl w-20 h-20 text-black group-hover:text-[#7b7f5d] transition-all duration-300"></i>
                            </a>
                            <a href="#" class="group">
                                <i class="fab fa-instagram text-5xl w-20 h-20 text-black group-hover:text-[#7b7f5d] transition-all duration-300"></i>
                            </a>
                            <a href="#" class="group">
                                <i class="fab fa-tiktok text-5xl w-20 h-20 text-black group-hover:text-[#7b7f5d] transition-all duration-300"></i>
                            </a>

                        </div>

                    </div>

                    <!-- Contact Section -->
                    <div class="text-center  text-white -mr-80 font-[Dosis] md:text-center">
                        <h2 class="text-5xl font-medium font-[Megrim]">Contact</h2>
                        <p class="pt-4">sample@gmail.com</p>
                        <p>+63 999 492 8190</p>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <hr>

                <div class="flex items-center justify-center pt-4 mr-4">
                    <h1 class="text-white font-[Dosis] text-lg">Copyright © Tatoo Website. All Rights Reserved. Designed & Developed by R Web Solutions Corp.</h1>
                </div>
            </div>

        </footer>
    </div>

    </section>



</body>

</html>