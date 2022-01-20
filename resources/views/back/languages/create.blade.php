@extends('back\layouts\master')
@section('title','Dil Yarat')
@section('content')
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Language Form</h3>
                <a href="{{route('admin.language')}}" class="btn btn-info btn-xs float-right"><i class="fas fa-undo"></i> Geri Qayıt</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.language.create')}}" method="POST">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Dil (hər dili öz dlində yazın)</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name">
                  </div>
                 <div class="form-group">
                    <label for="">Dilin kodu (hər dilkodu dünyaca qəbul edilmiş şəkildə yazın)</label>
                    <input type="text" class="form-control" id="" placeholder="Kod" name="code">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-block">Əlavə Et</button>
                </div>
              </form>
            </div>
@endsection
