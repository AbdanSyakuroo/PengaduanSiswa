<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Halaman Siswa') }}
        </h2>
    </x-slot>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-xl sm:rounded-lg overflow-hidden mt-">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"   placeholder="cari" name="search" id="search"
                                required value="{{ request('search') }}" autocomplete="off">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <!-- Modal toggle -->
                      
                            <button id="defaultModalButton" data-modal-target="defaultModal"
                                data-modal-toggle="defaultModal"
                                class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center"
                                type="button">
                                Lapor!
                            </button>
                        
                       
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                        <thead class="text-xs text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="px-4 py-3 text-center">No</th>
                                <th scope="col" class="px-4 py-3 text-center">Pelapor</th>
                                <th scope="col" class="px-4 py-3 text-center">Terlapor</th>
                                <th scope="col" class="px-4 py-3 text-center">Kelas</th>
                                <th scope="col" class="px-4 py-3 text-center">Bukti</th>
                                <th scope="col" class="px-4 py-3 text-center">Laporan</th>
                                <th scope="col" class="px-4 py-3 text-center">Status</th>
                                {{-- <th scope="col" class="px-4 py-3 text-center">Aksi</th> --}}


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
    
    
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3 text-center">
                                    {{ $loop->iteration }}</td>
                                <td class="px-4 py-3 text-center">
                                    {{ $siswa->pelapor}}</td>
                                <td class="px-4 py-3 text-center">
                                    {{ $siswa->terlapor}}</td>
                                <td class="px-4 py-3 text-center">
                                    {{ $siswa->kelas}}</td>
                                <td class="px-4 py-3 flex justify-center">
                                    <img
                                        src="{{ asset('storage/fotos/' . $siswa->foto) }}" alt=""
                                        width="250px" class="rounded-xl"></td>
                                <td class="px-4 py-3 text-center">
                                    {{ $siswa->laporan}}</td>
                                <td class="px-4 py-3 text-center">
                                    <span class="text-xs font-medium me-2 px-2.5 py-0.5 rounded @if ($siswa->status == 'sedang dalam tinjauan')bg-red-100 text-red-800  dark:bg-red-900 dark:text-red-300 @elseif($siswa->status == 'done')bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300 @endif">
                                        {{$siswa->status}}
                                    </span>
                                </td>
                            </tr>
    
    
                            @endforeach
    
    
                        </tbody>
    
                    </table>
                </div>

               
            </div>
        </div>

        <div class="pt-10">
            {{-- {{ $produktzy->links() }} --}}
        </div>
        </section>  
</x-app-layout>

<!-- Main modal Create -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                <h3 class="text-lg font-semibold text-gray-900">
                    Tambah Produk
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Tutup</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action=" {{route('siswas.store')}}" method="POST" enctype="multipart/form-data">
               
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="Pelapor" class="block mb-2 text-sm font-medium text-gray-900">Pelapor</label>
                        <input type="text" name="pelapor" id="Pelapor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="nama pelapor" required="">
                    </div>
                    <div>
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Terlapor</label>
                        <input type="text" name="terlapor" id="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="nama terlapor" required="">
                    </div>
                    <div>
                        <label for="price"
                            class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                        <select name="kelas" id="price" class="w-full rounded-md border-gray-300">
                            <option value="SMK PESAT BOS YTTA GEYZ">--Pilih Kelas--</option>
                            <option value="X-1">--X-1--</option>
                            <option value="X-2">--X-2--</option>
                            <option value="X-3">--X-3--</option>
                            <option value="XI-RPL-1">--XI-RPL-1--</option>
                            <option value="XI-RPL-2">--XI-RPL-2--</option>
                            <option value="XI-DKV">--XI-DKV--</option>
                            <option value="XI-TKJ">--XI-TKJ--</option>
                            <option value="XII-RPL">--XII-TKJ--</option>
                            <option value="XII-DKV">--XII-DKV--</option>
                            <option value="XII-TKJ">--XII-RPL--</option>
                        </select>
                    </div>
                    <div>

                        <label class="block mb-2 text-sm font-medium text-gray-900"
                            for="file_input">Masukkan Gambar</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            id="file_input" name="foto" type="file">

                    </div>

                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900">Laporan</label>
                            <textarea id="description" name="laporan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="Isi Laporan"></textarea>
                            
                    </div>
                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Simpan
                </button>
            </form>
        </div>
    </div>
</div>
