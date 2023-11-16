<style>
    .col:hover
    { 
        color: orange;
                    cursor: pointer;
                   
    }
    
    .card_price_sale
                    {
            color: blueviolet;
                    }
    </style>
    <div class="col">
        <div class="card h-100 card_main">
            <div class="card_item"></div>
            <a class="nav-link" href="?option=product&slug=">
                <div class="card_">
                    <img width="200px" src="{{asset('images/products/'.$product->image)}}" class="card-img-top" alt="">
                </div>
                <div class="card-body ">
                    <h5 class="card-title"></h5>
                    <div class="card_tm"><a class="nav-link" href="">{{ $product->name }}</a></div>
                    <div class="card_price">
                        <div class="card_price_after_sale text-decoration-line-through">{{ $product->price }}.000₫</div>
                        <div class="card_price_sale px-2"><strong>{{ $product->price_sale }}.000₫</strong></div>
                        <a href="#"> Mua</a>
                    </div>
                </div>
            </a>
        </div>
    </div>
    