@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-9">
        <h3>{{trans('tpl.category.index.tt') }}</h3>
    </div>
    <div class="col-md-3 text-right">
        <a href="{{ route('category.create') }}" class="btn btn-primary">Create</a>
    </div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">TT</th>
        <th scope="col">Tieu de</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    @foreach($catList as $cat)
      <tr>
        <th scope="row">{{ $i++ }}</th>
        <td><a href="{{ route('category.show', ['id' => $cat->id])}}">{{ $cat->tieu_de }}</a></td>
       
        <td><a href="{{ route('category.edit', ['id' => $cat->id])}}"><button class="btn btn-danger">Edit</button></a></td>
        <td>
            <form action="{{ route('category.destroy', ['id' => $cat->id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button class="form-control btn-primary">Delete</button>
            </form>
            
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection