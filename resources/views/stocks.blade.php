@extends('layout.master')
@section('content')

<style>
    #product {
      left: 10;
      right: 10;
      width: 100%;

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
@endsection