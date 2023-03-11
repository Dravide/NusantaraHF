<x-app-main title="Produk">
    <x-judul-halaman judul="Produk"/>
    <div class="row">
        <div class="col-lg-6">

        </div>

        <div class="col-lg-6 text-end">
            <div class="text-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <div class="input-group">
                            <input type="text" id="example-input1-group2" name="example-input1-group2"
                                   class="form-control form-control-sm" placeholder="Pencarian">
                            <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-filter"></i></button>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('produk.create') }}" class="btn btn-primary btn-sm"><i
                                class="fas fa-plus"></i> Tambah Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($produks as $produk)
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/'.$produk->gambar.'') }}" class="me-2" alt=""
                                             height="40">
                                        <p class="d-inline-block align-middle mb-0">
                                            <a href=""
                                               class="d-inline-block align-middle mb-0 product-name fw-semibold">{{ $produk->nama_produk }}</a>
                                            <br>
                                            
                                        </p>
                                    </td>
                                    <td>
                                        @foreach($produk->namakategori as $datas)
                                            <span class="badge badge-soft-dark">{{ $datas['nama_kategori'] }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $produk->stok }}</td>
                                    <td>@currency($produk->harga),00</td>
                                    <td><span class="badge badge-soft-purple">Stock</span></td>
                                    <td>
                                        <a href="#" class="mr-2"><i
                                                class="las la-pen text-secondary font-16 me-1"></i></a>
                                        <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <nav class="mt-2 pagination justify-content-end" aria-label="Page navigation example">

                            {{ $produks->links() }}

                        </nav>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div> <!-- end col -->
    </div>
</x-app-main>
