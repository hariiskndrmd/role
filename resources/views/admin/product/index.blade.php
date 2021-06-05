@extends('admin.layouts.app')


@section('css')
<!-- Custom styles for this page -->
<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('script')
<!-- Page level plugins -->
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
@endsection


@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>price</th>
                        <th>option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $row)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{($row->product_name)}}</td>
                            <td>{{$row->id_category}}</td>
                            <td>{{$row->product_stock}}</td>
                            <td>{{$row->product_price}}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-sm btn-danger btn-delete"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <?php $no++ ;?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
