@extends('layout')

@section('content')
<div class="card uper">
 <div class="card-header">
  <h4>Add Loan</h4>
 </div>
 <div class="card-body">
   @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     <button type="button" class="close" data-dismiss="alert" 
       aria-label="Close">
       <span aria-hidden="true">&times;</span>
              </button>
   @endforeach 
    </ul>
    </div><br/>
  @endif
  <form method="post" action="{{ route('loans.store') }}">
    @csrf
    <div class="form-group">
      <label for="employee">Employee Name:</label><span class="error"> *</span>
            <input type="text" class="form-control" name="employee" required/>
    </div>
    <div class="form-group">
      <label for="loanAmount">Loans Amount:</label><span class="error"> *</span>
            <input type="text" class="form-control" name="loanAmount" required/>
    </div>
          <div class="form-group">
      <label for="currency">Currency:</label><span class="error"> *</span>
      <select name="currency" class="form-control" required>
              <option> Dollar </option>
              <option> Dinar </option>
              <option> Euro</option>
            </select>
    </div>
    <div class="form-group">
      <label for="date"> The Date:</label><span class="error"> *</span>
   <input type="date" class="form-control" name="date" required/>
    </div>

    </div>
    <div class="form-group">
      <label for="startDate"> The Start Date Of Installment:</label><span class="error"> *</span>
   <input type="date" class="form-control" name="startDate" required/>
    </div>

    <div class="form-group">
      <label for="InstallmentAmount">Installment Amount:</label><span class="error"> *</span>
            <input type="text" class="form-control" name="InstallmentAmount" required/>
    </div>


    <button type="submit" class="btn btn-primary">Add</button>
    <a href="{{ route('loans.index') }}" class="btn btn-info">Back</a>
   </form>
    </div>
  </div>
@endsection