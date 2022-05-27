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
            <th scope="col">Rent</th>
            <th scope="col">Electricity Bill</th>
            <th scope="col">Gas bill</th>
            <th scope="col">Other Bill</th>
            <th scope="col">Employee Salary</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($inventory as $item)
            
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->rent}}</td>
                <td>{{$item->electricity_bill}}</td>
                <td>{{$item->gas_bill}}</td>
                <td>{{$item->other_bill}}</td>
                <td>{{$item->employee_salary}}</td>
              </tr>
            @endforeach

        </tbody>
      </table>
</div>
@endsection