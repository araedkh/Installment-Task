@extends('layout')

@section('content')
<div class="card uper">
 <div class="card-header">
  <h4>Edit Loan</h4>
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
  <form method="post" action="{{ route('loans.update', $loan->id) }}">
    @method('PATCH')
    @csrf
    <div class="form-group">
      <label for="employee">Employee Name:</label>
            <input type="text" class="form-control" name="employee" value={{ $loan->employee }}/>
    </div>
    <div class="form-group">
      <label for="loanAmount">Loans Amount:</label>
            <input type="text" class="form-control" name="loanAmount" value={{ $loan->loanAmount }}/>
    </div>
          <div class="form-group">
      <label for="currency">Currency:</label>
      <select name="currency" class="form-control" value={{ $loan->currency }}>
              <option> Dollar </option>
              <option> Dinar </option>
              <option> Euro</option>
            </select>
    </div>
    <div class="form-group">
      <label for="date"> The Date:</label>
   <input type="date" class="form-control" name="date" 
             value={{ $loan->date }}/>
    </div>

    </div>
    <div class="form-group">
      <label for="startDate"> The Start Date Of Installment:</label>
   <input type="date" class="form-control" name="startDate" 
                    value={{ $loan->startDate }}/>
    </div>

    <div class="form-group">
      <label for="InstallmentAmount">Installment Amount:</label>
            <input type="text" class="form-control" name="InstallmentAmount"
             value={{ $loan->InstallmentAmount }}/>
    </div>


    <button type="submit" class="btn btn-primary">Update</button>
   </form>
    </div>
  </div>
@endsection