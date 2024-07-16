@extends('app')
@section('body')
    @include('navbar-home')

<nav class="bg-gray-400 border-gray-400 dark:border-gray-600 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <button data-collapse-toggle="mega-menu-full" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-full" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        
        <div id="mega-menu-full" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                </li>
                <li>
                    <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Company <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg></button>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Resources</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="mega-menu-full-dropdown" class="mt-1 bg-gray-400 border-gray-400 shadow-sm border-y dark:bg-gray-800 dark:border-gray-600">
        <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button">
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Visi Kami</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Visi Kami: Menjadi platform terdepan dalam pendidikan teknologi mesin, yang memberdayakan generasi masa depan dengan pengetahuan dan keterampilan praktis di bidang teknik mesin.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Misi Kami</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Misi Kami: Menyediakan materi edukasi yang komprehensif, praktis, dan mudah diakses untuk semua tingkat pembelajaran, dari pemula hingga profesional.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Tentang Platform Kami</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Tentang Platform Kami: Platform edukasi alat mesin kami dirancang untuk menyediakan sumber belajar yang interaktif dan mutakhir tentang berbagai jenis mesin dan teknologi terbaru di industri.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Kerjasama dengan Industri</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Kerjasama dengan Industri: Kami bekerja sama dengan perusahaan dan organisasi terkemuka di industri untuk memastikan bahwa materi yang kami sampaikan relevan dengan kebutuhan pasar kerja dan teknologi terbaru. untuk memastikan bahwa materi yang kami sampaikan relevan dengan kebutuhan pasar kerja dan teknologi terbaru.</span>
                    </a>
                </li>
                
            </ul>
            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Tim Kami</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Tim Kami: Kami terdiri dari para ahli di bidang teknik mesin, insinyur berpengalaman, dan pendidik profesional yang berdedikasi untuk membantu Anda memahami dan menguasai teknologi mesin.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold"> Program dan Kursus</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Program dan Kursus: Kami menawarkan berbagai kursus mulai dari pengenalan dasar mesin hingga teknik lanjutan. Program kami mencakup pembelajaran teori, simulasi praktis, dan latihan langsung.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Keunggulan Kami</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Keunggulan Kami: Platform kami menggunakan pendekatan pembelajaran yang inovatif dan berfokus pada aplikasi praktis, didukung oleh teknologi mutakhir untuk memberikan pengalaman belajar yang optimal.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Testimoni Pengguna</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Testimoni Pengguna: Banyak pengguna kami telah mencapai kesuksesan di bidang teknik mesin setelah mengikuti kursus kami. Kami bangga dengan dampak positif yang kami berikan kepada mereka. Kami bangga dengan dampak positif yang kami berikan kepada mereka.</span>
                    </a>
                </li>
                
            </ul>
            <ul class="hidden md:block">
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Kontak Kami</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Kontak Kami: Jika Anda memiliki pertanyaan, saran, atau ingin tahu lebih lanjut tentang program kami, jangan ragu untuk menghubungi kami melalui email di info@platformedukasi.com atau telepon di (021) 123-4567</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Sejarah Kami</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Sejarah Kami: Platform ini didirikan oleh sekelompok insinyur dan pendidik yang berkomitmen untuk membawa pendidikan teknik mesin ke tingkat yang lebih tinggi. Dengan pengalaman bertahun-tahun di industri dan pendidikan, kami berusaha untuk membuat pembelajaran teknologi mesin dapat diakses oleh semua orang.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold"> Metodologi Pengajaran</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Metodologi Pengajaran: Kami menggunakan metode pengajaran yang berpusat pada siswa, yang mencakup pendekatan praktis, studi kasus nyata, dan simulasi interaktif. Kami percaya bahwa pembelajaran yang efektif harus melibatkan pengalaman langsung dan penerapan teori ke dalam praktik.</span>
                    </a>
                </li>
                
               
            </ul>
            
        </div>
    </div>
</nav>
@include('footer')

@endsection