<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin Dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('Admin/vendors/typicons.font/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('Admin/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('Admin/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/template/vendors/typicons.font/font/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin//template/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('Admin/template/vendors/pwstabs/jquery.pwstabs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/template/vendors/simplemde/simplemde.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/template/vendors/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/template/vendors/codemirror/ambiance.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('Admin/template/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('Admin/template/images/favicon.png') }}" />
</head>

<body>


    <div id="wrapper">

        {{-- CONTENT --}}
        <div class="col-xl-6" style="margin-top: 10px">
            <div class="card">

                <div class="card-body">
                    <div id="page-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="text-center mb-5">Lihat Menu</h3>
                                        </div>
                                        {{-- CONTENT --}}
                                        <div id="page-wrapper">
                                            <div class="container-fluid mx-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <form action="{{ route('produk.update', $produk->id) }}" method="POST" role="form" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('put')
                                                                            <div class="form-group">
                                                                                <label class="mt-4 mb-2 mx-2">Nama produk</label>
                                                                                <input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}"
                                                                                    placeholder="Nama produk">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="mt-4 mb-2 mx-2">Harga</label>
                                                                                <input type="number" class="form-control" name="harga" value="{{ $produk->harga }}" placeholder="Harga">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="mt-4 mb-2 mx-2">Kategori</label>
                                                                                <input type="text" class="form-control" name="kategori" value="{{ $produk->kategori }}" placeholder="Deskripsi">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="mt-4 mb-2 mx-2">Stok</label>
                                                                                <input type="number" class="form-control" name="stok" value="{{ $produk->stok }}" placeholder="Harga">
                                                                            </div>
                                                                            <label class="mt-4 mx-2">Gambar</label>
                                                                            <div class="form-group">
                                                                                <img src="{{ asset('/images/produk/' . $produk->cover) }}" width="200px">
                                                                                <input type="file" class="form-control" name="cover">
                                                                            </div>
                                                                            <a href="{{route('produk.index')}}" class="btn-secondary btn mt-2 btn-default">Kembali</a>
                                                                            <button type="submit" class="btn-success btn mt-2 btn-default">Edit</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{ asset('Admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('Admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('Admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('Admin/js/template.js') }}"></script>
    <script src="{{ asset('Admin/js/settings.js') }}"></script>
    <script src="{{ asset('Admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('Admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('Admin/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('Admin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    <!-- base:js -->
    <script src="{{ asset('Admin/template/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('Admin/template/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('Admin/template/vendors/pwstabs/jquery.pwstabs.min.js') }}"></script>
    <script src="{{ asset('Admin/template/vendors/simplemde/simplemde.min.js') }}"></script>
    <script src="{{ asset('Admin/template/vendors/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('Admin/template/vendors/codemirror/javascript.js') }}"></script>
    <script src="{{ asset('Admin/template/vendors/codemirror/shell.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('Admin/template/js/codeEditor.js') }}"></script>
    <script src="{{ asset('Admin/template/js/tabs.js') }}"></script>
    <script src="{{ asset('Admin/template/js/tooltips.js') }}"></script>
    <script src="documentation.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
