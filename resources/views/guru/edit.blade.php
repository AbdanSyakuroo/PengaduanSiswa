<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data') }}
        </h2>
    </x-slot>
    
    <div class="container mt-4 mb-20">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-lg rounded">
                    <div class="card-body">
                        <form action="{{ route('gurus.update', $gurusz->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold my-3">Status</label>
                                    
                                    <select name="status" id="price" class="w-full rounded-md border-gray-300">
                                        <option value="">--Pilih Status--</option>
                                        <option value="sedang dalam tinjauan">sedang dalam tinjauan</option>
                                        <option value="done">done</option>
                                    </select>
                                    <!-- error message untuk title -->
                                    @error('title')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            

                            <button type="submit" class="btn btn-md btn-warning text-gray font-semibold me-3 mt-2">UPDATE</button>                            
                        </form>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</x-app-layout>





