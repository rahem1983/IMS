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
    .R1 {
        float:right;
    }
</style>

{{-- storage detail --}}
<div class="container-sm pt-3" id="product">
    <h3 class="pt-3 text-center">Sells Details</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Supplier</th>
            <th scope="col">Vendor</th>
            <th scope="col">Last Arrival</th>
            <th scope="col">Exp Date</th>
            <th scope="col">In Stock</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($storage as $item)
            
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->unit_price}}</td>
                <td>{{$item->suppliers}}</td>
                <td>{{$item->vendors}}</td>
                <td>{{$item->last_arrival }}</td>
                <td>{{$item->exp_date }}</td>
                @if ($item->amount_in_stock == 0)
                <td class="text-danger">{{$item->amount_in_stock}}</td>
                @else
                <td class="text-success">{{$item->amount_in_stock}}</td>
                @endif
              </tr>
            @endforeach

        </tbody>
      </table>
</div>

<div class="container pt-5 mt-3 ">
    <p class="text-danger">Remember product ID to edit</p>
    
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
      Edit The Stock
    </button>
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
          <form action="/editStorage" method="POST">
            @csrf
            <div class="mb-3">
              <label for="id" class="form-label">Product ID</label>
              <input type="number" id="id" name="id" class="form-control" min="0" required>
            </div>

            <div class="mb-3">
                <label for="amount_in_stock" class="form-label">Number of product added in the stock</label>
                <input type="number" id="amount_in_stock" name="amount_in_stock" class="form-control" min="0" >
              </div>

            <div class="mb-3">
                <label for="exp_date" class="form-label">Expiry Date</label>
                <input type="date" id="exp_date" name="exp_date" class="form-control">
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