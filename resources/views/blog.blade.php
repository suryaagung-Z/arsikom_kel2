@extends('component.main')

@section('title', 'Blog')

@section('main')
<div class="container py-4 py-lg-5">
    <div class="fables-blog my-3">
        <h2 class="fables-second-text-color mb-4 mb-lg-5 font-weight-bold">Blog</h2>
        <div class="row">
            <div class="col-12 col-md-4 mb-4 mb-lg-5">
                <a href="/blogdetail"><img src="assets/custom/images/magazine-2559842.jpg" alt="" class="w-100"></a>
                <div class="above-date py-3 fables-fifth-text-color">
                    <div class="float-left font-13">
                        <span class="fables-iconcalender"></span> December 27, 2017
                    </div>
                    <div class="float-right font-13">
                        <span class="fables-iconnews"></span> Latest News
                    </div>
                </div>
                <h2 class="font-weight-bold font-20 my-3"><a href="/blogdetail"
                        class="fables-second-text-color fables-main-hover-color">Grow Your Business</a></h2>

                <p class="fables-forth-text-color font-14">
                    When you need your company to have a new website or if you venture on updating your old webpage with
                    a new look and functionality. the
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