@extends('admin.master')
@section('tittle')
    add product
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add product form</h3></div>
                    <div class="card-body">
                        <form action="{{route('new-product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" name="product_name" placeholder="Enter product name" />
                                        <label for="inputFirstName">product name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" type="text" name="category_name" placeholder="category_name" />
                                        <label for="inputLastName">category name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="brand_name" placeholder="brand_name" />
                                <label for="inputEmail">Brand name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="text" name="price" placeholder="price" />
                                <label for="inputEmail">price</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                <label for="inputEmail">description</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="file" name="image" placeholder="image" />
                            </div>



                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" class="btn-danger form-control" value="submit">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

