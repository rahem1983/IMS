@extends('layout.master')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #Inventory {
      left: 10;
      right: 10;
      width: 100%;

    }
    .R1 {
        float:right;
    }
</style>

{{-- storage detail --}}
<div class="container-sm pt-3" id="Inventory">
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
                <td><a href="deleteInventory/{{$item->id}}"><button type="button" class="btn btn-outline-danger">Remove</button></a></td>

              </tr>
            @endforeach

        </tbody>
      </table>
</div>


<div class="container pt-5 mt-3 ">
    <p class="text-danger">Remember Inventory ID to edit</p>
    
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#myModal1">
      Add Inventory
    </button>
    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
      Edit Inventory
    </button>
  </div>
  
  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Inventory</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/addInventory" method="POST">
            @csrf
  
            <div class="mb-3">
              <label for="name" class="form-label">Inventory Name</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>
  
              <div class="mb-3">
                <label for="rent" class="form-label">Rent</label>
                <input type="number" id="rent" name="rent" class="form-control" min="0" required>
              </div>
  
              <div class="mb-3">
                <label for="electricity_bill" class="form-label">Electricity Bill</label>
                <input type="number" id="electricity_bill" name="electricity_bill" class="form-control" min="0" required>
              </div>
  
              <div class="mb-3">
                <label for="gas_bill" class="form-label">Gas bill</label>
                <input type="number" id="gas_bill" name="gas_bill" class="form-control" min="0" required>
              </div>
  
              <div class="mb-3">
                <label for="other_bill" class="form-label">Other Bill</label>
                <input type="number" id="other_bill" name="other_bill" class="form-control" min="0" required>
              </div>
  
              <div class="mb-3">
                <label for="employee_salary" class="form-label">Employee Salary</label>
                <input type="number" id="employee_salary" name="employee_salary" class="form-control" min="0" required>
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
          <h4 class="modal-title">Edit Inventory</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/editInventory" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Inventory ID</label>
                <input type="text" id="id" name="id" class="form-control" required>
              </div>
              
              <div class="mb-3">
                <label for="name" class="form-label">Inventory Name</label>
                <input type="text" id="name" name="name" class="form-control" >
              </div>
    
                <div class="mb-3">
                  <label for="rent" class="form-label">Rent</label>
                  <input type="number" id="rent" name="rent" class="form-control" min="0" >
                </div>
    
                <div class="mb-3">
                  <label for="electricity_bill" class="form-label">Electricity Bill</label>
                  <input type="number" id="electricity_bill" name="electricity_bill" class="form-control" min="0">
                </div>
    
                <div class="mb-3">
                  <label for="gas_bill" class="form-label">Gas bill</label>
                  <input type="number" id="gas_bill" name="gas_bill" class="form-control" min="0">
                </div>
    
                <div class="mb-3">
                  <label for="other_bill" class="form-label">Other Bill</label>
                  <input type="number" id="other_bill" name="other_bill" class="form-control" min="0">
                </div>
    
                <div class="mb-3">
                  <label for="employee_salary" class="form-label">Employee Salary</label>
                  <input type="number" id="employee_salary" name="employee_salary" class="form-control" min="0">
                </div>
              <button type="submit" class="btn btn-outline-secondary">Edit</button>
            
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