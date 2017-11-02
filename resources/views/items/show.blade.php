@extends('layouts.master')

@section('content')
 <div class="row">
     <div class="form-group">
         <strong>Title :</strong> {{ $item->title }} <br>
     </div>


     <div class="form-group">
         <strong>Description :</strong>{{ $item->description }}
     </div>
     <div class="form-group">
         <strong>Created At :</strong>{{ $item->created_at->diffForhumans()}}
     </div><br>

     <div class="form-group">
         <strong>Updated At :</strong>{{ $item->updated_at->diffForhumans() }}
     </div>
 </div>

@endsection