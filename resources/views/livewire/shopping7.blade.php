<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pesan</td>
                            <td>Kode Pemesanan</td>
                            <td>shopsale</td>
                            <td>Status</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($shopsales as $shopsale)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $shopsale->created_at }}</td>
                            <td>{{ $shopsale->code }}</td>
                            <td>
                                <?php $shopsaledetails = \App\Shopsaledetail::where('shopsale_id', $shopsale->id)->get(); ?>
                                @foreach ($shopsaledetails as $shopsaledetail)
                                <img src="{{ url('images/imgshop/product') }}/{{ $shopsaledetail->shopproduct->image }}"
                                    class="img-fluid" width="50">
                                {{ $shopsaledetail->shopproduct->name }}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                @if($shopsale->status == 1)
                                Belum Lunas
                                @else
                                Lunas
                                @endif
                            </td>
                            <td><strong>Rp. {{ number_format($shopsale->grandprice) }}</strong></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <p>Untuk pembayaran silahkan dapat transfer di rekening dibawah ini : </p>
                    <div class="media">
                        <img class="mr-3" src="{{ url('assets/bri.png') }}" alt="Bank BRI" width="60">
                        <div class="media-body">
                            <h5 class="mt-0">BANK BRI</h5>
                            No. Rekening 012345-678-910 atas nama <strong>Muhammad Afifuddin</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>