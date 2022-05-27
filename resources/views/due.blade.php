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
    <h3 class="pt-3 text-center">Amount to pay</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Produt</th>
            <th scope="col">Buyer</th>
            <th scope="col">Delivery Guy</th>
            <th scope="col">Delivering time</th>
            <th scope="col">Receiving time</th>
            <th scope="col">Total</th>
            
          </tr>
        </thead>
        <tbody>
            {{-- @foreach ($sell as $item)
            
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->end_client_name}}</td>
                <td>{{$item->delivery_name}}</td>
                <td>{{$item->delivery_time}}</td>
                <td>{{$item->end_client_receive_time}}</td>
                <td>{{$item->total}}</td>
              </tr>
              
            @endforeach --}}
          
          <tr>
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
          </tr>
        </tbody>
      </table>
</div>
@endsection