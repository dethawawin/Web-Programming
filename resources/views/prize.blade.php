@extends('template')
@section('title', 'Doorprize')

@section('content')
    <section class="block py-6 custom-font" style="font-size: large; margin-top: 50px; margin-left:100px">
        <div class="container justify-content-center">

            <h2 class="title is-3">Congratulations! Here is your Prize!</h2>
            <br>
            <br>
            @switch($id)
                @case(1)
                    <img class="rounded" style="width: 400px" src="https://www.mapgiftvoucher.com/media/catalog/product/cache/9aa1bf79703818ee6fb2d09551dfbbcf/2/0/2020.12.map-gv_website-revamp_pdp-plp_ikon-image-evoucher-500rb_1000-x-1000-pixel.jpg" alt="">
                    <p>MAP VOUCHER Rp500.000,00</p>
                @break
                @case(2)
                    <img class="rounded" style="width: 400px" src="https://www.mapgiftvoucher.com/media/catalog/product/cache/b8a1c7fe6f9cf81b9f9397940d5d3d8b/2/0/2020.12.mapgvxkemana_pdp-plp_icon_img-voucher7_1000x1000-px_1.jpg" alt="">
                    <p>MAP VOUCHER Rp100.000,00</p>
                @break
                @case(3)
                    <img class="rounded" style="width: 400px" src="https://www.mapgiftvoucher.com/media/catalog/product/cache/b8a1c7fe6f9cf81b9f9397940d5d3d8b/2/0/2020.12.mapgvxkemana_pdp-plp_icon_img-voucher1.jpg" alt="">
                    <p>MAP VOUCHER Rp50.000,00</p>
                @break
                @case(4)
                    <img class="rounded" style="width: 400px" src="https://cf.shopee.co.id/file/ab38ad13f72319d8b73d99949c232fbe" alt="">
                    <p>MAP VOUCHER Rp500.000,00</p>
                @break
            @endswitch
        </div>
    </section>
@endsection