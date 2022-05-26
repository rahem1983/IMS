@extends('layout.master')
@section('content')

<style>
    #product {
      left: 10;
      right: 10;
      width: 100%;

    }
</style>

{{-- product table  --}}
<div class="container-sm" id="product">
    <h3 class="pt-3 text-center">Product</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
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


{{-- storage detail --}}
<div class="container-sm pt-3" id="product">
    <h3 class="pt-3 text-center">Sells Details</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Produt</th>
            <th scope="col">Buyer</th>
            <th scope="col">Delivery Guy</th>
            <th scope="col">Delivering time</th>
            <th scope="col">Receiving time</th>
            <th scope="col">Total</th>
            
          </tr>
        </thead>
        <tbody>
            @php
                $j = 1;
            @endphp
            @foreach ($sell as $item)
            
            <tr>
                <th scope="row">{{$j}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->end_client_name}}</td>
                <td>{{$item->delivery_name}}</td>
                <td>{{$item->delivery_time}}</td>
                <td>{{$item->end_client_receive_time}}</td>
                <td>{{$item->total}}</td>
              </tr>
              @php
                $j++;
            @endphp
            @endforeach
          
          {{-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
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
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr> --}}
        </tbody>
      </table>
</div>
@endsection