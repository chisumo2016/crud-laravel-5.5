@extends('layouts.master')

@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
    @endif
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
                      <a href="{{ route('items.show',$item->id) }}" class="btn btn-info" >Show</a>
                      <a href="{{ route('items.edit',$item->id) }}" class="btn btn-primary">Edit</a>
                        {!! Form::open(['method' =>'DELETE', 'action'=> ['ItemController@destroy',$item->id], 'style'=> 'display:inline'])     !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                     </td>

                  </th>
              </tr>
          @endforeach
        </tbody>
    </table>
@endsection