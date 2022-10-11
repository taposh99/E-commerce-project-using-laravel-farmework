@extends('admin.master')
@section('tittle')
    update product
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add product form</h3></div>
                    <div class="card-body">
                        <form action="{{route('update-product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$product->product_id}}" name="product_id">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" value="{{$product->product_name}}" name="product_name" placeholder="Enter product name" />

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" type="text"value="{{$product->category_name}}" name="category_name" placeholder="category_name" />

                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text"value="{{$product->brand_name}}" name="brand_name" placeholder="brand_name" />
                                <label for="inputEmail">Brand name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" value="{{$product->price}}"name="price" placeholder="price" />

                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control"  name="description" id="" cols="30" rows="10">{{$product->description}}</textarea>

                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="file" name="image" placeholder="image" />
                                <img src="{{asset($product->image)}}" alt="" style="height: 80px; width: 80px">
                            </div>



                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" class="btn-danger form-control" value="update">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

