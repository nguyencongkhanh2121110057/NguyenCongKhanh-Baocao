<div class="container">
    <div class="title_hot mt-3 mb-3"><a class="nav-link" href="">
            <h3 class="text-danger text-center fw-bold">{{ $category->name }}</h3>
        </a></div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($list_product as $productitem)
            <x-product-item :productitem="$productitem"/>
            @endforeach

        </div>
        <div class="all_tag_hot_product ">
        <a class="nav-link" href="">
      
        </a>
    </div>
</div>