@extends('admin.admin_layout')
@section('content')
<form  class="container" action='/service_image/edit/{{$service_image->id}}' method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="service">
    @foreach ($services as $service)
    <option value="{{$service->id}}">{{$service->title_en}}</option>
    @endforeach
  </select>
</div>
  <input class="active" type="file" name="img" enctype="multipart/form-data">
  <br><br>
  <button style="background-color:#990000;color:white" type="submit" class="btn">Edit Service Image</button>
</form>
@endsection