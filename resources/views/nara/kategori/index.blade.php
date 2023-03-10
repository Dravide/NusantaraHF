<x-app-main title="Home">
    <x-judul-halaman judul="Kategori"/>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Tambah Kategori</h4>
                        </div><!--end col-->
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="namakategori">Nama Kategori <small
                                    class="text-danger font-13">*</small></label>
                            <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror"
                                   id="namakategori" placeholder="Nama Kategori"
                                   name="nama_kategori" value="{{ old('nama_kategori')}}">
                            @error('nama_kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <label class="form-label" for="icon">Icon <small
                                    class="text-danger font-13">*</small></label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror"
                                   id="icon" placeholder="Icon"
                                   name="icon" value="{{ old('icon')}}">
                            @error('icon')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted fst-italic">Daftar Icon <a
                                    href="https://fontawesome.com/icons"
                                    target="_blank" class="text-blue">Font Awesome!</a></small>

                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-sm btn-blue align-self-end"><i
                                    class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sukses!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Daftar Kategori</h4>
                        </div><!--end col-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                            <tr>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Dibuat Pada</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($kategoris as $data)
                                <tr>
                                    <td><i
                                            class="fa fa-{{ $data->icon }} rounded-circle me-1"></i> {{ $data->nama_kategori }}
                                    </td>

                                    <td><span class="badge badge-soft-secondary">{{ $data->slug }}</span></td>
                                    <td>
                                        <div class="small">
                                            {{ $data->created_at->diffforhumans()  }}
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        {{--                                        <a href="#"><i class="las la-pen text-secondary font-16 me-1"></i></a>--}}
                                        <form method="POST" action="{{ route('kategori.destroy', $data->id) }}"
                                              class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-link show_confirm"><i
                                                    class="las la-trash-alt font-16 text-secondary"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table><!--end /table-->
                        <nav class="mt-2" aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                {{ $kategoris->links() }}
                            </ul><!--end pagination-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('css')
        <link href="{{ asset('') }}nara/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('') }}nara/plugins/animate/animate.min.css" rel="stylesheet" type="text/css">
    @endpush

    @push('js')

        <script src="{{ asset('') }}nara/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script type="text/javascript">
            $('.show_confirm').click(function (event) {
                var form = $(this).closest("form");
                event.preventDefault();
                swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Ingin Menghapus data Kategori ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#557ef8',
                    cancelButtonColor: '#ef4d56',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Tidak, Batal!'
                })
                    .then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                            Swal.fire(
                                'Hapus!',
                                'Kategori Telah Dihapus!',
                                'success'
                            )
                        }
                    });
            });

        </script>
    @endpush
</x-app-main>
