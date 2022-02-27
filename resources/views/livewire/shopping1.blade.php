<div class="row mt-4 mb-2" style="background-color: #A99682">
    <div class="container">
        <div class="title-header">
            <i class="fa"><img src="{{asset('images/imgsector/logo.png')}}"></i> 
            <h3 style="color:#fff;">{{ $title1 }}</h3>
            <div class="crumbs">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a> / <a href="{{ route('shopping1') }}">Services</a></li>
                    <hr class="separator">
                </ul>
            </div>    
        </div>
    </div>
</div> 
<div class="container">
    <div class="row" style="margin-top: -30px;">
            <div class="titles">
                
            <div class="filter-header">
                <form id="sform" action="searchservices" method="post">                       
                    <input type="text" id="q" name="q" required="required" placeholder="What services do you want?" class="input-large typeahead" autocomplete="off">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
        </div>
    </div>
</div> 

<div class="content_info">
    <div class="container">
        <div class="row">    
            <div class="col-md-12">
                <ul class="services-lines">
                    @foreach ($shopproducts as $shopproduct)  
                        <li>               
                            <a href="{{ route('shopping4', $shopproduct->id) }}" style="text-decoration: none;">
                            <i class="fa"><img class="icon-img" src="{{asset('images/imgshop/product')}}/{{$shopproduct->image}}" width="150"></i> 
                            <div class="info-gallery">
                                <h5><strong>Rp. {{ number_format($shopproduct->price) }}</strong></h5>     
                                <hr class="separator">                                  
                                <p>{{$shopproduct->name}}</p> 
                                <div class="content-btn">
                                    <a href="{{ route('shopping4', $shopproduct->id) }}" class="btn btn-primary-outliner btn-block">Detail Product</a>
                                </div>
                                <div class="price"><b>{{$shopproduct->code}}</b></div>
                            </div>            
                            </a>
                        </li>
                    @endforeach  
                </ul>                                    
            </div> 
        </div>
        <div class="row">
            <div class="col">
                {{ $shopproducts->links() }}
            </div>
        </div>
    </div>
</div>
<!--For class----------------------------------------------------------------------->      
<div>
    <div class="container">
        <div class="row">
            <div class="titles">
                <h2><span>Pesan </span> Product lain ?</h2>
                <i class="fa fa-plane"></i>
                <hr class="tall">
            </div>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul id="sponsors" class="tooltip-hover">
                @foreach($shopcats as $shopcat) 
                <li data-toggle="tooltip" title="" data-original-title="{{$shopcat->name}}"> 
                    <a href="{{ route('shopping2', $shopcat->id) }}" style="text-decoration: none;" ><img src="{{asset('images/imgshop/icon')}}/{{$shopcat->image}}" alt="{{$shopcat->name}}">
                    </a>
                </li>
                @endforeach                                             
                </ul>
            </div>
        </div>
    </div>
</div>
<!--For class----------------------------------------------------------------------->  
    <div>
        <div class="container">
            <div class="row">
                <div class="titles">
                    <h2><span>Product Terlaris</span></h2>
                    <i class="fa fa-plane"></i>
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div id="boxes-carousel">
            @foreach($shopproducts2 as $shopproduct2)
            <div>
                <a class="g-list" href="{{ route('shopping4', $shopproduct2->id) }}" style="text-decoration: none;">
                    <div class="img-hover" style="text-align: center;">
                        <img src="{{asset('images/imgshop/product')}}/{{$shopproduct2->image}}" width="150"  alt="{{$shopproduct2->name}}" class="img-responsive">
                    </div>
                    <div class="info-gallery" >
                        <div class="content-btn">
                            <a href="{{ route('shopping4', $shopproduct2->id) }}" style="text-decoration: none;" class="btn btn-primary btn-block">Rp. {{ number_format($shopproduct2->price) }}</a>                               
                            <hr class="separator">                                  
                            <h5>{{$shopproduct2->name}}</h5> 
                        </div>   
                        <div class="price"><span></span><b>{{$shopproduct2->code}}</b></div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="semiboxshadow text-center">
        <img src="{{asset('assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>      
<!---------------------------------------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="titles">
                <h2><span>News</span></h2>
                <i class="fa fa-plane"></i>
                <hr class="tall">
            </div>
        </div>
    </div>       
    <div class="content_info">
        <div class="container">
            <div class="row">    
                <div class="col-md-12">                    
                    @foreach($newsproducts as $newsproduct)                         
                    <a href="{{ route('news4', $newsproduct->id) }}" style="text-decoration: none;">
                        <div class="service-line">
                            <div class="col-md-4" style="text-align: center;">
                                <div class="card image-newsproduct">
                                    <div class="card-body">
                                        <i class="fa"><img class="icon-img" style="text-align: center;" src="{{asset('images/imgnews/product')}}/{{$newsproduct->image}}" width="250"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="info-gallery">
                                    <div class="text-justify">
                                        <form wire:submit.prevent="masukkanKeranjang"> 
                                            <table class="table" style="border-top : hidden">  
                                                <tr>                                                    
                                                    <td ><strong>{{ $newsproduct->name }}</strong></td>
                                                </tr>
                                                <tr>                                                    
                                                    <td style="color: #043F01;">{{ $newsproduct->description1 }}</td>
                                                </tr>                                                
                                            </table>
                                        </form>
                                    </div>
                                    <div align="right">
                                        <div class="content-btn"><a href="{{ route('newsdetail', $newsproduct->id) }}" style="color: #FE1111;" class="btn btn-outline-primary">Read more...</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>                        
                    @endforeach  
                </div>                   
            </div>               
        </div>
    </div>
