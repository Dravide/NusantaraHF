<x-app-main title="Produk">
    <x-judul-halaman judul="Produk"/>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Nama Admin</th>
                                <th>Whatsapp</th>
                                <th class="text-center">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $wa)
                            <tr>
                                <td>{{$wa->nama_admin}}</td>
                                <td>{{$wa->whatsapp}}</td>
                                <td class="text-center">@if($wa->status == 1)
                                        Aktif
                                    @else
                                        <form method="POST" action="{{route('rootRoute')}}/nara/aktifkanWA">
                                            @csrf
                                            <input type="hidden" name="wa" value="{{$wa->whatsapp}}">
                                        <button type="submit" class="btn btn-info">Aktifkan</button>
                                        </form>


                                @endif
                                </td>
                            </tr>
                            @endforeach


                            </tbody>
                        </table>

                    </div>
                </div><!--end card-body-->
            </div><!--end card-->


        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h2>Tambah Nomor Admin Whatsapp</h2>
                    <form action="{{route('rootRoute')}}/nara/tambahwa" method="POST">
                        @csrf
                    <div class="form-group">
                        <label for="nama_produk" class="form-label">Nama Admin :</label>
                        <input type="text"
                               class="form-control"
                               name="nama"
                               placeholder="Nama Admin">

                    </div>
                    <div class="form-group">
                        <label for="nama_produk" class="form-label">Nomor Whatsapp :</label>
                        <input type="text"
                               class="form-control"
                               name="whatsapp"
                               placeholder="62877XXXXXXXX">

                    </div>
                    <button type="submit" class="btn btn-outline-blue mt-2" id="submit"><i
                            class="la la-cart-plus"></i> Tambah Admin
                    </button>
                    </form>

                </div><!--end card-body-->
            </div><!--end card-->

        </div>
    </div>

</x-app-main>
