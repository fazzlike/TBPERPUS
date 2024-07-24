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