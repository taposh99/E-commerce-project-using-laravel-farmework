@extends('admin.master')
@section('tittle')
    manage product
@endsection

@section('content')
    <div class="container-fluid px-4">


        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>product Name</th>
                        <th>Cateory Name</th>
                        <th>brand name</th>
                        <th>price</th>
                        <th>description</th>
                        <th>image</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @php $i=1 @endphp
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->category_name }}</td>
                        <td>{{ $product->brand_name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <img src="{{ asset($product->image) }}" style="height: 50px;width: 50px" alt="">
                        </td>
                        <td>{{ $product->status==1?'published':'unpublished' }}</td>

                        <td>
                            @if($product->status==1)
                            <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-warning">unpublished</a>
                            @else
                                <a href="{{route('status',['id'=>$product->id])}}" class="btn btn-primary">published</a>
                            @endif


                                <a href="{{route('edit',['id'=>$product->id])}}" class="btn btn-primary">Edit</a>
                            <form action="" method="post">
                                @csrf
                                <input type="hidden" name="blog_id" value="">
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are You Sure !!')">
                            </form>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

