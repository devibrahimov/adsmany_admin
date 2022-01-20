@extends('back\layouts\master')
@section('title','User Create')
@section('content')
            <!-- general form elements -->
            <div class="card card">
              <div class="card-header">
                <h3 class="card-title">Language Form</h3>
                <a href="{{route('admin.language')}}" class="btn btn-info btn-xs float-right"><i class="fas fa-undo"></i> Geri Qayıt</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Ad</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name" value="{{old('name',$language->name)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name" value="{{old('name',$language->code)}}">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-block">Create</button>
                </div>
              </form>
            </div>
@endsection
