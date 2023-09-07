@extends('layout')

<body class="sub_page">
    @section('content')
        <?php
        $carts = App\Models\Cart::where('user_id','=',Auth::user()->id)->get();
        // $products= [App\Models\Products::find($carts->product_id)];?
        ?>
        <div class="container"><br>
            <hr class="dropdown-divider">
            <h3 class="text-center">These items are added to your cart</h3>
            <hr class="dropdown-divider">
            {{-- @unless (count($carts) == 0) --}}
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price per one</th>
                            <th scope="col">total price </th>
                            <th scope="col">Drop</th>
                        </tr>
                    </thead>
                    @foreach ($carts as $cart)
                        <?php
                            $product= App\Models\Products::find($cart->product_id);
                        ?>
                        <tbody>
                            <td>
                                <a class="card-body" href="/product/{{ $product->id }}">
                                    <h5>
                                        <a class="" href="/product/{{ $product->id }}"
                                            style="text-decoration: none;">{{ $product->name }}</a>
                                    </h5>
                                </a>
                            </td>
                            <td>
                                <p>{{ $cart->quantity }}</p>
                            </td>
                            <td>
                                <p>{{ $product->price }}</p>
                            </td>
                            <td>
                                <p>{{ $cart->price }}</p>
                            </td>
                            <td>
                                <form method="POST" action="/cart/{{ $cart->id }}">
                                    {{-- @method('DELETE') --}}
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tbody>
                    @endforeach
                </table>
            {{-- @else
                <div class="container">
                    <h5>You don't have any products to show!</h5><br>
                    <div class="nav-item">
                        <p>List a new product.
                            <a class="" href="/products/create" style="text-decoration: none;">Create product</a>
                        </p>
                    </div>
                </div>
            @endunless --}}
        </div>
    @endsection
</body>
