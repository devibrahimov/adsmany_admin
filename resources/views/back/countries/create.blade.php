@extends('back.layouts.master')
@section('title','Ölkə Yarat')
@section('content')
            <!-- general form elements -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Language Form</h3>
                <a href="{{route('admin.country')}}" class="btn btn-info btn-xs float-right"><i class="fas fa-undo"></i> Geri Qayıt</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('admin.language.create')}}" method="POST">
                   @include('back.layouts.partials.errors')
                   @include('back.layouts.partials.alert')
                @csrf

                <div class="card-body">
                  @foreach($languages as $language)
                <div class="form-group">
                    <label for="">({{$language->name}})</label>
                    <input type="text" class="form-control"  name="country_{{$language->code}}">
                  </div>
                  @endforeach

                <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-block">Əlavə Et</button>
                </div>
              </form>
            </div>
@endsection
