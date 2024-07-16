@extends('app')
@section('body')
    @include('navbar-home')
    <body class="bg-gray-100 p-20">
        <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg flex flex-col md:flex-row gap-6">
          <!-- Contact Information -->
    <div class="w-full md:w-1/2">
        <h2 class="text-2xl font-bold mb-4">Hubungi kami</h2>
        <p>"Pelayanan pelanggan adalah prioriras utama kami. Jika anda mengalami kendala atau membutuhkan informasi tambahan tentanf mesin kami, jangan ragu untuk menghubungi tim dukungan kami siap membantu anda"</p>
        <div class="mt-4">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
              </svg>
              
          <h3 class="font-semibold">Alamat</h3>
          <p>Jl. Lohbener Lama No.08, Legok, Kec. Lohbener, Kabupaten Indramayu, Jawa Barat 45252</p>
        </div>
        <div class="mt-4">
            <svg class="w-19 h-14 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 8v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8m18 0-8.029-4.46a2 2 0 0 0-1.942 0L3 8m18 0-9 6.5L3 8"/>
              </svg>
              
          <h3 class="font-semibold">Email</h3>
          <p>eemt@gmail.com</p>
        </div>
        <div class="mt-4">
            <svg class="w-19 h-14 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 6H5m2 3H5m2 3H5m2 3H5m2 3H5m11-1a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2M7 3h11a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm8 7a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
              </svg>
          <h3 class="font-semibold">No Telephon</h3>
          <p>082120120516</p>
        </div>
        <div class="mt-6">
            <svg class="w-19 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
              </svg>
              
          <h3 class="font-semibold">Jam Operasional</h3>
          <p class="mt-2">
            <strong>Senin-Rabu</strong><br>
            
          </p>
          <p class="mt-2">
            <strong>08.00 sd 20.00</strong><br>
            
          </p>
          
        </div>
      </div>
      <!-- Contact Form -->

      <div class="w-full md:w-1/2">
        <h2 class="text-2xl font-bold mb-4">Ada yang bisa kami bantu?</h2>
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contacts.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Tulis Email Anda">
            </div>
            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">Nama depan</label>
                <input type="text" id="first_name" name="first_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Nama Depan">
            </div>
            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Nama belakang</label>
                <input type="text" id="last_name" name="last_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="Nama Belakang">
            </div>
            <div>
                
                  
                <label for="phone" class="block text-sm font-medium text-gray-700" >No Hp</label>
                <input type="text" id="phone" name="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" placeholder="No Hp">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"placeholder="Pesan"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
@include('footer')

    @endsection