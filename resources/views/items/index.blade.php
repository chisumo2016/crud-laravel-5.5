@extends('layouts.master')

@section('content')
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
                  <th >{{ $item->updated_at }}</th>
                  <th >Edit , show , Delete </th>
              </tr>
          @endforeach
        </tbody>
    </table>
@endsection