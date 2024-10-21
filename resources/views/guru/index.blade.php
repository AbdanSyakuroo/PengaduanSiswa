<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guru') }}
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
                                <th scope="col" class="px-4 py-3 text-center">Laporan</th>
                                <th scope="col" class="px-4 py-3 text-center">Gambar</th>
                                <th scope="col" class="px-4 py-3 text-center">Status</th>
                                <th scope="col" class="px-4 py-3 text-center">Aksi</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurus as $siswa)
    
    
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
                                <td class="px-4 py-3">
                                    <div class="flex justify-center gap-1">
                                        <div>
                                            <a href="{{ route('gurus.edit', $siswa->id) }}"
                                                class="flex items-center justify-center text-white bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">
                                                Edit
                                            </a>
                                        </div>
                                        
                                    </div>
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


