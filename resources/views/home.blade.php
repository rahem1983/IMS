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
                <td><a href="deleteProduct/{{$item->id}}"><button type="button" class="btn btn-outline-danger">Remove</button></a></td>

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
  <p class="text-danger">Remember product ID to edit</p>
  
  <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#myModal1">
    Add Product
  </button>
  <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
    Edit Product
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Product</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/addProduct" method="POST">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>

            <div class="mb-3">
              <label for="unit_price" class="form-label">Price</label>
              <input type="text" id="unit_price" name="unit_price" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="suppliers" class="form-label">Supplier Name</label>
              <input type="text" id="suppliers" name="suppliers" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="vendors" class="form-label">Vendor Name</label>
              <input type="text" id="vendors" name="vendors" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="amount_in_stock" class="form-label">Amount to stock</label>
              <input type="text" id="amount_in_stock" name="amount_in_stock" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="exp_date" class="form-label">Expiry Date <small> (If Required) </small></label>
              <input type="date" id="exp_date" name="exp_date" class="form-control">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Product Details</label>
              <textarea class="form-control" name="details" id="details" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add</button>
          
        </form>
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
        <form action="/editProduct" method="POST">
          @csrf
          <div class="mb-3">
            <label for="id" class="form-label">Product ID</label>
            <input type="number" id="id" name="id" class="form-control" min="0" required>
          </div>

            <div class="mb-3">
              <label for="name" class="form-label">Product Name</label>
              <input type="text" id="name" name="name" class="form-control" >
            </div>

            <div class="mb-3">
              <label for="unit_price" class="form-label">Price</label>
              <input type="text" id="unit_price" name="unit_price" class="form-control" >
            </div>

            <div class="mb-3">
              <label for="suppliers" class="form-label">Supplier Name</label>
              <input type="text" id="suppliers" name="suppliers" class="form-control" >
            </div>

            <div class="mb-3">
              <label for="vendors" class="form-label">Vendor Name</label>
              <input type="text" id="vendors" name="vendors" class="form-control" >
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Product Details</label>
              <textarea class="form-control" name="details" id="details" ></textarea>
            </div>
            <button type="submit" class="btn btn-success">Edit</button>
          
        </form>
      </div>

      <!-- Modal footer -->
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> --}}

    </div>
  </div>
</div>
@endsection