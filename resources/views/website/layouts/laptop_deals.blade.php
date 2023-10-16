@extends('website.master')
@section('contents')
    <!-- title -->
    <section class="Laptop-Deal-title">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-capitalize">
                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">laptop</a></li>
                <li class="breadcrumb-item active" aria-current="page">deals</li>
            </ol>
        </nav>
        <br>
        <div class="container">
            <div class="title text-center p-4 border border-dark">
                <p>ল্যাপটপ পয়েন্ট বিডি অনলাইন শপ থেকে যেকোনো ব্র্যান্ডের ল্যাপটপ কিনলেই পাচ্ছেন সর্বোচ্চ ছাড়,!
                </p> <br><br>
                <h2>অফারের পণ্যগুলো দেখতে নিচে স্ক্রল করুন &nbsp; ⬇️</h2>
            </div>
        </div>
    </section>
    <!-- laptop -->
    <section class="all-deals">
        <div class="dealsHeader">
            <h1>Laptop Mega Deal</h1>
            <p>Get exciting discount on Graphics Card</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($laptopDeals as $deal)
                    <div class="col-6 col-lg-3">
                        <div class="card">
                            {{-- badge --}}
                            <p class="card-badge">
                                Save: {{ $deal['regular_price'] - ($deal['regular_price'] * $deal['product_offer']) / 100 }}
                                ৳
                            </p>
                            {{-- image --}}
                            <div class="card-img">
                                <img src="{{ asset('uploads/products/' . $deal->product_image) }}">
                            </div>
                            {{-- cart body --}}
                            <div class="card-details">
                                <a href="{{ route('website.deals.details', $deal->id) }}">
                                    <p>
                                        {{ $deal->model }}
                                    </p>
                                    <span class="text-danger">Price: {{ $deal->regular_price }} ৳</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br><br><br><br>
    </section>
    <!-- Description -->

    <section class="descripiton">
        <div class="container">
            <h4 class="text-danger p-1 mt-4">ডিল ক্যাম্পেইনের শর্তাবলী: </h4>

            <article>
                ল্যাপটপ পয়েন্ট বিডিতে কোন ডিল ক্যাম্পেইন চলছে না আপাতত , ক্যাম্পেইন স্টার্ট হলে আপনাদেরকে আপডেট দেয়া হবে।
                ধন্যবাদ ল্যাপটপ পয়েন্ট বিডি এর সাথে থাকার জন্য।
            </article>
        </div><br><br><br>
    </section>
@endsection
