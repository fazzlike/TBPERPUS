@extends('layouts.main_index')
@push('additional-css')

    <style>

        .card-body {
            min-height: 150px;
            min-width: 300px;
            margin-right: 5px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card-out-of-stock {
            position: relative;
            opacity: 0.6;
            pointer-events: none;
        }
        
        .card-body:hover .icon {
            opacity: 1;
            visibility: visible;
        }

        .icon {
            position: absolute;
            color: #A2CDF4
            top: 10px;
            right: 10px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }

        .card-out-of-stock::after {
            content: 'Stok Habis';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #A2CDF4;
            color: white;
            padding: 5px;
            border-radius: 3px;
        }

        .button_fav {
            background-color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 5px;
        }

        .button_fav.active {
            background-color: yellow;
        }

        .modal-body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-body .row {
            width: 100%;
        }

        .modal-body img {
            max-width: 100%;
            height: auto;
        }

        .modal-book-rating {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .modal-book-title,
        .modal-book-author,
        .modal-book-publisher,
        .modal-book-description,
        .modal-book-quantity {
            margin-bottom: 10px;
        }

        .modal-book-reviews {
            margin-bottom: 10px;
            padding-right: 15px;
        }

        .custom-hr {
            border: none;
            height: 1px;
            background-color: #000;
            margin: 10px 0;
        }

        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>

    
@endpush
@section('main_index')
    <div class="py-4 raleway">
        <div class="row" id="books-container">
            @include('partials.books_list', ['bukus' => $bukus])
            @foreach ($bukus as $buku)
                <div class="col-md-2 mb-2">
                    @if ($buku->stok_buku > 0)
                        <a type="button" class="card b-modal" style="width: 100%;" data-buku-id="{{ $buku->id }}">
                            <img class="card-img-top" src="{{ $buku->image }}" alt="Card image cap">
                        </a>
                    @else
                        <div class="card card-out-of-stock" style="width: 100%;">
                            <img class="card-img-top" src="{{ $buku->image }}" alt="Card image cap">
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <div class="modal fade" id="bukuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Buku</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-fluid card-img-top" src="" alt="Book Image">
                        </div>
                        <div class="col-md-6">
                            <h5 class="modal-book-title" style="text-transform: capitalize; color:#A2CDF4"></h5>
                            <p class="modal-book-author" style="text-transform: capitalize; color:#A2CDF4"></p>
                            <p class="modal-book-publisher" style="text-transform: capitalize; color:#A2CDF4"></p>
                            <p class="modal-book-description" style="text-transform: capitalize; color:#A2CDF4"></p>
                            <p class="modal-book-quantity" style="text-transform: capitalize; color:#A2CDF4"></p>
                            <div class="modal-book-rating d-flex align-items-center" style="text-transform: capitalize; color: #A2CDF4">
                                <iconify-icon icon="material-symbols-light:star-outline" width="24px" height="24px" style="color: #A2CDF4"></iconify-icon>
                                <span class="rating lead"></span>
                            </div>
                            <form action="" method="POST" id="pinjamForm">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn" style="color: #A2CDF4">Pinjam</button>
                            </form>
                            <hr class="custom-hr">
                            <div class="" style="text-transform: capitalize; max-height: 200px; overflow-y: auto; color:#A2CDF4">
                                <p><strong>Ulasan</strong></p>
                            </div>
                            <div class="modal-book-reviews" style="text-transform: capitalize; max-height: 200px; overflow-y: auto; color:#A2CDF4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            @if (session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            @endif

            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            @endif
            $('.b-modal').on('click', function() {
                var bukuId = $(this).data('buku-id');

                $.ajax({
                    url: "{{ route('buku.show', '') }}/" + bukuId,
                    method: "GET",
                    success: function(response) {
                        $("#bukuModal .card-img-top").attr("src", response.image);
                        $("#bukuModal .modal-book-title").text(response.judul);
                        $("#bukuModal .modal-book-rating .rating").text(response.average_rating);
                        $("#bukuModal .modal-book-author").text("Penulis : " + response.pengarang);
                        $("#bukuModal .modal-book-description").text(response.deskripsi);
                        $("#bukuModal .modal-book-quantity").text("Stok : " + response.stok_buku);

                        var favUrl = "{{ url('fav_siswa') }}/" + bukuId;
                        var pinjamUrl = "{{ route('pinjam_buku', '') }}/" + bukuId;

                        console.log("Favorite URL: " + favUrl);
                        console.log("Pinjam URL: " + pinjamUrl);

                        $('#favForm').attr('action', favUrl);
                        $('#pinjamForm').attr('action', pinjamUrl);

                        $.ajax({
                            url: "http://127.0.0.1:8000/api/showUlasan/" + bukuId,
                            method: "GET",
                            success: function(response) {
                                var reviewsHtml = "";
                                if (response && response.data && response.data.length > 0) {
                                    response.data.forEach(function(review) {
                                        reviewsHtml += "<div class='review'>";
                                        reviewsHtml += "<p><strong>From:</strong> " + review.user.name + "</p>";
                                        reviewsHtml += "<p><strong>Review:</strong> " + review.ulasan + "</p>";
                                        reviewsHtml += "</div>";
                                    });
                                } else {
                                    reviewsHtml = "<p>No reviews available for this book.</p>";
                                }
                                $("#bukuModal .modal-book-reviews").html(reviewsHtml);
                            },
                            error: function(xhr, status, error) {
                                console.error("Error fetching reviews: " + error);
                            }
                        });

                        $('#bukuModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });


        $(document).ready(function() {
    $('#search-input').on('keyup', function() {
        var query = $(this).val();

        $.ajax({
            url: '{{ route("buku.search") }}',
            type: 'GET',
            data: { query: query },
            success: function(data) {
                $('#books-container').html(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

});
    </script>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>


@endpush
