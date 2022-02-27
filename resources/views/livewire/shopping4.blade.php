<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('shopping1') }}" class="text-dark">List Class</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Class Detail</li>
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

    <div class="row">
        <div class="col-md-4">
            <h2>
                <strong>{{ $shopproduct->name }}</strong>
            </h2>
            <h4>
                Rp. {{ number_format($shopproduct->price) }}
                @if($shopproduct->status == 1)
                <span class="badge badge-success"> <i class="fas fa-check"></i> Ready Stok</span>
                @else
                <span class="badge badge-danger"> <i class="fas fa-times"></i> Stok Habis</span>
                @endif
            </h4>
            <div class="card image-shopproduct">
                <div class="card-body">
                    <img src="{{ asset('Images/imgshop/product') }}/{{ $shopproduct->image }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-8">

            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="Booking"> 
                    <table class="table" style="border-top : hidden">  

                        

                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td>{{ $shopproduct->description }}</td>
                        </tr>

                        
                        <tr>
                            <td>Biaya</td>
                            <td>:</td>
                            <td>Rp. {{ number_format($shopproduct->price) }}</td>
                        </tr>

                        <tr>
                            <td>Jumlah Daftar</td>
                            <td>:</td>
                            <td>
                                <input id="qty" type="number"
                                    class="form-control @error('qty') is-invalid @enderror"
                                    wire:model="qty" value="{{ old('qty') }}" required
                                    autocomplete="name" autofocus>

                                @error('qty')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>


                        @if($qty > 1)
                        @else
                        <tr>
                            <td colspan="3"><strong>Pengajuan Subsidi (isi jika subsidi biaya untuk santri terdampak covid)</strong> </td>
                        </tr>

                        <tr>
                            <td>Harga Subsidi</td>
                            <td>:</td>
                            <td>
                            <div class="col">
                                <select type="text" id="pricedisc" class="form-control"  placeholder="Enter pricedisc" wire:model="pricedisc" />
                                    <option value="">Pilih Harga</option>
                                    <option value="50000">Rp. 50,000</option>  
                                    <option value="0">Rp. 0</option>  
                                </select>
                            </div>
                            @error('pricedisc')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </td>
                        </tr>

                        <tr>
                            <td>Alasan Subsidi</td>
                            <td>:</td>
                            <td>
                                <input id="reason" type="text" class="form-control @error('reason') is-invalid @enderror" wire:model="reason" value="{{ old('reason') }}" autocomplete="reason" autofocus>
                                @error('reason')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>

                        <tr>
                            <td>Masukkan nomor KK/KTP</td>
                            <td>:</td>
                            <td>
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" wire:model="description" value="{{ old('description') }}" autocomplete="description" autofocus>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>
                        </tr>
                        
                        @endif
                        <tr>
                            <td colspan="3">
                                <button type="submit" class="btn btn-primary btn-block" @if($shopproduct->status !== 1) disabled @endif><i class="fas fa-shopping-cart"></i>  Booking</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>