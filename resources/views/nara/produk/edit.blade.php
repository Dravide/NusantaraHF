<x-app-main title="Edit Produk">
    <x-judul-halaman judul="Edit Produk" />
    <form method="POST" action="{{ route('produk.update', $produk->id) }}"
          accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_produk" class="form-label">Nama Produk :</label>
                            <input type="text"
                                   class="form-control @error('nama_produk') is-invalid @enderror"
                                   id="namap_roduk"
                                   name="nama_produk"
                                   placeholder="Nama Produk"
                                   value="{{ $produk->nama_produk }}">
                            @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kategori_id" class="form-label">Kategori :</label>
                            <select class="form-control @error('kategori_id') is-invalid @enderror"
                                    id="kategori_id" name="kategori_id[]" multiple>

                            </select>
                            @error('kategori_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="harga" class="form-label">Harga :</label>
                                    <input type="text"
                                           class="form-control @error('harga') is-invalid @enderror"
                                           id="harga"
                                           name="harga"
                                           placeholder="Harga"
                                           value="{{ $produk->harga }}">
                                    @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">

                                    <label for="hargaReseller" class="form-label">Harga Reseller :</label>
                                    <input type="text"
                                           class="form-control @error('harga_reseller') is-invalid @enderror"
                                           id="hargaReseller"
                                           name="harga_reseller"
                                           placeholder="Harga Reseller"
                                           value="{{ $produk->harga_reseller }}">
                                    @error('harga_reseller')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label for="stok" class="form-label">Stok :</label>
                                    <input type="number"
                                           class="form-control @error('stok') is-invalid @enderror"
                                           id="stok"
                                           name="stok"
                                           placeholder="Stok"
                                           value="{{ $produk->stok }}">
                                    @error('stok')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group mt-2 mb-2">
                                <label for="deskripsi" class="form-label">Deskripsi :</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                          id="deskripsi"
                                          name="deskripsi"
                                          rows="2">{{ $produk->deskripsi }}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="gambar" id="images"
                                           aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                                @error('gambar')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mt-1 text-center">
                                    <div class="images-preview-div"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-outline-blue mt-2" id="submit"><i
                                        class="la la-cart-plus"></i> Tambah Produk
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </form>
    @push('css')
        <link href="{{ asset('nara/plugins/select/selectr.min.css') }}" rel="stylesheet" type="text/css" />
    @endpush
    @push('js')
        <script src="{{ asset('nara/plugins/imask/imask.js') }}"></script>
        <script src="{{ asset('nara/plugins/select/selectr.min.js') }}"></script>
        <script src="{{ asset('nara/plugins/tinymce/tinymce.min.js') }}"></script>
        <script type="text/javascript">
            const currencyMask = IMask(
                document.getElementById("harga"),
                {
                    mask: "¥ num",
                    blocks: {
                        num: {
                            // nested masks are available!
                            mask: Number,
                            thousandsSeparator: "."
                        }
                    }
                });
        </script>
        <script type="text/javascript">
            const currencyMask2 = IMask(
                document.getElementById("hargaReseller"),
                {
                    mask: "¥ num",
                    blocks: {
                        num: {
                            // nested masks are available!
                            mask: Number,
                            thousandsSeparator: "."
                        }
                    }
                });
        </script>
        <script type="text/javascript">
            var selectr = new Selectr("#kategori_id",
                {
                    multiple: true,
                    searchable: true,
                    searchPlaceholder: "Cari Kategori",
                    nativeDropdown: false,
                    clearable: true,
                    placeholder: "Pilih Kategori",
                    emptyMsg: "Tidak ada data",
                    data: [
                            @foreach($kategoris as $k)
                        {
                            value: '{{ $k->id }}',
                            text: '{{ $k->nama_kategori }}',
                            selected: {{ in_array($k->id, json_decode($produk->kategori_id)) ? 'true' : 'false'}}
                        },
                        @endforeach
                    ]


                });
        </script>
        <script type="text/javascript">
            tinymce.init({
                selector: "#deskripsi",
                height: 200,
                menubar: false,
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table paste code help wordcount"
                ],
                toolbar: "undo redo | formatselect | " +
                    "bold italic backcolor | alignleft aligncenter " +
                    "alignright alignjustify | bullist numlist outdent indent | " +
                    "removeformat | help",
                content_style: "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }"
            });
        </script>
        <script>
            $(function() {
// Multiple images preview with JavaScript
                var previewImages = function(input, imgPreviewPlaceholder) {
                    if (input.files) {
                        var filesAmount = input.files.length;
                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();
                            reader.onload = function(event) {
                                $($.parseHTML("<img alt=\"user\" class=\"thumb-xl rounded\">")).attr("src", event.target.result).appendTo(imgPreviewPlaceholder);
                            };
                            reader.readAsDataURL(input.files[i]);
                        }
                    }
                };
                $("#images").on("change", function() {
                    previewImages(this, "div.images-preview-div");
                });
            });
        </script>
    @endpush
</x-app-main>
