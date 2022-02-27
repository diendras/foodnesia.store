<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Qty</td>
                            <td>Price</td>     
                            <td>Subsidy</td>
                            <td><strong>GrandPrice</strong></td>
                            <td>Description</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($shopsaledetails as $shopsaledetail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <img src="{{ url('images/imgshop/product') }}/{{ $shopsaledetail->shopproduct->image }}" class="img-fluid" width="50">
                            </td>
                            <td>{{ $shopsaledetail->name }}</td>
                            <td>{{ $shopsaledetail->qty }}</td>
                            <td>Rp. {{ number_format($shopsaledetail->shopproduct->price) }}</td>
                            <td>Rp. {{ number_format($shopsaledetail->shopproduct->disc) }}</td>
                            <td><strong>Rp. {{ number_format($shopsaledetail->total) }}</strong></td>
                            <td>{{ $shopsaledetail->description }}</td>
                            <td>
                                <i wire:click="destroy({{ $shopsaledetail->id }})" class="fas fa-trash text-danger"></i>
                            </td>
                        </tr>    
                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>   
                        @endforelse
                        
                        @if(!empty($shopsale))
                        <tr>
                            <td colspan="6" align="right"><strong>Total Price : </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($shopsale->grandprice) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Kode Unik : </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($shopsale->uniqcode) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right"><strong>Total Yang Harus dibayarkan : </strong></td>
                            <td align="right"><strong>Rp. {{ number_format($shopsale->grandprice+$shopsale->uniqcode) }}</strong> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td colspan="2">
                                <a href="{{ route('shopping6') }}" class="btn btn-success btn-blok">
                                    <i class="fas fa-arrow-right"></i> Check Out
                                </a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>