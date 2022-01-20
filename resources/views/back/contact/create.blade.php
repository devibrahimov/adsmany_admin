@extends('back\layouts\master')
@section('title','Contact Yarat')
@section('content')
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Contact Form</h3>
                <a href="{{route('admin.contact')}}" class="btn btn-info btn-xs float-right"><i class="fas fa-undo"></i> Geri Qayıt</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.contact.create')}}" method="POST">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Ad</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name">
                  </div>
                 <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" id="" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" id="" placeholder="Email" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="">Adres</label>
                    <input type="text" class="form-control" id="" placeholder="Email" name="adress">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-block">Əlavə Et</button>
                </div>
              </form>
            </div>
@endsection
