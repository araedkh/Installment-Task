@extends('layout')

@section('content')
<div class="uper">
 @if(session()->get('success'))
  <div class="alert alert-success">
    {{ session()->get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
          </button>
   </div><br/>
 @endif
</div>
<table class="table table-hover">
  <thead> 
 <tr>
  <td><b>Installment Value</b></td>
  <td><b>Due Date</b></td>
  <td><b>Payment Date</b></td>
  <td><b>Amount Paid</b></td>
  <td><b>Installment Status(Paid/Unpaid)</b></td>
  <td colspan="2"><b>Action</b></td>
 </tr>
  </thead>
  <tbody>
   @foreach($loans as $loan)
   <tr>
     <td>{{$loan->id}}</td>
     <td>{{$loan->InstallmentAmount}}</td>
     <td>{{$loan->startDate}}</td>
     <td>{{$loan->date}}</td>
     <td>{{$loan->loanAmount}}</td>

     <td><a href="{{ route('loans.edit', $loan->id) }}" 
    class="btn btn-primary">Edit</a></td>
     <td>
        <form method="post" action="{{ route('loans.destroy', $loan->id) }}">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
   </tr>
   @endforeach
  </tbody>
</table>
<div class="pagination justify-content-center">
 {{ $loans->links() }}
</div>
@endsection