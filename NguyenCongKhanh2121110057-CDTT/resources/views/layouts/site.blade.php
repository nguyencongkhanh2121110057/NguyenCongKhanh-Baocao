<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <title>Document</title>
    <style>
        
    </style>
</head>

<body>
    <div class="container">
        <section class="logo mt-3 mb-3 text-center">
            <div class="header-main">
                <div class="header-wrap">
                    <div class="header-logo">
                        <img src="https://pos.nvncdn.net/fb2876-39302/store/20181222_YaLDXNbCYcXc1zm4XomQR01J.png"
                            alt="không có ảnh    " />
                    </div>
                </div>
            </div>
        </section>
        <div class="nav mb-1 d-flex justify-content-between">
            <div class="d-flex">
                <div class="dropdown mx-1">
                    <button class="btn text-dark bg-white" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Phụ Kiện
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <button class="dropdown-item" type="button">Bộ 4 món</button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button">
                                Bộ 2 món
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="dropdown mx-1">
                    <button class="btn text-dark bg-white" type="button"
                        aria-expanded="false">
                        Bàn làm việc
                    </button>
                </div>
                <div class="dropdown mx-1">
                    <button class="btn text-dark bg-white" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Vỏ Gối
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <button class="dropdown-item" type="button">vỏ gối vuông</button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button">
                                vỏ gối chữ nhật
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="dropdown mx-1">
                    <button class="btn text-dark bg-white " type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Bàn Ăn
                    </button>
                    
                </div>
                <div class="dropdown mx-1">
                    <button class="btn text-dark bg-white" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Ghế
                    </button>
                   
                </div>
            </div>
            <div class="mb-3 d-flex">
                <input type="text" class="w-3" placeholder="Tìm Kiếm..." aria-label="Tìm Kiếm..."
                    aria-describedby="basic-addon2" />
                <span class="input-group-text" id="basic-addon2"><DIV>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </DIV></span>
                <div class="m-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                </div>
            </div>
        </div>

        <section id="slide">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://pos.nvncdn.net/fb2876-39302/bn/20210111_AKE5ZTHR9IozGiNZdygGw6T1.jpg"
                            class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="https://pos.nvncdn.net/fb2876-39302/bn/20210111_nWEd7AKeFqynZBO09GyOrMoM.jpg"
                            class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <div class="row m-4">
            @foreach ($list_category as $cat)
        <x-product-home :cat='$cat' />
         @endforeach
            <h4>SẢN PHẨM MỚI</h4>
            <div class="container text-center">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_HfN7pRv1A1Jg1wlY9vIoT3Zb.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Gối vuông vân gỗ</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">380.000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_55x23PoewLgekfNGUCaoO5tK.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Gối vuông mũi neo</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">219.000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_oY8UOxUVO2b3wJxeLXnFHOkj.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Gối vuông giáng sinh</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">289.000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_h6KnyO0msbSVI6A0J9X4Afsn.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Gối vuông kẻ sọc</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">219.000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_7zsY3bGPYfohHge6auqrLnaY.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Gối vuông họa tiết</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">269.000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_rOMSNYV6kYryfS0qPUPgdAow.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Ghế sofa trắng tinh khiết</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">8,700,000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_V726isDUaIJXfsxWtCXQmBFX.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Ghế sofa nhật nhạt sang</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">7,500,000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_YctCp3KKe9egWFbaLGfWb7W1.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Ghế sofa đỏ kèm gối ôm</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">9,500,000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_29gNoYfiFQPl7rDQLKNUVEKA.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Ghế sofa đẹp bọc da trắng</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">8,500,000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_TkkGZ0Zr2kbJUQOlR0eUIeFw.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Ghế sofa tinh tế sang trọng</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">7,500,000đ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row m-4">
            <h3>
                Sản Phẩm Nổi Bật
            </h3>
            <div class="col-6">
                <div class="container text-center">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col">
                            <div class="card" style="width: 37rem;">
                                <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_DrmSbCr84mQE7yn7crGdXjf0.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">

                                    <p class="card-text">Bàn làm việc nhóm tiện ích</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">7.500.000đ</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-1 " style="width: 18rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_3GmjNmOI3RBSYdiAcYEGYiRo.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Bàn làm việc ghế xoay H72</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">7,500,000đ</li>
                            </ul>
                        </div>
                        <div class="card mb-1 " style="width: 18rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_BO3ULJb6ab0yLXWOut1kmU7y.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Ghế sofa tinh tế sang trọng</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">7,500,000đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-2 " style="width: 18rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_g9tvTndFTbUnqeqiaiXzoBLK.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Bàn làm việc văn phòng N95</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">7,500,000đ</li>
                            </ul>
                        </div>
                        <div class="card mb-1 " style="width: 18rem;">
                            <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_ppSyOzynDzF0EL4028YHVa7d.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Bàn làm việc kéo tiện ích</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">7,500,000đ</li>
                            </ul>
                        </div>
                    </div>

                </div>




            </div>
            <div class="card m-2 p-0 " style="width: 18rem;">
                <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_Ts7YmNcrs0tRkp5YcgudWF5Q.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">

                    <p class="card-text">Ghế sofa tinh tế sang trọng</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">7,500,000đ</li>
                </ul>
            </div>
            <div class="card m-2 p-0 " style="width: 18rem;">
                <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_Kia5zVvfAAzw7KTEVUovXPvy.jpeg"
                    class="card-img-top" alt="...">
                <div class="card-body">

                    <p class="card-text">Ghế sofa tinh tế sang trọng</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">7,500,000đ</li>
                </ul>
            </div>
            <div class="card m-2 p-0 " style="width: 18rem;">
                <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_lQ1ALI0VMzA5LEqBA9M8JgGt.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">

                    <p class="card-text">Ghế sofa tinh tế sang trọng</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">7,500,000đ</li>

                </ul>
            </div>
            <div class="card m-2 p-0 " style="width: 18rem;">
                <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_ppSyOzynDzF0EL4028YHVa7d.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">

                    <p class="card-text">Ghế sofa tinh tế sang trọng</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">7,500,000đ</li>
                </ul>
            </div>


        </div>
        <div class="row m-4">
            <h3>
                Sản Phẩm giảm giá
            </h3>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-1 " style="width: 18rem;">
                            <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_HfN7pRv1A1Jg1wlY9vIoT3Zb.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Bàn làm việc ghế xoay H72</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">312,000đ<s m class="m-4">380,000đ</s></li>
                            </ul>
                        </div>
                        <div class="card mb-1 " style="width: 18rem;">
                            <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_55x23PoewLgekfNGUCaoO5tK.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Ghế sofa tinh tế sang trọng</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">219,000đ<s m class="m-4">269,000đ</s></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-1 " style="width: 18rem;">
                            <img src="https://pos.nvncdn.net/fb2876-39302/ps/20190228_EGLqgsOvbScE9ScnudlaQYfH.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Bàn làm việc văn phòng N95</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">269,000đ<s m class="m-4">354,000đ</s></li>
                            </ul>
                        </div>
                        <div class="card mb-1 " style="width: 18rem;">
                            <img src="	https://pos.nvncdn.net/fb2876-39302/ps/20190228_ifDAeLjxuaMudP7zmLWSph9f.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">

                                <p class="card-text">Bàn làm việc kéo tiện ích</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">312,000đ</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-6">
                <div class="container text-center">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col">
                            <div class="card" style="width: 38rem">
                                <img src="https://pos.nvncdn.net/fb2876-39302/bn/20210111_WNRNAz2ZHGOisIUISzLL8Yi0.png"
                                    class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class=" text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4886218010843!2d106.69449747480495!3d10.773838789374802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f38d8f837bb%3A0xf7721ff8e9a206c3!2zMTIzIEzDvSBU4buxIFRy4buNbmcsIFBoxrDhu51uZyBC4bq_biBUaMOgbmgsIFF14bqtbiAxLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1700064000711!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <footer id="footer"><!--Footer-->

            <div class="row">
                <div class="col-4 p-0">
                    <div class="text-center bg-dark text-light "style="height: 200px; position: relative; ">
                        <div style="position: absolute;left: 20px;
                  right: 20px; top: 30%;">
                            <h4>ĐƯỢC YÊU THÍCH TỪ 2018</h4>
                            <span style=" width: 30%;">với các sản phẩm khác biệt, giá tốt <br> và chất lượng đảm bảo.
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 p-0">
                    <div class="text-center bg-secondary text-light "style="height: 200px; position: relative; ">
                        <div style="position: absolute;left: 20px;
                      right: 20px; top: 30%;">
                            <h4>KHÔNG PHẢI ĐI ĐÂU XA</h4>
                            <span style=" width: 30%;">với các cửa hàng ngay trung <br> tâm thành phố trực thuộc.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-0">
                    <div class="text-center bg-light text-dark "style="height: 200px; position: relative; ">
                        <div style="position: absolute;left: 20px;
                          right: 20px; top: 30%;">
                            <h4>ĐỊA CHỈ & ĐIỆN THOẠI</h4>
                            <span style=" width: 30%;">89 Trần Nhật Duật Hà Nội <br>
                                0843331988 <br>
                                123 Lý Tự Trọng Q1 HCM <br>
                                0390931988 <br>

                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-1">
                <span class="bg-dark text-light">Thiết kế website bởi Thiết kế web bởi <i class="text-danger">CÔNG KHÁNH</i> </span>
            </div>

    </div>
    </div>

    </div>

    </footer><!--/Footer-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script>
        // Lấy carousel element
        var carousel = document.getElementById("carouselExampleCaptions");

        // Kích hoạt carousel
        var carouselInstance = new bootstrap.Carousel(carousel, {
            interval: 2000, // Thời gian (miligiây) giữa các slide
        });
    </script>
</body>

</html>
