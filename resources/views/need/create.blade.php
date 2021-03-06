@extends('layout')

@section('title')
Need
@stop

@section('content')
<div class="col-md-12">
<form role="form" class="form-horizontal col-md-5" action="/need/create" method="post">
 <div class="form-group">
  <label for="id" class="control-label">id</label>
  <input type="number" class="form-control" name="id_from">
 </div>
 <div class="form-group">
  <label for="text" class="control-label">Текст</label>
  <input type="text" class="form-control" name="text" placeholder="Текст">
 </div>
 <div class="form-group">
  <label for="category" class="control-label">Категория</label>
  <input type="text" class="form-control" name="category" placeholder="Категория">
 </div>
 <div class="form-group">
  <label for="points" class="control-label">Баллы</label>
  <input type="number" class="form-control" name="points">
 </div>
 <div class="form-group">
 <input type="hidden" value="{{ csrf_token() }}" name="_token">
 </div>
 <button type="submit" class="btn btn-success">Добавить</button>
</form>
</div>
@stop