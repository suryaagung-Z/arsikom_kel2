@extends('component.main')

@section('title', 'Laptop')

@section('style')
<style>
    .p_title {
        -webkit-line-clamp: 1;
    }

    .p_desc {
        -webkit-line-clamp: 3;
    }

    .p_title,
    .p_desc {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .p_img {
        height: 30dvh;
        object-fit: cover;
        object-position: center;
    }
</style>
@endsection

@section('main')
<div class="container py-4 py-lg-5">
    <div class="fables-blog my-3">
        <h2 class="fables-second-text-color mb-4 mb-lg-5 font-weight-bold">Detail laptop</h2>
        <div class="row">
            @foreach ($laptops as $laptop)
            <div class="col-12 col-md-4 mb-4 mb-lg-5">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('laptop.show', ['laptop' => $laptop['id']]) }}">
                            <img src="{{ $laptop['photo'] }}" alt="" class="p_img w-100 d-block">
                        </a>
                        <h2 class="font-weight-bold font-20 my-3">
                            <a href="{{ route('laptop.show', ['laptop' => $laptop['id']]) }}"
                                class="p_title fables-second-text-color fables-main-hover-color">
                                {{ $laptop['name'] }}
                            </a>
                        </h2>
                        <p class="p_desc fables-forth-text-color font-14">
                            {{ $laptop['description'] }}
                        </p>
                        <a href="{{ route('laptop.show', ['laptop' => $laptop['id']]) }}"
                            class="btn fables-second-text-color fables-main-hover-color p-0 mt-2">
                            <span class="underline">Read More</span>
                            <span class="fables-iconarrow-light ml-2"></span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection