@extends('component.main')

@section('title', 'Blog')

@section('main')
<div class="container py-4 py-lg-5">
    <div class="fables-blog my-3">
        <h2 class="fables-second-text-color mb-4 mb-lg-5 font-weight-bold">Detail laptop</h2>
        <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-lg-5">
                <a href="/blogdetail"><img src="assets/custom/images/cat-larg4.jpg" alt="" class="w-100"></a>
                <h2 class="font-weight-bold font-20 my-3"><a href="/blogdetail"
                        class="fables-second-text-color fables-main-hover-color">
                        LENOVO IdeaPad IP330-15ICH</a></h2>

                <p class="fables-forth-text-color font-14">
                    {{-- Lenovo IdeaPad IP330-15ICH adalah laptop yang dirancang untuk memberikan kinerja yang dapat diandalkan dalam berbagai tugas sehari-hari, mulai dari pekerjaan kantor hingga hiburan multimedia. Dengan prosesor yang kuat dan penyimpanan yang cepat, laptop ini cocok untuk penggunaan sehari-hari dan multitasking ringan. Desainnya yang ringkas dan bahan berkualitas membuatnya mudah dibawa ke mana-mana. Layar yang jernih dan nyaman membuat pengalaman menonton dan bekerja lebih menyenangkan. Dengan fitur-fitur tambahan seperti keyboard ergonomis dan konektivitas yang luas, Lenovo IdeaPad IP330-15ICH merupakan pilihan yang solid bagi pengguna yang menginginkan laptop yang handal dan fungsional. --}}
                    Lenovo IdeaPad IP330-15ICH adalah laptop yang dirancang untuk memberikan kinerja yang dapat diandalkan.
                </p>
                <a href="/blogdetail" class="btn fables-second-text-color fables-main-hover-color p-0 mt-2">
                    <span class="underline">Read More</span>
                    <span class="fables-iconarrow-light ml-2"></span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection