@extends('layouts.master')

@section('content')
    <br><br>
   <div class="row">
       <div class="col-lg-6 margin-tb">
           <div class="pull-right">
               <h5>Items</h5>
           </div>
       </div>
        <div class="col-lg-6 margin-tb">
           <div class="pull-right">
               <a  class="btn btn-success"  href="{{ route('items.create') }}"> Create New Item</a>
           </div>
       </div>
   </div>
    <hr>
    <table class="table">
        <thead >
        <tr>
            <th >#</th>
            <th >Title</th>
            <th >Description</th>
            <th >Created at</th>
            <th >Updated at</th>
            <th >Actions</th>
        </tr>
        </thead>
        <tbody>
          @foreach($items as $item)

              <tr>
                  <th>{{ $item->id }}</th>
                  <th>{{ $item->title }}e</th>
                  <th>{{ $item->description }}</th>
                  <th>{{ $item->created_at }}</th>
                  <th>{{ $item->updated_at }}</th>
                  <th>
                      <td>
                      <a href="#" class="btn btn-info">Show</a>
                      <a href="#" class="btn btn-primary">Edit</a>
                      <a href="#" class="btn btn-danger">Delete</a>
                     </td>

                  </th>
              </tr>
          @endforeach
        </tbody>
    </table>
@endsection