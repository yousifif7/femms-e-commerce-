@extends('admin.main')
@section('active1')
    active text-danger
@endsection

<?php
$products = App\Models\Products::get()->all();
?>

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add a new product
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/product/create" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Product name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Product price</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="price">
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Product picture</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" >
                            @error('img')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Post product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">date</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        @foreach ($products as $product)
            <tbody>
                <?php
                $time = $product->created_at->setTimezone('Asia/Gaza');
                ?>
                <td>
                    <p>{{ $product->id }}</p>
                </td>

                <td>
                    <p><a href="/product/{{$product->id}}" style="text-decoration: none;">{{ $product->name }}</a></p>  
                </td>

                <td>
                    <p>{{ $product->price }}</p>
                </td>

                <td>{{ $time->format('Y-m-d') }}
                    <p class="text-primary">{{ $time->diffForHumans() }}</p>
                </td>
                <td>
                    <form method="POST" action="/product/{{ $product->id }}">
                        @csrf
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </form>
                </td>            
            </tbody>
        @endforeach
    </table>
@endsection
