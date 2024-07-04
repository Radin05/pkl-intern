<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pemesanan</title>

    <!-- Favicon -->
    <link href="{{ asset('user/img/favicon.ico" rel="icon') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative mt-2 bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('layouts.sidebar')

        <!-- Content Start -->
        <div class="content">

            @include('layouts.navbar')

            <!-- Sale & Revenue Start -->
            <div class="accordion mt-4 container-fluid pt-4 px-4" id="accordionProducts">
                <div class="accordion-item row g-4">
                    @foreach ($produk as $index => $data)
                    <div class="col-md-4 mb-5" id="heading{{ $index }}">
                        <div class="bg-light" class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $index }}" aria-expanded="true"
                            aria-controls="collapse{{ $index }}">
                            <div class="text-center p-4">
                                <img src="{{ asset('/images/produk/' . $data->cover) }}" width="150">
                            </div>
                            <div class="d-flex flex-column align-items-center py-4">
                                <p>{{$data->nama_produk}}</p>
                                <p>{{$data->harga}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Sale & Revenue End -->



            <!-- Footer Start -->
            <div id="collapse{{ $index }}" class="accordion-collapse collapse pt-4 px-4"
                aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionProducts">
                <div class="accordion-body bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            </br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com"
                                target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

    </div>

    <!-- container-scroller -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('user/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('user/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('user/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('user/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('user/js/main.js') }}"></script>
    <!-- End custom js for this page-->

    <script>
        // JavaScript for Accordion Behavior
            const accordionHeaders = document.querySelectorAll(".accordion-header");

            accordionHeaders.forEach(header => {
                header.addEventListener("click", () => {
                    const accordionItem = header.parentElement;
                    const accordionBody = accordionItem.querySelector(".accordion-body");

                    // Toggle active class on header
                    header.classList.toggle("active");

                    // Toggle max-height for accordion body
                    if (header.classList.contains("active")) {
                        accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
                    } else {
                        accordionBody.style.maxHeight = 0;
                    }
                });
            });
    </script>
</body>

</html>
