<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Mediteran - Bisnis Villa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app.css') }} ">
</head>
<body class="font-montserrat">
    <!-- Section 1 -->
    <!-- Tambahkan Alpine.js di dalam <head> jika belum ada -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <section class="relative w-full h-screen bg-gray-100">
        <!-- Navbar -->
        <nav class="fixed z-20 top-0 left-0 w-full px-6 py-4 flex justify-between items-center bg-gray-200">
            <!-- Logo -->
            <a href="#">
                <img src="img/logo villa.png" alt="The Mediteran Logo" class="h-8 md:h-10">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6 text-gray-700">
                <a href="#" class="hover:text-gray-900">Home</a>
                <a href="#our_value" class="hover:text-gray-900">Our Value</a>
                <a href="#tipe" class="hover:text-gray-900">Tipe</a>
                <a href="#testimonials" class="hover:text-gray-900">Testimonials</a>
                <a href="#promo" class="hover:text-gray-900">Promo</a>
            </div>

            <!-- Tombol Kontak (Desktop) -->
            <a href="https://wa.me/+6289682912192" class="hidden md:block">
                <button class="font-bold bg-gray-300 text-black px-4 py-2 rounded-xl shadow-md hover:bg-gray-400">
                    Kontak Kami
                </button>
            </a>

            <!-- Hamburger Menu (Mobile) -->
            <div class="md:hidden" x-data="{ open: false }">
                <button @click="open = !open" class="p-2 border border-gray-400 rounded-lg">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>

                <!-- Mobile Menu -->
                <div x-show="open" x-transition 
                    class="absolute top-16 left-0 w-full bg-white shadow-md flex flex-col items-start p-6 space-y-4 z-30">
                    <a href="#" class="text-lg text-gray-700 hover:text-gray-900">Home</a>
                    <a href="#our_value" class="text-lg text-gray-700 hover:text-gray-900">Our Value</a>
                    <a href="#tipe" class="text-lg text-gray-700 hover:text-gray-900">Tipe</a>
                    <a href="#testimonials" class="text-lg text-gray-700 hover:text-gray-900">Testimonials</a>
                    <a href="#promo" class="text-lg text-gray-700 hover:text-gray-900">Promo</a>
                    <a href="https://wa.me/+6289682912192" class="w-full">
                        <button class="w-full font-bold bg-gray-300 text-black px-4 py-2 rounded-xl shadow-md hover:bg-gray-400">
                            Kontak Kami
                        </button>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative flex flex-col md:flex-row items-center h-full px-6 md:px-24 font-josefin">
            <!-- Background Image -->
            <img src="img/vladimir-malyavko-vdQGc0lSd1c-unsplash 1.png" 
                alt="Gedung" 
                class="absolute h-full w-full object-cover top-0 left-0 opacity-40">

            <!-- Konten -->
            <div class="relative z-10 text-center md:text-left md:w-1/2 mt-20 md:mt-0">
                <h1 class="text-4xl md:text-5xl font-semibold leading-tight text-black">
                    Dapatkan Passive Income 
                    <span class="text-black font-bold block md:inline">360 jt/th</span>
                    dari Bisnis Villa!
                </h1>
                <p class="text-lg md:text-xl text-gray-700 mt-4">
                    Miliki bisnis villa auto-pilot dengan pengelolaan setara hotel bintang lima 
                    dan jadilah The Next Juragan Villa dengan potensi passive income hingga 
                    360 juta/tahun.
                </p>
                <button class="mt-6 md:mt-8 flex items-center justify-center bg-gray-200 text-black px-6 py-3 rounded-xl shadow-md hover:bg-gray-300 font-semibold w-full md:w-auto">
                    Pelajari Sekarang
                    <img src="img/arrow-right.png" alt="" class="ml-2 w-6">
                </button>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="w-full py-20 bg-gray-100 text-center fade-up" id="our_value">
        <h2 class="text-3xl md:text-5xl font-bold mb-10 md:mb-20">Mengapa Berinvestasi <br class="hidden md:block">di Villa The Mediteran?</h2>
        <div class="mx-5 md:mx-20 grid grid-cols-1 md:grid-cols-3 gap-4 px-5 md:px-20">
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center">
                <div class="bg-gray-300 w-16 md:w-20 p-4 rounded mb-4">
                    <img src="img/cash.png" alt="Bisnis Villa Autopilot" class="h-8 md:h-10">
                </div>
                <h3 class="font-bold">Bisnis Villa Autopilot</h3>
                <p class="text-gray-700 text-sm md:text-base">Tinggal duduk manis dan dapatkan passive income hingga <span class="font-bold">360jt / thn</span></p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center">
                <div class="bg-gray-300 w-16 md:w-20 p-4 rounded mb-4">
                    <img src="img/dollar.png" alt="Investasi Menjanjikan" class="h-8 md:h-10">
                </div>
                <h3 class="font-bold">Investasi Menjanjikan</h3>
                <p class="text-gray-700 text-sm md:text-base">Mulai dari <span class="font-bold">1 miliar</span>, Anda bisa mendapatkan unit villa yang terletak 0 km poros jalan raya.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center">
                <div class="bg-gray-300 w-16 md:w-20 p-4 rounded mb-4">
                    <img src="img/handshake.png" alt="Akses Eksklusif Jaringan Pengusaha" class="h-8 md:h-10">
                </div>
                <h3 class="font-bold">Akses Eksklusif Jaringan Pengusaha</h3>
                <p class="text-gray-700 text-sm md:text-base">Bangun relasi dengan pemilik villa sukses di berbagai sektor.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center">
                <div class="bg-gray-300 w-16 md:w-20 p-4 rounded mb-4">
                    <img src="img/balance.png" alt="Legalitas Terjamin" class="h-8 md:h-10">
                </div>
                <h3 class="font-bold">Legalitas Terjamin</h3>
                <p class="text-gray-700 text-sm md:text-base">Sertifikat Hak Milik (SHM) menjamin legalitas properti.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center">
                <div class="bg-gray-300 w-16 md:w-20 p-4 rounded mb-4">
                    <img src="img/home.png" alt="Hi-Tech" class="h-8 md:h-10">
                </div>
                <h3 class="font-bold">Hi-Tech</h3>
                <p class="text-gray-700 text-sm md:text-base">Akses Mediteran Apps untuk memantau okupansi dan fitur smart home di villa Anda.</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md flex flex-col items-center">
                <div class="bg-gray-300 w-16 md:w-20 p-4 rounded mb-4">
                    <img src="img/thermostat.png" alt="Layanan Sewa Kelola" class="h-8 md:h-10">
                </div>
                <h3 class="font-bold">Layanan Sewa Kelola</h3>
                <p class="text-gray-700 text-sm md:text-base">Pengelolaan sewa profesional, hasil investasi maksimal tanpa repot.</p>
            </div>
        </div>
    </section>    

    <!-- Section 3 -->
    <section class="w-full py-16 bg-gray-100 text-center fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-10 md:mb-14">Lokasi Strategis</h2>
        <div class="mx-5 md:mx-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 px-5 md:px-20">
            <div class="bg-white p-6 rounded-xl shadow-md">
                <img src="img/0km.png" alt="0 KM Jalan Poros Kota Batu" class="h-32 w-full object-cover rounded-md mb-4">
                <h3 class="font-bold">0 KM Jalan Poros <br> Kota Batu</h3>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md">
                <img src="img/jatimpark3.png" alt="Selangkah dari Jatim Park 3" class="h-32 w-full object-cover rounded-md mb-4">
                <h3 class="font-bold">Selangkah dari <br>Jatim Park 3</h3>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md">
                <img src="img/umm.png" alt="5 Menit dari Univ. Muhammadiyah Malang" class="h-32 w-full object-cover rounded-md mb-4">
                <h3 class="font-bold">5 Menit dari Univ. <br> Muhammadiyah <br>Malang</h3>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md">
                <img src="img/alunalunbatu.png" alt="10 Menit dari Alun-Alun Batu" class="h-32 w-full object-cover rounded-md mb-4">
                <h3 class="font-bold">10 Menit dari <br> Alun-Alun Batu</h3>
            </div>
        </div>
        <div class="mt-10 mx-5 md:mx-20 bg-white p-6 md:p-12 rounded-xl shadow-md flex flex-col md:flex-row items-center">
            <img src="img/villa.png" alt="Peluang Investasi" class="h-40 w-full md:w-1/2 object-cover rounded-md mb-4 md:mb-0">
            <div class="md:ml-6 text-left">
                <h3 class="font-bold text-lg md:text-xl">Tingginya Jumlah Wisatawan Jadi Peluang!</h3>
                <p class="text-gray-700 mt-2 text-sm md:text-base">Dengan kunjungan lebih dari 10 juta wisatawan setiap tahun, Kota Batu menawarkan peluang investasi villa yang menjanjikan. Potensi tingkat okupansi yang tinggi didukung oleh daya tarik wisata populer seperti Jatim Park 3, BNS, dan Alun-Alun Batu, menjadikan Kota Batu sebagai destinasi investasi yang menguntungkan.</p>
            </div>
        </div>
    </section>        

    <!-- Section 4 -->
    <section class="w-full py-16 bg-gray-100 fade-up" id="tipe">
        <div class="mb-10 mx-5 md:mx-40 text-center md:text-left">
            <h2 class="text-3xl md:text-4xl font-bold">Villa Shaga - Tipe 772,<br>Modern dengan Sentuhan Tropis</h2>
            <p class="text-gray-700 mt-4 md:w-1/2">Hunian modern bernuansa tropis yang menghadirkan kenyamanan, keindahan, dan keseimbangan untuk kehidupan berkualitas.</p>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center md:items-start md:space-x-6 mx-5">
            <img src="img/rumah 1.png" alt="Interior Villa" class="rounded-xl shadow-md w-full md:w-1/2 mb-4 md:mb-0">
            <div class="flex flex-col w-full md:w-1/2">
                <img src="img/rumah 2.png" alt="Eksterior Villa" class="rounded-xl shadow-md w-full">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4 border-2 border-black p-4 rounded-xl">
                    <div class="flex items-center">
                        <img src="img/kasur.png" alt="" class="h-6 w-6">
                        <span class="text-gray-700 ml-2 text-sm">2 Kamar Tidur</span>
                    </div>
                    <div class="flex items-center">
                        <img src="img/kamar mandi.png" alt="" class="h-6 w-6">
                        <span class="text-gray-700 ml-2 text-sm">2 Kamar Mandi</span>
                    </div>
                    <div class="flex items-center">
                        <img src="img/sofa.png" alt="" class="h-6 w-6">
                        <span class="text-gray-700 ml-2 text-sm">Ruang Tamu</span>
                    </div>
                    <div class="flex items-center">
                        <img src="img/makan.png" alt="" class="h-6 w-6">
                        <span class="text-gray-700 ml-2 text-sm">Ruang Makan</span>
                    </div>
                    <div class="flex items-center">
                        <img src="img/pool.png" alt="" class="h-6 w-6">
                        <span class="text-gray-700 ml-2 text-sm">Private Pool</span>
                    </div>
                    <div class="flex items-center">
                        <img src="img/kanopi.png" alt="" class="h-6 w-6">
                        <span class="text-gray-700 ml-2 text-sm">Kanopi</span>
                    </div>
                    <div class="flex items-center">
                        <img src="img/keluarga.png" alt="" class="h-6 w-6">
                        <span class="text-gray-700 ml-2 text-sm">Ruang Keluarga</span>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <button class="bg-gray-800 text-white px-6 py-3 rounded-xl shadow-md hover:bg-gray-700">Denah</button>
                </div>
            </div>
        </div>
        <div class="text-center mt-10 px-5 md:px-40 font-semibold">
            <p class="text-gray-700 text-sm md:text-base">"Villa Shaga - Tipe 772 menghadirkan perpaduan sempurna antara desain modern dan sentuhan tropis yang hangat. Dengan 2 kamar tidur, ruang tamu luas, serta private pool, hunian ini dirancang untuk memberikan kenyamanan maksimal. Material berkualitas tinggi dan elemen alami seperti kayu dan batu ekspos menjadikan rumah ini tempat ideal untuk menikmati ketenangan dan kebersamaan."</p>
        </div>
    </section>

    <!-- Section 5 -->
    <section class="w-full py-20 bg-gray-100 fade-up px-5 md:px-40" id="tipe">
        <div class="mb-10 text-center md:text-left">
            <h2 class="text-2xl md:text-4xl font-bold">Villa Sequoia - Tipe 134,<br>Hunian Mewah Bernuansa Tropis</h2>
            <p class="text-gray-700 mt-4 md:w-2/3 mx-auto md:mx-0">Hadir dengan desain tropis modern, menciptakan keseimbangan sempurna antara kenyamanan, keindahan, dan kehangatan alami.</p>
        </div>
        <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
            <img src="img/rumah 3.png" alt="Interior Villa" class="rounded-xl shadow-md w-full md:w-1/2">
            <div class="flex flex-col w-full md:w-1/2">
                <img src="img/rumah 4.png" alt="Eksterior Villa" class="rounded-xl shadow-md w-full">
                <div class="grid grid-cols-2 md:grid-cols-4 mt-4 gap-4 border-2 border-black p-4 rounded-xl">
                    <div class="text-center flex items-center">
                        <img src="img/kasur.png" alt="">
                        <span class="text-gray-700 ml-2 text-sm md:text-base">3 Kamar Tidur</span>
                    </div>
                    <div class="text-center flex items-center">
                        <img src="img/kamar mandi.png" alt="">
                        <span class="text-gray-700 ml-2 text-sm md:text-base">3 Kamar Mandi</span>
                    </div>
                    <div class="text-center flex items-center">
                        <img src="img/sofa.png" alt="">
                        <span class="text-gray-700 ml-2 text-sm md:text-base">Ruang Tamu</span>
                    </div>
                    <div class="text-center flex items-center">
                        <img src="img/makan.png" alt="">
                        <span class="text-gray-700 ml-2 text-sm md:text-base">Ruang Makan</span>
                    </div>
                    <div class="text-center flex items-center">
                        <img src="img/pool.png" alt="">
                        <span class="text-gray-700 ml-2 text-sm md:text-base">Private Pool</span>
                    </div>
                    <div class="text-center flex items-center">
                        <img src="img/kanopi.png" alt="">
                        <span class="text-gray-700 ml-2 text-sm md:text-base">Kanopi</span>
                    </div>
                    <div class="text-center flex items-center">
                        <img src="img/keluarga.png" alt="">
                        <span class="text-gray-700 ml-2 text-sm md:text-base">Ruang Keluarga</span>
                    </div>
                    <div class="text-center flex items-center">
                        <img src="img/balkon.png" alt="">
                        <span class="text-gray-700 ml-2 text-sm md:text-base">Balkon</span>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <button class="bg-gray-800 text-white px-4 md:px-6 py-2 md:py-3 rounded-xl shadow-md hover:bg-gray-700">Denah</button>
                </div>
            </div>
        </div>
        <div class="text-center mt-10 px-5 md:px-40 font-semibold">
            <p class="text-gray-700 text-sm md:text-base">"Sequoia - Tipe 134 menghadirkan hunian eksklusif dengan kemewahan dan kesejukan tropis. Dirancang untuk kenyamanan maksimal, hunian ini mengoptimalkan pencahayaan alami, material premium, serta ruang terbuka yang harmonis. Dilengkapi 3 kamar tidur luas, 3 kamar mandi modern, serta ruang tamu, keluarga, dan makan yang lapang. Dapur berkonsep terbuka menciptakan kesan luas dan fungsional. Private pool dan balkon eksklusif, sementara kanopi estetis melindungi kendaraan."</p>
        </div>
    </section>    

    <!-- Section 6 -->
    <section class="w-full py-20 bg-gray-100 fade-up" id="testimonials">
        <div class="text-center mb-10 px-6">
            <h2 class="text-3xl md:text-4xl font-bold">Apa Kata Pelanggan Kami?</h2>
        </div>
        <div class="flex flex-col md:flex-row justify-center gap-8 px-6 md:px-20">
            <div class="space-y-6 w-full md:w-1/2">
                <div class="p-4 border rounded-xl shadow-sm bg-white flex items-center border-black">
                    <img src="img/titiek.png" alt="" class="w-12 h-12 md:w-16 md:h-16 mr-4 rounded-full">
                    <div>
                        <p class="mb-2 text-sm md:text-base">Saya sangat puas dengan pembelian villa di The Mediteran. Lokasinya strategis, elegan, dan fasilitasnya premium.</p>
                        <span class="font-bold">Titiek Surhatanti</span><br>
                        <span class="text-gray-500 text-sm">Business Owner</span>
                    </div>
                </div>
                <div class="p-4 border rounded-xl shadow-sm bg-white flex items-center border-black">
                    <img src="img/alisson.png" alt="" class="w-12 h-12 md:w-16 md:h-16 mr-4 rounded-full">
                    <div>
                        <p class="mb-2 text-sm md:text-base">Villa di The Mediteran sangat nyaman, mewah, dan investasi terbaik dengan pelayanan yang luar biasa.</p>
                        <span class="font-bold">Alisson Becker</span><br>
                        <span class="text-gray-500 text-sm">Brazilian Goalkeeper</span>
                    </div>
                </div>
                <div class="p-4 border rounded-xl shadow-sm bg-white flex items-center border-black">
                    <img src="img/ambatukam.png" alt="" class="w-12 h-12 md:w-16 md:h-16 mr-4 rounded-full">
                    <div>
                        <p class="mb-2 text-sm md:text-base">Membeli villa di The Mediteran adalah keputusan terbaik lokasi strategis, desain elegan, pelayanan profesional.</p>
                        <span class="font-bold">Ambatukam</span><br>
                        <span class="text-gray-500 text-sm">Agency Staff</span>
                    </div>
                </div>
                <div class="p-4 border rounded-xl shadow-sm bg-white flex items-center border-black">
                    <img src="img/darwin.png" alt="" class="w-12 h-12 md:w-16 md:h-16 mr-4 rounded-full">
                    <div>
                        <p class="mb-2 text-sm md:text-base">Hunian yang sempurna untuk investasi maupun tempat tinggal. Desainnya elegan, suasananya asri.</p>
                        <span class="font-bold">Darwin Nunez</span><br>
                        <span class="text-gray-500 text-sm">Business Owner</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-center items-center">
                <div class="text-center mb-4">
                    <button class="border border-gray-700 text-gray-700 px-6 py-3 rounded-xl shadow-md hover:bg-gray-200 font-bold w-full md:w-auto">
                        Lihat Ulasan Langsung
                    </button>
                </div>
                <iframe class="w-full h-56 md:h-96 rounded-xl shadow-md border-black border p-4"
                    src="https://www.youtube.com/embed/8MxN9hTaF-Y?si=gtdJ9yJvbhie3daN"
                    title="Testimoni Pelanggan" allowfullscreen>
                </iframe>
            </div>            
        </div>
    </section>

    <!-- Section 7 -->
    <section class="w-full py-20 bg-gray-100 fade-up" id="promo">
        <div class="text-center mb-10">
            <h2 class="text-3xl md:text-4xl font-bold">Promo Khusus Bulan Ini!</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 px-4 md:px-20">
            <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border">
                <div class="bg-gray-300 w-16 p-3 rounded mr-4 flex justify-center items-center">
                    <img src="img/receipt.png" class="w-8" alt="">
                </div>
                <div>
                    <h3 class="font-bold text-lg">Gratis Biaya Pajak dan Pembelian (BPHTB)</h3>
                    <p class="text-gray-700 text-sm">Dapatkan garansi kualitas bangunan selama satu tahun</p>
                </div>
            </div>
            <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border">
                <div class="bg-gray-300 w-16 p-3 rounded mr-4 flex justify-center items-center">
                    <img src="img/shield.png" class="w-8" alt="">
                </div>
                <div>
                    <h3 class="font-bold text-lg">Gratis Interior & Furnitur Premium</h3>
                    <p class="text-gray-700 text-sm">Villa Anda siap huni atau disewakan dengan interior dan furnitur premium</p>
                </div>
            </div>
            <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border">
                <div class="bg-gray-300 w-16 p-3 rounded mr-4 flex justify-center items-center">
                    <img src="img/economic.png" class="w-8" alt="">
                </div>
                <div>
                    <h3 class="font-bold text-lg">Garansi Bangunan Selama 1 Tahun</h3>
                    <p class="text-gray-700 text-sm">Dapatkan garansi kualitas bangunan selama satu tahun</p>
                </div>
            </div>
            <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border">
                <div class="bg-gray-300 w-16 p-3 rounded mr-4 flex justify-center items-center">
                    <img src="img/furniture.png" class="w-8" alt="">
                </div>
                <div>
                    <h3 class="font-bold text-lg">Gratis Biaya KPR dan Notaris</h3>
                    <p class="text-gray-700 text-sm">Nikmati kemudahan investasi Villa dengan kepemilikan tanpa biaya tambahan</p>
                </div>
            </div>
            <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border">
                <div class="bg-gray-300 w-16 p-3 rounded mr-4 flex justify-center items-center">
                    <img src="img/contract.png" class="w-8" alt="">
                </div>
                <div>
                    <h3 class="font-bold text-lg">Garansi Income Hingga 200 jt Selama 2 Tahun</h3>
                    <p class="text-gray-700 text-sm">Dapatkan garansi income hingga 200 jt per tahun selama 2 tahun pertama</p>
                </div>
            </div>
            <div class="flex items-center p-4 bg-white rounded-xl shadow-sm border">
                <div class="bg-gray-300 w-16 p-3 rounded mr-4 flex justify-center items-center">
                    <img src="img/money.png" class="w-8" alt="">
                </div>
                <div>
                    <h3 class="font-bold text-lg">Gratis DP KPR 0%</h3>
                    <p class="text-gray-700 text-sm">Dapatkan gratis Biaya DP KPR selama masa promo</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="w-full py-8 bg-white border-t text-center">
        <nav class="flex flex-wrap justify-center space-x-3 md:space-x-6 mb-4 text-sm md:text-base">
            <a href="#" class="text-gray-700 hover:text-black">Home</a>
            <a href="#our_value" class="hover:text-gray-900">Our Value</a>
            <a href="#tipe" class="hover:text-gray-900">Tipe</a>
            <a href="#testimonials" class="hover:text-gray-900">Testimonials</a>
            <a href="#promo" class="hover:text-gray-900">Promo</a>
        </nav>
        <div class="flex justify-center space-x-4 mb-4">
            <a href="https://www.facebook.com/azkakasmito.putra" target="_blank">
                <img src="img/facebook.png" class="w-6 md:w-8" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/azkaakhi" target="_blank">
                <img src="img/instagram.png" class="w-6 md:w-8" alt="Instagram">
            </a>
            <a href="https://wa.me/+6289682912192" target="_blank">
                <img src="img/whatsapp (2).png" class="w-6 md:w-8" alt="WhatsApp">
            </a>
            <a href="https://www.tiktok.com/@kebunku77" target="_blank">
                <img src="img/tiktok.png" class="w-6 md:w-8" alt="TikTok">
            </a>
            <a href="mailto:abn9973@gmail.com" target="_blank">
                <img src="img/email.png" class="w-6 md:w-8" alt="Email">
            </a>
        </div>
        <p class="text-gray-500 text-sm">2025 TheMediteran All rights reserved</p>
    </footer>    

    <div class="fixed bottom-5 right-5">
        <a href="https://wa.me/+6289682912192" class="block w-20 h-20 bg-green-500 rounded-full flex items-center justify-center text-white text-xl shadow-lg">
            <img src="img/whatsapp.png" alt="">
        </a>
    </div>

    <script>
        const fadeUps = document.querySelectorAll(".fade-up");

        const appearOptions = {
        threshold: 0.2, // Elemen dianggap terlihat saat 20% masuk viewport
        };

        const appearOnScroll = new IntersectionObserver(function (
        entries,
        appearOnScroll
        ) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
            entry.target.classList.add("active");
            //appearOnScroll.unobserve(entry.target); // Hapus baris ini
            } else {
                entry.target.classList.remove("active");
            }
        });
        },
        appearOptions);

        fadeUps.forEach((fadeUp) => {
        appearOnScroll.observe(fadeUp);
        });
    </script>
</body>
</html>
