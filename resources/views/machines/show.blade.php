@extends('app')
@section('body')
    @include('navbar-home')
<div class="container mx-auto my-7">
    <h1 class="text-2xl font-bold mb-4">{{ $machine->name }}</h1>
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <img src="{{ asset('storage/' . $machine->photo) }}" alt="{{ $machine->name }}" class="w-full h-50 md:h-43 object-cover">
      <!-- Konten lainnya -->
  </div>
  
            @if($machine->type == 'mesinragum')
            
              <div class="flex">
                  <div class="w-1/3">
                      <nav id="list-example" class="flex flex-col space-y-2">
                          <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-1">Penjelasan</a>
                          <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-2">Spesifikasi</a>
                          <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-3">Karakteristik</a>
                          <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-4">Aplikasi</a>
                          <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-5">Referensi</a>
                      </nav>
                  </div>
                  <div class="w-2/3 pl-4">
                      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                          <h2 id="list-item-1" class="text-xl font-semibold">Ragum</h2>
                          <p>Ragum (bench vise atau machine vise) adalah alat yang digunakan untuk memegang atau menjepit benda kerja dengan kuat agar tidak bergerak selama proses pengerjaan seperti pemotongan, penggerindaan, pengeboran, atau pengelasan. Ragum sering digunakan di bengkel, industri manufaktur, dan dalam berbagai pekerjaan permesinan.</p>
                          <h2 id="list-item-2" class="text-xl font-semibold mt-4">Spesifikasi</h2>
                          <p>Lebar rahang: 15 cm</p>
                          <p>Kedalaman rahang: 7,5 cm</p>
                          <p>Lebar tenggorokan: 10 cm</p>
                          <p>Panjang handle: 30 cm</p>
                          <p>Berat: 5 kg</p>
                          <h2 id="list-item-3" class="text-xl font-semibold mt-4">Karakteristik</h2>
                          <p><strong>Base:</strong> Bagian dasar ragum yang dipasang pada meja kerja atau permukaan kokoh lainnya. Base ini memberikan platform yang stabil untuk ragum beroperasi.</p>
                          <p><strong>Rahang (Jaw):</strong> Bagian rahang yang bergerak dan mencengkeram benda kerja. Rahang biasanya terbuat dari baja yang dikeraskan dan memiliki permukaan bergerigi untuk memberikan cengkeraman yang aman.</p>
                          <p><strong>Sekrup (Screw):</strong> Digunakan untuk mengencangkan dan melonggarkan rahang, memungkinkan ragum untuk menampung benda kerja dengan berbagai ketebalan.</p>
                          <p><strong>Handle:</strong> Digunakan untuk memutar sekrup dan memberikan tekanan pada rahang. Handle biasanya terbuat dari bahan yang nyaman, seperti kayu atau karet, untuk memberikan pegangan yang baik.</p>
                          <h2 id="list-item-4" class="text-xl font-semibold mt-4">Aplikasi</h2>
                          <h6 class="font-bold">Menjepit benda kerja untuk filing, gergaji, dan pengeboran</h6>
                          <p>Ragum dapat digunakan untuk menjepit benda kerja dengan aman saat diajukan, digergaji, atau dibor. Hal ini mencegah benda kerja bergerak dan membantu memastikan hasil yang akurat.</p>
                          <h6 class="font-bold">Membengkokkan dan membentuk logam</h6>
                          <p>Ragum dapat digunakan untuk membengkokkan dan membentuk logam dengan menerapkan tekanan pada benda kerja dengan rahang.</p>
                          <h6 class="font-bold">Menahan benda kerja untuk perakitan</h6>
                          <p>Ragum dapat digunakan untuk menahan benda kerja dengan aman saat dirakit. Ini dapat membantu untuk tugas-tugas seperti menyolder, mengelas, dan merekatkan.</p>
                          <h2 id="list-item-5" class="text-xl font-semibold mt-4">Referensi</h2>
                          <h6 class="font-bold">Materi dan Penjelasan</h6>
                          <p>Pengertian dan Fungsi Ragum: <a href="https://www.irjet.net/archives/V4/i6/IRJET-V4I6509.pdf" class="text-blue-500 hover:underline">https://www.irjet.net/archives/V4/i6/IRJET-V4I6509.pdf</a></p>
                          <p>Jenis-Jenis Ragum: <a href="https://www.tokopedia.com/find/ragum-milling" class="text-blue-500 hover:underline">https://www.tokopedia.com/find/ragum-milling</a></p>
                          <p>Bagian-Bagian Ragum: <a href="https://www.irjet.net/archives/V4/i6/IRJET-V4I6509.pdf" class="text-blue-500 hover:underline">https://www.irjet.net/archives/V4/i6/IRJET-V4I6509.pdf</a></p>
                          <p>Cara Menggunakan Ragum: <a href="https://lapendosfaster.blogspot.com/2019/04/cara-menggunakan-ragum.html" class="text-blue-500 hover:underline">https://lapendosfaster.blogspot.com/2019/04/cara-menggunakan-ragum.html</a></p>
                          <p>Tips Merawat Ragum: <a href="https://www.irjet.net/archives/V4/i6/IRJET-V4I6509.pdf" class="text-blue-500 hover:underline">https://www.irjet.net/archives/V4/i6/IRJET-V4I6509.pdf</a></p>
                          <h6 class="font-bold">Video YouTube</h6>
                          <p>CATOK PARON RAGUM PUTAR BENCH VISE 4 INCH HEAVY DUTY INGCO: <a href="https://m.youtube.com/user/ManSeeksCivic" class="text-blue-500 hover:underline">https://m.youtube.com/user/ManSeeksCivic</a> oleh Freddy Channel</p>
                          <p>Ragum Tanggem Catok Ragum Tilting Vise Milling Bor: <a href="https://www.youtube.com/watch?v=idqlh7kC9i8" class="text-blue-500 hover:underline">https://www.youtube.com/watch?v=idqlh7kC9i8</a> oleh Den Jaka</p>
                          <p>Review alat catok atau ragum benz no 4 100mm || MJM Channel: <a href="https://www.youtube.com/watch?v=HDFUHml10EU" class="text-blue-500 hover:underline">https://www.youtube.com/watch?v=HDFUHml10EU</a> oleh Belajar Mekanik Dari Nol</p>
                      </div>
                  </div>
            @elseif($machine->type == 'mesinbubut')
            
            
            <div class="flex flex-col lg:flex-row mt-4">
              <div class="w-full lg:w-1/4">
                <nav class="flex flex-col space-y-2">
                  <a class="py-2 font-bold hover:text-blue-500 focus:text-blue-700 active:text-blue-700" href="#list-item-1">Penjelasan</a>
                  <a class="py-2 font-bold hover:text-blue-500 focus:text-blue-700 active:text-blue-700" href="#list-item-2">Cara Kerja</a>
                  <a class="py-2 font-bold hover:text-blue-500 focus:text-blue-700 active:text-blue-700" href="#list-item-3">Mesin Bubut Konvensional</a>
                  <a class="py-2 font-bold hover:text-blue-500 focus:text-blue-700 active:text-blue-700" href="#list-item-4">Komponen Dan Fungsi</a>
                  <a class="py-2 font-bold hover:text-blue-500 focus:text-blue-700 active:text-blue-700" href="#list-item-5">Pengaplikasian</a>
                  <a class="py-2 font-bold hover:text-blue-500 focus:text-blue-700 active:text-blue-700" href="#list-item-6">Referensi</a>
              </nav>
              
              
              </div>
              <div class="w-full lg:w-3/4 mt-4 lg:mt-0" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
                  <h2 id="list-item-1" class="text-xl font-bold">Mesin Bubut</h2>
                  <p>Mesin bubut adalah suatu mesin perkakas yang membuang bahan – bahan yang tidak diinginkan atau tidak dibutuhkan dari suatu benda kerja yang berputar dan dicengkram di chuck atau pencengkram, kemudian akan disayat dengan mata pisau atau tool yang diseting sesuai dengan pengerjaan dan untuk kedalam potong serta kecepatan potong akan diatur melalui eretan melintang dan memanjang sesuai dengan kebutuhan.</p>
                  <h2 id="list-item-2" class="text-xl font-bold mt-4">Cara Kerja</h2>
                  <h6 class="font-semibold mt-2">Pemasangan Benda Kerja</h6>
                  <p>Sebelum memulai proses pemotongan, operator mesin bubut harus memasang benda kerja ke dalam mesin. Benda kerja biasanya dipasang pada spindle atau chuck mesin bubut, yang akan memutar benda kerja. Pastikan benda kerja terpasang dan dicengkram sempurna pada chuck serta pastikan benda kerja ketika spindle berputar dalam keadaan stabil</p>
                  <h6 class="font-semibold mt-2">Pemasangan Alat Pemotong (Pahat)</h6>
                  <p>Operator memasang alat pemotong (pahat) pada alat pemotong (tool holder) mesin bubut. Pahat akan memiliki berbagai bentuk dan ukuran sesuai dengan jenis pemotongan yang diperlukan.</p>
                  <h6 class="font-semibold mt-2">Penentuan Kecepatan Putaran</h6>
                  <p>Operator harus memilih kecepatan putaran yang sesuai dengan bahan benda kerja dan jenis pahat yang digunakan. Ini sangat penting untuk menghindari keausan berlebihan pada pahat dan mendapatkan hasil pemotongan yang baik.</p>
                  <h6 class="font-semibold mt-2">Pengaturan Alat Pemotong</h6>
                  <p>Operator mengatur alat pemotong ke posisi awal yang tepat dan merencanakan langkah pemotongan (depth of cut) serta laju pemotongan (feed rate) yang sesuai. Biasasnya proses ini sering dinamakan dengan menentukan titik nol pemakanan.</p>
                  <h6 class="font-semibold mt-2">Pemotongan Benda Kerja</h6>
                  <p>Mesin bubut mulai memotong benda kerja dengan menggerakkan pahat ke arah benda tersebut. Pahat akan menghilangkan material atau bahan dari benda kerja yang tidak terpakai, menciptakan bentuk yang diinginkan.</p>
                  <h6 class="font-semibold mt-2">Pengawasan dan Pengendalian Proses</h6>
                  <p>Selama pemotongan, operator memantau kondisi mesin dan kualitas hasil pemotongan. Operator dapat membuat penyesuaian jika hasil atau proses selama pengerjaan tidak sesuai dengan procedure kerja yang telah di tetapkan.</p>
                  <h6 class="font-semibold mt-2">Penggantian Benda Kerja</h6>
                  <p>Setelah pemotongan selesai, benda kerja dapat dilepaskan dari chuck mesin dan diganti dengan benda kerja lain jika diperlukan.</p>
                  <h2 id="list-item-3" class="text-xl font-bold mt-4">Mesin Bubut Konvensional</h2>
                  <p>Mesin bubut ini memiliki desain yang sederhana dan menggunakan kontrol manual. Operator menggerakkan pahat secara manual untuk memotong benda kerja dengan gerakkan maju dan mundur terhadap permukaan tersebut.</p>
                  <h2 id="list-item-4" class="text-xl font-bold mt-4">Komponen Dan Fungsi</h2>
                  <h6 class="font-semibold mt-2">Kepala Tetap (Head Stock)</h6>
                  <p>Kepala tetap terdiri dari poros spindle mesin yang berfungsi sebagai tempat dudukan atau cekam sehingga benda kerja dapat dicekam dan dapat berputar untuk proses pembubutan.</p>
                  <h6 class="font-semibold mt-2">Kepala lepas (Tail Stock)</h6>
                  <p>Kepala lepas digunakan untuk center benda kerja yang panjang yang akan dikerjakan pada mesin bubut dan sering di gunakan untuk proses pengeboran kepala lepas juga dapat digese sepanjang alas (bad).</p>
                  <h6 class="font-semibold mt-2">Eretan Memanjang</h6>
                  <p>Berfungsi untuk melakukan gerakan pemakanan arah dan memanjang sejaja dengan sumbu kerja, atau bisa dibilang gerakan mendekat dan menjauhi chuck. Eretan ini juga ada yang menyebutnya sebagai eretan bawah.</p>
                  <h6 class="font-semibold mt-2">Eretan Melintang</h6>
                  <p>berfungsi untuk melakukan gerakan pemakanan arah melintang sumbu benda kerja.</p>
                  <h6 class="font-semibold mt-2">Eretan atas</h6>
                  <p>Eretan atas atau eretan kombinasi memiliki fungsi untuk melakukan gerakan pemakanan ke arah sudut yang diinginkan sesuai penyetelannya.</p>
                  <h6 class="font-semibold mt-2">Rumah pahat</h6>
                  <p>Berfungsi sebagai tempat pahat pada mesin bubut. Rumah pahat dapat dibedakan menjadi rumah pahat yang bisa di stel dan rumah pahat standar.</p>
                  <h6 class="font-semibold mt-2">Rangka utama</h6>
                  <p>Rangka utama berfungsi sebagai tempat menempelnya komponen komponen utama yang akan berhubungan dengan kompnen yan lainnya.</p>
                  <h6 class="font-semibold mt-2">Chuck</h6>
                  <p>Berfungsi sebagai pencekap untuk benda kerja dan bagian yang berputar atau spindle.</p>
                  <h6 class="font-semibold mt-2">Lead screw</h6>
                  <p>Lead screw adalah bagian yang digunakan untuk mengontrol pergerakan alat pemotong dengan ketelitian tinggi. Ini dapat dikendalikan secara manual atau dengan penggerak otomatis, terutama pada mesin bubut CNC.</p>
                  <h6 class="font-semibold mt-2">Cooling System</h6>
                  <p>Sistem pendingin digunakan untuk menjaga suhu alat pemotong dan benda kerja agar tidak terlalu panas selama pemotongan. Ini dapat menghindari deformasi dan pemusnahan pada benda kerja dan pahat.</p>
                  <h6 class="font-semibold mt-2">Bed (Badan Mesin)</h6>
                  <p>Bed adalah struktur utama mesin bubut yang mendukung semua komponen lainnya. Ini biasanya terbuat dari bahan yang kuat dan stabil, seperti besi cor atau baja. Bed harus dirancang dengan sangat baik untuk memastikan kestabilan dan presisi mesin.</p>
                  <h2 id="list-item-5" class="text-xl font-bold mt-4">Pengaplikasian Mesin Bubut</h2>
                  <p>Mesin bubut bisa dikatakan adalah jantungnya permesinan, mengapa seperti itu karena mesin ini memiliki fungsi yang sangat vital dalam pengerjaannya hampir setiap proses pada fabrikasi melalui mesin bubut. Mesin bubut juga digunakan dalam berbagai industri, termasuk manufaktur, permesinan, otomotif, dirgantara dan masih banyak lagi. Mesin bubut digunakan untuk membuat berbagai komponen, seperti poros, baut, bantalan, gigi, dan komponen presisi lainnya. Dengan perkembangan teknologi CNC, mesin bubut semakin canggih dan dapat menghasilkan produk dengan toleransi yang sangat ketat. Ini menjadikannya alat yang sangat penting dalam dunia manufaktur modern.</p>
                  <h2 id="list-item-6" class="text-xl font-bold mt-4">Referensi</h2>
                  <h6 class="font-semibold mt-2">Materi dan penejelasan</h6>
                  <p>Pengertian dan Fungsi Mesin Bubut: <a href="https://id.wikipedia.org/wiki/Mesin_bubut" class="text-blue-500">Wikipedia</a></p>
                  <p>Bagian-Bagian Utama Mesin Bubut: <a href="https://www.academia.edu/38252773/Pengertian_Mesin_Bubut_Bagian_Utama_dan_Fungsinya_docx" class="text-blue-500">Academia</a></p>
                  <p>Jenis-Jenis Mesin Bubut: <a href="https://kumparan.com/kabar-harian/jenis-jenis-mesin-bubut-dan-bagian-bagiannya-21ct8hYuhl0" class="text-blue-500">Kumparan</a></p>
                  <p>Cara Kerja Mesin Bubut: <a href="https://www.majujayamachinery.com/blog-id/category/mesin-bubut" class="text-blue-500">Maju Jaya Machinery</a></p>
                  <p>Alat-Alat Pada Mesin Bubut: <a href="https://www.scribd.com/document/436194955/Mesin-Bubut" class="text-blue-500">Scribd</a></p>
                  <p>Operasi Dasar Pada Mesin Bubut: <a href="https://id.scribd.com/presentation/401864238/presentasi-teori-mesin-bubut-dasar" class="text-blue-500">Scribd</a></p>
                  <h6 class="font-semibold mt-2">Video YouTube</h6>
                  <p>Mengenal Mesin Bubut: <a href="https://www.youtube.com/watch?v=yPXN8V9oES0" class="text-blue-500">YouTube oleh Teknik Mesin Otomotif SMKN 1 Salatiga</a></p>
                  <p>Cara Kerja Mesin Bubut: <a href="https://www.youtube.com/watch?v=UsaKO0V8OFE" class="text-blue-500">YouTube oleh Kang Dayat</a></p>
                  <p>Bagian-Bagian Mesin Bubut dan Fungsinya: <a href="https://m.youtube.com/watch?v=HDFUHml10EU" class="text-blue-500">YouTube oleh SMK Negeri 1 Sidoarjo</a></p>
                  <p>Cara Mengoperasikan Mesin Bubut: <a href="https://www.youtube.com/watch?v=Ka1D72fD1TQ" class="text-blue-500">YouTube oleh Kang Dayat</a></p>
                  <p>Tips Merawat Mesin Bubut: <a href="https://m.youtube.com/watch?v=5_5K__mda_Y" class="text-blue-500">YouTube oleh Teknik Mesin Otomotif SMKN 1 Salatiga</a></p>
              </div>
          </div>
          @elseif($machine->type == 'mesinfrais')
          <div class="flex">
            <div class="w-1/3">
                <nav id="list-example" class="flex flex-col space-y-2">
                    <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-1">Penjelasan</a>
                    <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-2">Cara Kerja</a>
                    <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-3">Spesifikasi Umum</a>
                    <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-4">Spesifikasi Mesin</a>
                    <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-5">Aplikasi</a>
                    <a class="py-2 font-bold hover:bg-gray-200" href="#list-item-6">Referensi</a>
                </nav>
            </div>
            <div class="w-2/3 pl-4">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="overflow-y-auto h-96">
                    <h2 id="list-item-1" class="text-xl font-semibold mt-4">Mesin Frais/Milling</h2>
                    <p class="mb-4">Mesin frais (milling machine) adalah salah satu jenis mesin perkakas yang digunakan untuk mengerjakan logam atau bahan lainnya dengan menggunakan alat potong yang berputar. Mesin ini dapat digunakan untuk berbagai operasi pemotongan, seperti meratakan permukaan, memotong alur, membuat lubang, dan banyak lagi.</p>
                    <h2 id="list-item-2" class="text-xl font-semibold mt-4">Cara Kerja</h2>
                    <p class="mb-2">1. Benda kerja dijepit pada meja mesin.</p>
                    <p class="mb-2">2. Spindle diputar dengan kecepatan yang sesuai.</p>
                    <p class="mb-2">3. Alat potong dimasukkan ke dalam collet dan dikencangkan.</p>
                    <p class="mb-2">4. Meja mesin digerakkan secara longitudinal (sumbu X) dan transversal (sumbu Y) untuk memposisikan benda kerja sesuai dengan bentuk yang diinginkan.</p>
                    <p class="mb-2">5. Spindle diturunkan secara vertikal (sumbu Z) untuk melakukan pemesinan pada benda kerja.</p>
                    <p class="mb-4">6. Proses pemesinan diulang hingga bentuk yang diinginkan tercapai.</p>
                    <h2 id="list-item-3" class="text-xl font-semibold mt-4">Spesifikasi Umum</h2>
                    <p class="mb-2">Ukuran meja: Ukuran meja biasanya dinyatakan dalam panjang, lebar, dan tinggi.</p>
                    <p class="mb-2">Perjalanan sumbu: Perjalanan sumbu adalah jarak maksimum yang dapat ditempuh spindle dalam setiap sumbu.</p>
                    <p class="mb-2">Kecepatan spindle: Kecepatan spindle adalah jumlah putaran spindle per menit (RPM).</p>
                    <p class="mb-2">Torsi spindle: Torsi spindle adalah gaya putar yang dihasilkan oleh spindle.</p>
                    <p class="mb-2">Daya motor: Daya motor adalah daya yang digunakan oleh motor penggerak spindle.</p>
                    <p class="mb-2">Kapasitas collet: Kapasitas collet adalah diameter maksimum shank alat potong yang dapat digunakan.</p>
                    <p class="mb-4">Berat mesin: Berat mesin adalah berat keseluruhan mesin.</p>
                    <h2 id="list-item-4" class="text-xl font-semibold mt-4">Spesifikasi Mesin</h2>
                    <p class="mb-2">Ukuran meja: 1000 x 500 mm</p>
                    <p class="mb-2">Perjalanan sumbu X: 800 mm</p>
                    <p class="mb-2">Perjalanan sumbu Y: 500 mm</p>
                    <p class="mb-2">Perjalanan sumbu Z: 400 mm</p>
                    <p class="mb-2">Kecepatan spindle: 500 - 5000 RPM</p>
                    <p class="mb-2">Torsi spindle: 50 - 200 Nm</p>
                    <p class="mb-2">Daya motor: 5 HP</p>
                    <p class="mb-2">Kapasitas collet: 10 mm</p>
                    <p class="mb-4">Berat mesin: 1500 kg</p>
                    <h2 id="list-item-5" class="text-xl font-semibold mt-4">Aplikasi</h2>
                    <h6 class="font-bold mt-2">Pemesinan permukaan datar</h6>
                    <p class="mb-2">Mesin ini dapat digunakan untuk membuat permukaan datar pada benda kerja.</p>
                    <h6 class="font-bold mt-2">Pembuatan alur</h6>
                    <p class="mb-2">Mesin ini dapat digunakan untuk membuat alur pada benda kerja.</p>
                    <h6 class="font-bold mt-2">Pembuatan lubang</h6>
                    <p class="mb-2">Mesin ini dapat digunakan untuk membuat lubang pada benda kerja.</p>
                    <h6 class="font-bold mt-2">Pembuatan profil</h6>
                    <p class="mb-2">Mesin ini dapat digunakan untuk membuat profil pada benda kerja.</p>
                    <h6 class="font-bold mt-2">Pembuatan kontur</h6>
                    <p class="mb-4">Mesin ini dapat digunakan untuk membuat kontur pada benda kerja.</p>
                    <h2 id="list-item-6" class="text-xl font-semibold mt-4">Referensi</h2>
                    <h6 class="font-bold mt-2">Materi</h6>
                    <p class="mb-2">Pengertian dan Fungsi Mesin Frais/Miring: <a href="https://digilib.polban.ac.id/download.php?id=17263" class="text-blue-500 hover:underline">https://digilib.polban.ac.id/download.php?id=17263</a></p>
                    <p class="mb-2">Cara Kerja Mesin Frais/Miring: <a href="https://www.academia.edu/34849915/2_Mesin_Frais_Milling_2_1_Prinsip_Kerja" class="text-blue-500 hover:underline">https://www.academia.edu/34849915/2_Mesin_Frais_Milling_2_1_Prinsip_Kerja</a></p>
                    <p class="mb-2">Jenis-Jenis Mesin Frais/Miring: <a href="https://www.pengelasan.net/jenis-mesin-frais/" class="text-blue-500 hover:underline">https://www.pengelasan.net/jenis-mesin-frais/</a></p>
                    <h6 class="font-bold mt-2">Video YouTube</h6>
                    <p class="mb-2">Mesin Frais/Miring | Cara Kerja dan Fungsinya: <a href="https://carakami.com/mesin-frais-horizontal/" class="text-blue-500 hover:underline">https://carakami.com/mesin-frais-horizontal/</a> oleh Teknik Mesin Otomotif SMKN 1 Salatiga</p>
                </div>
            </div>
        </div>
        @elseif($machine->type == 'mesinbandsaw')
        
            <div class="col-8">
              <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h2 id="list-item-1">Mesin Bandsaw</h2>
                <div class="flex flex-col space-y-2">
                  <a href="#list-item-1" class="text-blue-500 hover:underline">Penjelasan</a>
                  <a href="#list-item-2" class="text-blue-500 hover:underline">Spesifikasi Umum</a>
                  <a href="#list-item-3" class="text-blue-500 hover:underline">Fitur Tambahan</a>
                  <a href="#list-item-4" class="text-blue-500 hover:underline">Spesifikasi Mesin</a>
                  <a href="#list-item-5" class="text-blue-500 hover:underline">Identifikasi</a>
                  <a href="#list-item-6" class="text-blue-500 hover:underline">Referensi</a>
       
      <div class="overflow-y-auto h-96" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
          <h2 id="list-item-1" class="text-2xl font-bold my-4">Mesin Bandsaw</h2>
          <p class="mb-4">Mesin bandsaw adalah alat pemotong yang menggunakan pisau berupa pita panjang dengan gigi-gigi di salah satu sisinya. Pisau ini berputar di antara dua roda yang memegang dan menggerakkannya secara terus-menerus. Mesin bandsaw digunakan untuk memotong berbagai material seperti kayu, logam, atau plastik. Mesin ini sangat serbaguna dan dapat menghasilkan potongan lurus maupun lengkung dengan presisi tinggi.</p>
          <h2 id="list-item-2" class="text-2xl font-bold my-4">Spesifikasi Umum</h2>
          <p class="mb-4">Tipe Pisau: Pita panjang dengan gigi yang dirancang khusus untuk memotong logam.</p>
          <p class="mb-4">Ukuran Pisau: Bervariasi tergantung model, biasanya memiliki panjang sekitar 2-3 meter dan lebar 1-2 cm.</p>
          <p class="mb-4">Kapasitas Potong: Mesin bandsaw dapat memotong benda kerja dengan diameter hingga beberapa puluh cm, tergantung pada ukuran mesin.</p>
          <p class="mb-4">Kecepatan Pisau: Dapat diatur untuk berbagai kecepatan, biasanya dalam kisaran 20-100 meter per menit.</p>
          <p class="mb-4">Motor Penggerak: Motor listrik dengan daya yang bervariasi, umumnya antara 1-3 HP untuk model-model standar.</p>
          <p class="mb-4">Fitur Keselamatan: Tombol darurat, penutup pelindung pisau, dan mekanisme pengunci untuk memastikan keselamatan operator.</p>
          <p class="mb-4">Ukuran Meja Kerja: Meja kerja yang stabil dan kuat, dengan ukuran bervariasi tergantung model, seringkali antara 300-600 mm.</p>
          <h2 id="list-item-3" class="text-2xl font-bold my-4">Fitur Tambahan</h2>
          <p class="mb-4">Sistem Pendingin: Untuk menjaga suhu pisau dan benda kerja agar tidak terlalu panas selama proses pemotongan.</p>
          <p class="mb-4">Penyesuaian Tegangan Pisau: Untuk memastikan pisau tetap tegang dan bekerja dengan optimal.</p>
          <p class="mb-4">Panduan Pisau: Panduan atas dan bawah untuk memastikan pisau tetap lurus selama pemotongan.</p>
          <h2 id="list-item-4" class="text-2xl font-bold my-4">Spesifikasi Mesin</h2>
          <p class="mb-4">Merek dan model mesin</p>
          <p class="mb-4">Kapasitas potong</p>
          <p class="mb-4">Kecepatan pisau</p>
          <p class="mb-4">Daya motor</p>
          <p class="mb-4">Fitur tambahan</p>
          <h2 id="list-item-5" class="text-2xl font-bold my-4">Identifikasi</h2>
          <p class="mb-4">Label Informasi: Mesin ini memiliki label informasi yang mungkin mencakup spesifikasi teknis. Label ini biasanya mencantumkan nama model, kapasitas potong, kecepatan pisau, dan daya motor.</p>
          <p class="mb-4">Tombol Kontrol: Mesin dilengkapi dengan panel kontrol yang memiliki tombol start, stop, dan mungkin juga pengaturan kecepatan.</p>
          <p class="mb-4">Sistem Pendingin: Terdapat pipa kecil yang mengarah ke area potong, menunjukkan adanya sistem pendingin untuk menjaga suhu pisau dan benda kerja.</p>
          <p class="mb-4">Roda dan Mobilitas: Mesin dilengkapi dengan roda, memungkinkan mobilitas yang lebih mudah.</p>
          <p class="mb-4">Struktur Rangka: Terlihat kokoh dengan meja kerja yang memungkinkan penempatan benda kerja yang stabil.</p>
          <h2 id="list-item-6" class="text-2xl font-bold my-4">Referensi</h2>
          <h6 class="text-xl font-semibold">Materi</h6>
          <p class="mb-4">Pengertian dan Fungsi Mesin Bandsaw: <a href="https://perpustakaan.poltektegal.ac.id/index.php?p=fstream-pdf&fid=22847&bid=4208576" class="text-blue-500 hover:underline">https://perpustakaan.poltektegal.ac.id/index.php?p=fstream-pdf&fid=22847&bid=4208576</a></p>
          <p class="mb-4">Cara Kerja Mesin Bandsaw: <a href="http://repository.untag-sby.ac.id/19792/9/JURNAL.pdf" class="text-blue-500 hover:underline">http://repository.untag-sby.ac.id/19792/9/JURNAL.pdf</a></p>
          <p class="mb-4">Jenis-Jenis Mesin Bandsaw: <a href="https://sinarhimalaya.com/news/mesin-dan-perlengkapan/jenis-bandsaw/" class="text-blue-500 hover:underline">https://sinarhimalaya.com/news/mesin-dan-perlengkapan/jenis-bandsaw/</a></p>
          <h6 class="text-xl font-semibold">Video YouTube</h6>
          <p class="mb-4">Mesin Bandsaw | Cara Kerja dan Fungsinya: <a href="https://www.yakinmaju.com/en/news/detail/jenis_mesin_bandsaw_dan_fungsinya" class="text-blue-500 hover:underline">https://www.yakinmaju.com/en/news/detail/jenis_mesin_bandsaw_dan_fungsinya</a> oleh Teknik Mesin Otomotif SMKN 1 Salatiga</p>
          <p class="mb-4">Cara Menggunakan Mesin Bandsaw yang Benar: <a href="https://id.cnbandsaw.com/info/how-to-operate-the-sawing-machine-correctly-29950532.html" class="text-blue-500 hover:underline">https://id.cnbandsaw.com/info/how-to-operate-the-sawing-machine-correctly-29950532.html</a> oleh Kang Dayat</p>
          <p class="mb-4">Tips Memilih Mesin Bandsaw yang Tepat: <a href="https://metalextra.com/tips-memilih-mesin-bandsaw-yang-benar/" class="text-blue-500 hover:underline">https://metalextra.com/tips-memilih-mesin-bandsaw-yang-benar/</a> oleh Mesin Bandsaw CV. Bintang Teknik</p>
      </div>
  </div>
        @elseif($machine->type == 'mesingerindadatar')
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/3 p-2">
              <div id="list-example" class="bg-white shadow-lg rounded-lg overflow-hidden p-4">
                  <a href="#list-item-1" class="block py-2 px-4 text-blue-500 hover:underline">Penjelasan</a>
                  <a href="#list-item-2" class="block py-2 px-4 text-blue-500 hover:underline">Spesifikasi Umum</a>
                  <a href="#list-item-3" class="block py-2 px-4 text-blue-500 hover:underline">Spesifikasi Mesin</a>
                  <a href="#list-item-4" class="block py-2 px-4 text-blue-500 hover:underline">Aplikasi</a>
                  <a href="#list-item-5" class="block py-2 px-4 text-blue-500 hover:underline">Referensi</a>
              </div>
          </div>
          <div class="w-full md:w-2/3 p-2">
              <div class="overflow-y-auto h-96" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" tabindex="0">
                  <h2 id="list-item-1" class="text-2xl font-bold my-4">Mesin Gerinda Datar</h2>
                  <p class="mb-4">Mesin gerinda datar (surface grinding machine) adalah mesin yang digunakan untuk meratakan dan menghaluskan permukaan benda kerja dengan menggunakan batu gerinda. Mesin ini sangat berguna dalam proses finishing pada berbagai industri, seperti industri otomotif, alat-alat presisi, dan manufaktur umum.</p>
                  
                  <h2 id="list-item-2" class="text-2xl font-bold my-4">Spesifikasi Umum</h2>
                  <p class="mb-4">Ukuran meja: Ukuran meja biasanya dinyatakan dalam panjang, lebar, dan tinggi.</p>
                  <p class="mb-4">Perjalanan sumbu: Perjalanan sumbu adalah jarak maksimum yang dapat ditempuh meja dalam setiap sumbu.</p>
                  <p class="mb-4">Kecepatan spindle: Kecepatan spindle adalah jumlah putaran spindle per menit (RPM).</p>
                  <p class="mb-4">Diameter roda gerinda: Diameter roda gerinda adalah ukuran diameter roda gerinda.</p>
                  <p class="mb-4">Lebar roda gerinda: Lebar roda gerinda adalah ukuran lebar roda gerinda.</p>
                  <p class="mb-4">Daya motor: Daya motor adalah daya yang digunakan oleh motor penggerak spindle.</p>
                  <p class="mb-4">Berat mesin: Berat mesin adalah berat keseluruhan mesin.</p>
                  
                  <h2 id="list-item-3" class="text-2xl font-bold my-4">Spesifikasi Mesin</h2>
                  <p class="mb-4">Ukuran meja: 1000 x 500 mm</p>
                  <p class="mb-4">Perjalanan sumbu X: 800 mm</p>
                  <p class="mb-4">Perjalanan sumbu Y: 500 mm</p>
                  <p class="mb-4">Perjalanan sumbu Z: 400 mm</p>
                  <p class="mb-4">Kecepatan spindle: 500 - 5000 RPM</p>
                  <p class="mb-4">Diameter roda gerinda: 300 mm</p>
                  <p class="mb-4">Lebar roda gerinda: 50 mm</p>
                  <p class="mb-4">Daya motor: 5 HP</p>
                  <p class="mb-4">Berat mesin: 1500 kg</p>
                  
                  <h2 id="list-item-4" class="text-2xl font-bold my-4">Aplikasi</h2>
                  <h6 class="text-xl font-semibold mb-2">Penggerindaan permukaan datar</h6>
                  <p class="mb-4">Mesin ini dapat digunakan untuk membuat permukaan datar yang presisi pada benda kerja.</p>
                  <h6 class="text-xl font-semibold mb-2">Penggerindaan tepi</h6>
                  <p class="mb-4">Mesin ini dapat digunakan untuk menggerinda tepi benda kerja.</p>
                  <h6 class="text-xl font-semibold mb-2">Penggerindaan sudut</h6>
                  <p class="mb-4">Mesin ini dapat digunakan untuk menggerinda sudut benda kerja.</p>
                  <h6 class="text-xl font-semibold mb-2">Pemolesan</h6>
                  <p class="mb-4">Mesin ini dapat digunakan untuk memoles permukaan benda kerja.</p>
                  
                  <h2 id="list-item-5" class="text-2xl font-bold my-4">Referensi</h2>
                  <h6 class="text-xl font-semibold mb-2">Materi dan Penjelasan</h6>
                  <p class="mb-4">Pengertian dan Fungsi Mesin Gerinda Datar:
                      <a href="https://id.scribd.com/doc/307134628/MESIN-GERINDA-ppt" class="text-blue-500 hover:underline">https://id.scribd.com/doc/307134628/MESIN-GERINDA-ppt</a>, 
                      <a href="https://gurupujaz.wordpress.com/2016/11/08/mesin-gerinda-datar-surface-grinding-machine/" class="text-blue-500 hover:underline">https://gurupujaz.wordpress.com/2016/11/08/mesin-gerinda-datar-surface-grinding-machine/</a>, 
                      <a href="https://www.teknikmart.com/blog/jenis-mesin-gerinda-dan-fungsinya/" class="text-blue-500 hover:underline">https://www.teknikmart.com/blog/jenis-mesin-gerinda-dan-fungsinya/</a></p>
                  <p class="mb-4">Cara Kerja Mesin Gerinda Datar:
                      <a href="https://gurupujaz.wordpress.com/2016/11/08/mesin-gerinda-datar-surface-grinding-machine/" class="text-blue-500 hover:underline">https://gurupujaz.wordpress.com/2016/11/08/mesin-gerinda-datar-surface-grinding-machine/</a>, 
                      <a href="https://www.academia.edu/36457142/MAKALAH_MESIN_GERINDA" class="text-blue-500 hover:underline">https://www.academia.edu/36457142/MAKALAH_MESIN_GERINDA</a>, 
                      <a href="https://www.youtube.com/watch?v=uDLirQGKxI0" class="text-blue-500 hover:underline">https://www.youtube.com/watch?v=uDLirQGKxI0</a></p>
                  <p class="mb-4">Bagian-Bagian Mesin Gerinda Datar:
                      <a href="https://gurupujaz.wordpress.com/2016/11/08/mesin-gerinda-datar-surface-grinding-machine/" class="text-blue-500 hover:underline">https://gurupujaz.wordpress.com/2016/11/08/mesin-gerinda-datar-surface-grinding-machine/</a>, 
                      <a href="https://www.youtube.com/watch?v=uDLirQGKxI0" class="text-blue-500 hover:underline">https://www.youtube.com/watch?v=uDLirQGKxI0</a>, 
                      <a href="https://www.academia.edu/36457142/MAKALAH_MESIN_GERINDA" class="text-blue-500 hover:underline">https://www.academia.edu/36457142/MAKALAH_MESIN_GERINDA</a></p>
                  <p class="mb-4">Cara Mengoperasikan Mesin Gerinda Datar:
                      <a href="https://www.youtube.com/watch?v=uDLirQGKxI0" class="text-blue-500 hover:underline">https://www.youtube.com/watch?v=uDLirQGKxI0</a>, 
                      <a href="http://lionnyakbar.blogspot.com/2014/02/mengoperasikan-mesin-gerinda-datar.html" class="text-blue-500 hover:underline">http://lionnyakbar.blogspot.com/2014/02/mengoperasikan-mesin-gerinda-datar.html</a>, 
                      <a href="https://id.scribd.com/document/480669037/MESIN-GERINDA-DATAR-pdf" class="text-blue-500 hover:underline">https://id.scribd.com/document/480669037/MESIN-GERINDA-DATAR-pdf</a></p>
                  
                  <h6 class="text-xl font-semibold mb-2">Video YouTube</h6>
                  <p class="mb-4">Mesin Gerinda Datar | Cara Kerja dan Fungsinya:
                      <a href="https://www.youtube.com/watch?v=uDLirQGKxI0" class="text-blue-500 hover:underline">https://www.youtube.com/watch?v=uDLirQGKxI0</a> oleh Teknik Mesin Otomotif SMKN 1 Salatiga, 
                      <a href="https://www.youtube.com/watch?v=QdJlGsMU15U" class="text-blue-500 hover:underline">https://www.youtube.com/watch?v=QdJlGsMU15U</a> oleh Teknik Otomotif, 
                      <a href="https://id.scribd.com/document/480669037/MESIN-GERINDA-DATAR-pdf" class="text-blue-500 hover:underline">https://id.scribd.com/document/480669037/MESIN-GERINDA-DATAR-pdf</a></p>
              </div>
          </div>
      </div>
      
        @elseif($machine->type == 'mesingerindapedestal')
        <div class="row">
            <div class="col-4">
              <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Penjelasan</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Spesifikasi Umum</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Spesifikasi Mesin</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Aplikasi</a>
                <a class="list-group-item list-group-item-action" href="#list-item-5">Referensi</a>
              </div>
            </div>
            <div class="col-8">
              <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h2 id="list-item-1">Mesin Gerinda Pedestal</h2>
                <p>Mesin gerinda pedestal, juga dikenal sebagai bench grinder atau pedestal grinder, adalah mesin yang digunakan untuk mengasah, memoles, atau menghaluskan benda kerja dengan menggunakan batu gerinda yang dipasang pada kedua ujung poros motor. Mesin ini biasanya dipasang pada pedestal atau meja kerja dan digunakan dalam berbagai aplikasi industri dan bengkel.</p>
                <h2 id="list-item-2">Spesifikasi Umum</h2>
                <p>Diameter roda gerinda: 
                Diameter roda gerinda adalah ukuran diameter roda gerinda.</p>
                <p>Lebar roda gerinda: 
                Lebar roda gerinda adalah ukuran lebar roda gerinda.</p>
                <p>Kecepatan spindle: 
                Kecepatan spindle adalah jumlah putaran spindle per menit (RPM).</p>
                <p>Daya motor: 
                Daya motor adalah daya yang digunakan oleh motor penggerak spindle.</p>
                <p>Tinggi mesin: 
                Tinggi mesin adalah jarak dari permukaan lantai ke bagian atas mesin.</p>
                <p>Berat mesin: 
                Berat mesin adalah berat keseluruhan mesin.</p>
                <h2 id="list-item-3">Spesifikasi Mesin</h2>
                <p>Diameter roda gerinda: 200 mm</p>
                <p>Lebar roda gerinda: 50 mm</p>
                <p>Kecepatan spindle: 3000 - 6000 RPM</p>
                <p>Daya motor: 2 HP</p>
                <p>Tinggi mesin: 1000 mm</p>
                <p>Berat mesin: 500 kg</p>
                <h2 id="list-item-4">Aplikasi</h2>
                <h6>penggerindaan permukaan datar</h6>
                <p>Mesin ini dapat digunakan untuk membuat permukaan datar pada benda kerja.</p>
                <h6>Penggerindaan tepi</h6>
                <p>Mesin ini dapat digunakan untuk menggerinda tepi benda kerja.</p>
                <h6>Penggerindaan sudut</h6>
                <p>Mesin ini dapat digunakan untuk menggerinda sudut benda kerja.</p>
                <h6>Pemolesan</h6>
                <p>Mesin ini dapat digunakan untuk memoles permukaan benda kerja.</p>
                <h6>Penajaman alat potong</h6>
                <p>Mesin ini dapat digunakan untuk menajamkan alat potong seperti pisau, pahat, dan bor.</p>
                <h2 id="list-item-5">Referensi</h2>
                <h6>Materi</h6>
                <p>Pengertian dan Fungsi Mesin Gerinda Pedestal: https://www.indahjaya.com/post/peralatan-industri-jenis-fungsi-dan-cara-memilihnya</p>
                <p>Cara Kerja Mesin Gerinda Pedestal: https://www.youtube.com/watch?v=ORIWtkZ3Ov8</p>
                <p>Bagian-Bagian Mesin Gerinda Pedestal: https://www.youtube.com/watch?v=ORIWtkZ3Ov8</p>
                <p>Cara Mengoperasikan Mesin Gerinda Pedestal: https://www.youtube.com/watch?v=ORIWtkZ3Ov8</p>
                <h6>Video YouTube</h6>
                <p>Mesin Gerinda Duduk 6 Inch Kualitas Bagus Harga Murah: https://www.youtube.com/watch?v=ORIWtkZ3Ov8 oleh nxp shop</p>
                <p>Cara Pasang Dudukan / Stand Gerinda + Review (Angle Grinder): https://www.youtube.com/watch?v=C-4zqOxAN5E oleh KuikTip</p>
                <p>Tips Memilih Mesin Gerinda Pedestal yang Tepat: https://www.youtube.com/watch?v=ORIWtkZ3Ov8 oleh Mesin Gerinda Pedestal CV. Bintang Teknik</p>
              </div>
            </div>
          

        @elseif($machine->type == 'gerindapedetal')
        <div class="row">
            <div class="col-4">
              <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Penjelasan </a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Komponen Dan Spesifikasi</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Keamanan Pengguna</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Prosedur Penggunaan</a>
                <a class="list-group-item list-group-item-action" href="#list-item-5">Referensi</a>
              </div>
            </div>
            <div class="col-8">
              <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h2 id="list-item-1">Gerinda Pedestal</h2>
                <p>Alat gerinda pedestal yang ditampilkan pada gambar adalah mesin gerinda yang biasanya digunakan di bengkel atau industri untuk penggerindaan logam.</p>
                <h2 id="list-item-2">Komponen Dan Spesifikasi</h2>
                <H6>Motor Listrik</H6>
                <p>Daya:
                Biasanya antara 0,5 hingga 3 HP (Horsepower) tergantung pada model dan aplikasi.</p>
                <p>Kecepatan: 
                Umumnya berputar pada kecepatan antara 1.500 hingga 3.600 RPM (Rotations Per Minute).</p>
                <h6>Roda Gerinda</h6>
                <p>Jenis: 
                Bisa berupa roda gerinda kasar (coarse) untuk pengasahan kasar dan roda gerinda halus (fine) untuk pengasahan halus.</p>
                <p>Diameter: 
                Bervariasi, tetapi umum berkisar antara 6 hingga 12 inci.</p>
                <p>Ketebalan: 
                Berbeda tergantung pada aplikasinya, tetapi biasanya sekitar 1 inci.</p>
                <h6>Konstruksi dan Dudukan</h6>
                <p>Material: 
                Dibuat dari besi cor atau baja untuk stabilitas dan daya tahan.</p>
                <p>Stand/Dudukan: 
                Terpasang pada pedestal atau stand yang kokoh untuk mengurangi getaran dan memberikan stabilitas saat pengoperasian.</p>
                <h6>Pelindung dan Penahan</h6>
                <p>Pelindung Mata: 
                Dilengkapi dengan pelindung mata dari kaca atau plastik untuk melindungi operator dari percikan.</p>
                <p>Penahan Roda: 
                Memastikan roda gerinda terpasang dengan aman dan tidak bergeser selama pengoperasian.</p>
                <h6>Sistem Pendinginan</h6>
                <p>Beberapa model dilengkapi dengan sistem pendinginan untuk mencegah overheating pada material yang digerinda.</p>
                <h2 id="list-item-3">Keamanan Penggunaan</h2>
                <p>Pelindung Mata dan Wajah: 
                Selalu gunakan pelindung mata dan wajah untuk melindungi dari percikan dan partikel logam.
                <p>Sarung Tangan: 
                Gunakan sarung tangan untuk melindungi tangan dari luka dan panas.</p>
                <p>Tata Letak yang Aman: 
                Pastikan alat gerinda diletakkan pada permukaan yang stabil dan tidak licin.</p>
                <p>Jaga Jarak: 
                Jangan berdiri sejajar dengan roda gerinda saat pertama kali menyalakannya.</p>
                <h2 id="list-item-4">Prosedur Penggunaan</h2>
                <h6>Persiapan</h6>
                <p>Pastikan area kerja bersih dan bebas dari barang-barang yang tidak perlu.
                Periksa kondisi roda gerinda untuk memastikan tidak ada kerusakan atau retak.</p>
                <h6>Menyalakan Mesin</h6>
                <p>Nyalakan mesin dan biarkan berputar tanpa beban selama beberapa detik untuk memastikan roda dalam kondisi baik.</p>    
                <h6>Proses Penggerindaan</h6>
                <p>Pegang benda kerja dengan kuat dan gerakkan perlahan ke roda gerinda dengan tekanan yang konstan.
                Hindari menekan terlalu keras untuk mencegah roda pecah atau benda kerja terbakar.</p>
                <h6>Setelah Selesai</h6>
                <p>Matikan mesin dan biarkan roda berhenti sepenuhnya sebelum meninggalkan mesin.
                Bersihkan area kerja dan periksa roda gerinda untuk kerusakan.</p>
                <h2 id="list-item-5">Referensi</h2>
                <h6>Materi dan penejelasan</h6>
                <p>Pengertian Mesin Gerinda: Cara Kerja, Jenis-Jenis, Beserta Fungsi: https://stellamariscollege.org/mesin-gerinda/</p>
                <p>Modifikasi Alat Bantu Gerinda Silindris untuk Meningkatkan Fungsi Mesin Bubut: https://www.researchgate.net/publication/338232291_Modifikasi_Alat_Bantu_Gerinda_Silindris_untuk_</p>
                <p>4 Jenis Mesin Gerinda yang Biasa Digunakan Memotong Besi: https://ebook.kawanlama.com/b_oss_kls.pdf</p>
                <p>PEMBUATAN KOMPONEN PENYANGGA SLIDING TABLE MEJA ALAT BANTU ASAH CUTTING TOOL UNTUK GERINDA PEDESTAL: http://etd.repository.ugm.ac.id/penelitian/detail/132618</p>
                <h6>Video YouTube</h6>
                <p>mesin gerinda duduk 6 inch kualitas bagus harga murah by nxp shop oleh nxp shop</p>
                <p>Cara Pasang Dudukan / Stand Gerinda + Review (Angle Grinder) oleh KuikTip</p>
                <p>review mesin gerinda duduk untuk membuat golok untuk menggerinda baja hss , dll#membuat #golok oleh Akang Lukman channel</p>
                <p>Cara Modif Gerinda Tangan Jadi Gerinda Duduk #tutorial #bengkellas #bengkel #tukang #trending #short oleh Dayat Tube TV</p>
                <p>GERINDA DUDUK 7 INC MURAH DARI RYU, PEMOTONG BESI 7 INC TERBAIK HARGA TERJANGKAU, COCOK UNTUK PEMULA oleh WITO SARLAW</p>
              </div>
            </div>
        @elseif($machine->type == 'mesinbor')
        <div class="row">
            <div class="col-4">
              <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="#list-item-1">Penjelasan</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">Komponen Utama</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">Spesifikasi Umum</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Identifikasi</a>
                <a class="list-group-item list-group-item-action" href="#list-item-5">Referensi</a>
              </div>
            </div>
            <div class="col-8">
              <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                <h2 id="list-item-1">Mesin Bor</h2>
                <p>Mesin bor vertikal digunakan untuk membuat lubang pada benda kerja dengan menggunakan mata bor yang berputar. Mesin ini biasanya digunakan dalam pekerjaan manufaktur dan perbengkelan untuk pengeboran logam, kayu, atau material lainnya.</p>
                <h2 id="list-item-2">Komponen Utama</h2>
                <p>Mata Bor (Drill Bit): 
                Bagian yang berputar dan membuat lubang pada material.</p>
                <p>Chuck: 
                  Tempat untuk memasang mata bor.</p>
                <p>Spindle: 
                  Poros yang berputar dan menggerakkan chuck dan mata bor.</p>
                <p>Tuas Pengontrol: 
                  Untuk menurunkan atau menaikkan mata bor.</p>
                <p>Meja Kerja: 
                  Tempat meletakkan benda kerja yang bisa diatur ketinggiannya.</p>
                <p>Motor Penggerak: 
                  Motor listrik yang menggerakkan spindle.</p>
                <p>Kontrol Kecepatan: 
                  Pengaturan kecepatan putaran mata bor.</p>
                <h2 id="list-item-3">Spesifikasi Umum</h2>
                <p>Daya Motor: 
                Mesin bor vertikal biasanya memiliki motor dengan daya mulai dari 0.5 HP hingga 5 HP atau lebih, tergantung pada ukuran dan kapasitas mesin.</p>
                <p>Kecepatan Putar: 
                  Mesin bor ini memiliki beberapa pilihan kecepatan putar yang bisa diatur sesuai kebutuhan, biasanya dalam rentang 100-3000 RPM.</p>
                <p>Ukuran Chuck: 
                  Ukuran chuck yang umum digunakan adalah 13 mm hingga 20 mm, yang menentukan ukuran maksimum mata bor yang bisa dipasang.</p>
                <p>Kapasitas Bor Maksimum: 
                  Kapasitas pengeboran maksimum biasanya sekitar 16 mm hingga 50 mm dalam besi.</p>
                <p>Jarak Spindle ke Meja Kerja: 
                  Jarak ini menunjukkan seberapa besar benda kerja yang dapat ditempatkan di bawah mata bor, biasanya berkisar antara 200 mm hingga 800 mm.</p>
                <p>Ukuran Meja Kerja: 
                  Meja kerja biasanya berukuran antara 200 mm x 200 mm hingga 600 mm x 600 mm.</p>
                <p>Fitur Tambahan: 
                  Termasuk lampu kerja, pengaturan sudut meja, dan sistem pendingin.</p>
                <h2 id="list-item-4">Identifikasi</h2>
                <h6>Mesin Bor di Tengah</h6>
                <P>Terlihat mesin bor yang memiliki panel kontrol di bagian atas dengan tombol start/stop, dan pengaturan kecepatan. Mesin ini kemungkinan besar adalah mesin bor vertikal dengan kontrol kecepatan variabel.</P>
                <h6>Mesin Bor di Kanan</h6> 
                <P>Terlihat mesin bor yang lebih kecil dengan tuas pengontrol manual untuk menurunkan mata bor dan meja kerja yang bisa diatur ketinggiannya.</P>
                <h6>Pedestal Grinder di Kiri</h6> 
                <P>Mesin ini adalah pedestal grinder atau gerinda duduk yang digunakan untuk mengasah atau memoles benda kerja.</P>
                <h2 id="list-item-5">Referensi</h2>
                <h6>Materi</h6>
                <P>Pengertian dan Fungsi Mesin Bor: https://perpustakaan.poltektegal.ac.id/index.php?p=fstream-pdf&fid=18219&bid=12311</P>
                <P>Cara Kerja Mesin Bor: [URL yang tidak valid dihapus]_</P>
                <P>Jenis-Jenis Mesin Bor: https://id.scribd.com/document/394081104/Macam-Macam-Mesin-Bor-Dan-fungsinya</P>
                <h6>Video YouTube</h6>
                <P>Jenis-Jenis Mesin Bor dan Fungsinya: https://juraganmaterial.id/blog/tips-juragan/jenis-mesin-bor oleh Teknik Mesin Otomotif SMKN 1 Salatiga</P>
                <P>Cara Menggunakan Mesin Bor yang Benar: https://www.bumi.info/cara-menggunakan-mesin-bor/ oleh Kang Dayat</P>
                <P>Tips Memilih Mesin Bor yang Tepat: https://www.ruparupa.com/blog/tips-memilih-bor-berkualitas-sesuai-kebutuhan/ oleh Mesin Bor CV. Bintang Teknik</P>
              </div>





          
            @else
                <div class="mt-4">
                    <h3 class="text-lg font-bold">General Machine Details</h3>
                    <p>Other machine-specific details go here.</p>
                </div>
            @endif

            
            </form>
        </div>
    </div>
</div>
@endsection
