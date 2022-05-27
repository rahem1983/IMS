@extends('layout.master')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    #product {
      left: 10;
      right: 10;
      width: 100%;

    }
    .R1{
   float:right;
}
</style>

{{-- product table  --}}
<div class="container-sm" id="product">
    <h3 class="pt-3 text-center">Product</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Supplier</th>
            <th scope="col">Vendor</th>
            <th scope="col">Detail</th>
            <th scope="col">In Stock</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->unit_price}}</td>
                <td>{{$item->suppliers}}</td>
                <td>{{$item->vendors}}</td>
                <td>{{$item->details}}</td>
                @if ($item->amount_in_stock == 0)
                <td class="text-danger">{{$item->amount_in_stock}}</td>
                @else
                <td class="text-success">{{$item->amount_in_stock}}</td>
                @endif
                <td><a href="deleteProduct/{{$item->id}}"><button type="button" class="btn btn-danger">Remove</button></a></td>

              </tr>
            @endforeach
{{--           
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr> --}}
        </tbody>
      </table>
</div>

<div class="container pt-5 mt-3 ">
  <p>Remember product id to edit</p>
  
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal1">
    Add Product
  </button>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
    Edit Product
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Product</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action=""></form>
      </div>

      <!-- Modal footer -->
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> --}}

    </div>
  </div>
</div>

<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Product</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> --}}

    </div>
  </div>
</div>
@endsection