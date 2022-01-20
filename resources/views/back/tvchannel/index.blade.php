@extends('back.layouts.master')
@section('title','TV Kanallar')
@section('css')
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  @endsection
@section('content')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Language Table</h3>
                @include('back.layouts.partials.alert')
              </div>

              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <a href="{{route('admin.tv.store')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Yeni TV Channel Yarat</a>
                  <tr>
                    <th>#ID</th>
                    <th>Ölkə</th>
                    <th>Logo</th>
                    <th>Tv Kanal</th>
                    <th>İşləmlər</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($channels as $channel)
                  <tr>
                    <td>{{$channel->id}}</td>
                    <td>{{$channel->country->name}}</td>
                    <td>
                        <img src="{{$channel->logo}}" width="70px" alt="">
                    </td>
                    <td>{{$channel->name}}</td>
                         <td style="width: 100px">
                                    <a href="{{route('admin.tv.edit',$channel->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Duzenle">
                                        <i class="fa fa-pen"></i> Redaktə Et
                                    </a>
                                    {{--
                                    <a href="" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Əminsinizmi ?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    --}}
                                </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection()
@section('footer')
<script src="{{asset('back')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
