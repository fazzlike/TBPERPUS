@extends('layouts.main_index')
@section('main_index')
    {{-- content --}}
    <div class="container-fluid py-4">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0"> 
                            <h6 style="color: #A2CDF4">Data Peminjaman</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase  text-xxs align-middle font-weight-bolder opacity-7" style="color: #A2CDF4">
                                                No.</th>
                                            <th
                                                class="text-uppercase  text-xxs align-middle font-weight-bolder opacity-7" style="color: #A2CDF4">
                                                Nama Buku</th>
                                            <th
                                                class="text-uppercase text-xxs align-middle font-weight-bolder opacity-7" style="color: #A2CDF4">
                                                Qty</th>
                                            <th
                                                class="text-uppercase  text-xxs align-middle font-weight-bolder opacity-7" style="color: #A2CDF4">
                                                Tanggal Peminjaman</th>
                                            <th
                                                class="text-uppercase  text-xxs align-middle font-weight-bolder opacity-7" style="color: #A2CDF4">
                                                Status</th>
                                            <th
                                                class="text-uppercase  text-xxs align-middle font-weight-bolder opacity-7" style="color: #A2CDF4">
                                                Tanggal Pengembalian</th>
                                            <th
                                                class="text-uppercase text-xxs align-middle font-weight-bolder opacity-7" style="color: #A2CDF4">
                                                Alasan Penolakan</th>
                                            <th
                                                class="text-uppercase  text-xxs align-middle font-weight-bolder opacity-7" style="color: #A2CDF4">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($trans as $trx)
                                            <tr style="height: 70px;">
                                                <td class="px-4" style="color: #A2CDF4">
                                                    <p class="text-xs  mb-0">{{ $loop->iteration }}</p>
                                                </td>
                                                <td class="px-4" style="color: #A2CDF4">
                                                    <p class="text-xs  mb-0">{{ $trx->buku->judul }}</p>
                                                </td>
                                                <td class="px-4" style="color: #A2CDF4">
                                                    <p class="text-xs  mb-0">{{ $trx->qty }}</p>
                                                </td>
                                                <td class="px-4" style="color: #A2CDF4">
                                                    <p class="text-xs  mb-0">{{ $trx->tgl_pinjam }}</p>
                                                </td>

                                                <td class="px-4" style="color: #A2CDF4">
                                                    <p class="text-xs  mb-0">{{ $trx->status }}</p>
                                                </td>
                                                <td class="px-4" style="color: #A2CDF4">
                                                    <p class="text-xs  mb-0">{{ $trx->tgl_kembali }}</p>
                                                </td>
                                                <td class="px-4" style="color: #A2CDF4">
                                                    @if ($trx->status == 'rejected' && $trx->reject_reason != null)
                                                        <p class="text-xs  mb-0">{{ $trx->reject_reason }}</p>
                                                    @else
                                                        <p class="text-xs  mb-0"></p>
                                                    @endif
                                                </td>
                                                <td class="d-flex gap-3">
                                                    @if ($trx->status == 'Dikembalikan' && $trx->is_reviewed == 0)
                                                        <button type="button" class="btn btn" style="background-color: #A2CDF4; color:#fefefe" data-bs-toggle="modal"
                                                            data-bs-target="#reviewModal{{ $trx->id }}">Review</button>
                                                        <div class="modal fade" id="reviewModal{{ $trx->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="reviewModalLabel{{ $trx->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" style="color: #A2CDF4"
                                                                            id="reviewModalLabel{{ $trx->id }}">Review
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action="{{ route('ulasan', ['id' => $trx->id]) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <textarea class="form-control" name="ulasan" rows="3" style="color: #A2CDF4" placeholder="Give A Review" required></textarea>
                                                                            <label for="rating" style="color: #A2CDF4">Berikan nilai buku ini
                                                                                (1-5)
                                                                                : </label>
                                                                            <input id="rating" type="number" style="color: #A2CDF4"
                                                                                min="1" max="5" name="rating"
                                                                                required>
                                                                            <button type="submit"
                                                                                class="btn btn" style="background-color: #A2CDF4; color:#fefefe">Submit</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @elseif ($trx->status == 'Dikembalikan' && $trx->is_reviewed == 1)
                                                        <p class="text-xs mb-0" style="color: #A2CDF4">Sudah Review</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ $error }}',
                    showConfirmButton: false,
                    timer: 3000
                });
            @endforeach
        @elseif (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        @endif
    </script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm_' + id).submit();
                }
            })
        }
    </script>
@endsection
