<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>
@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            @foreach ($breadcrumbs as $breadcrumb)
                                {{-- check active by comparing the URL from $breadcrumb['url'] with the current URL --}}
                                @php
                                    $isActive = url()->current() == $breadcrumb['url'];
                                @endphp

                                <li class="breadcrumb-item {{ $isActive ? 'active' : '' }}">
                                    @if ($isActive)
                                        {{ $breadcrumb['title'] }}
                                    @else
                                        <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a>
                                    @endif
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mt-1">
                                    List {{ $title }}
                                </h3>
                                <div class="card-tools">
                                    @if ($allowAccess->create)
                                        <button type="button" data-block="body"
                                            class="btn btn-sm btn-primary mt-1 ajax_modal"
                                            data-url="{{ $url }}/create"><i class="fas fa-plus"></i>
                                            Add</button>
                                    @endif
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsives">
                                    <table class="table table-striped table-hover table-full-width" id="main_table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Number</th>
                                                <th>Holder</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    {{-- {{ $asets->links('vendor.pagination.bootstrap-4') }} --}}
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var v = 0;
            dataMaster = $('#main_table').DataTable({
                "bServerSide": true,
                "bAutoWidth": false,
                "ajax": {
                    "url": "{{ $url }}/list",
                    "dataType": "json",
                    "type": "POST",
                    //append _token to data
                    "data": {
                        "_token": "{{ csrf_token() }}", // Replace this with the actual method to get your CSRF token
                        // Other data properties if needed
                    }
                },
                "aoColumns": [{
                        "mData": "DT_RowIndex",
                        "sClass": "text-center",
                        "sWidth": "5%",
                        "bSortable": false,
                        "bSearchable": false
                    },
                    {
                        "mData": "name",
                        "sClass": "",
                        "sWidth": "10%",
                        "bSortable": false,
                        "bSearchable": true
                    },
                    {
                        "mData": "number",
                        "sClass": "",
                        "sWidth": "10%",
                        "bSortable": false,
                        "bSearchable": true,
                    },
                    {
                        "mData": "holder",
                        "sClass": "",
                        "sWidth": "10%",
                        "bSortable": false,
                        "bSearchable": true
                    }, {
                        "mData": "image",
                        "sClass": "",
                        "sWidth": "10%",
                        "bSortable": false,
                        "bSearchable": true,
                        "mRender": function(data, type, row, meta) {
                            return data ? '<img src="{{ asset('assets/img/bank') }}/' + data +
                                '" class="img-thumbnail" width="50" height="50" />' : '';
                        }
                    },
                    {
                        "mData": "is_active",
                        "sClass": "text-center",
                        "sWidth": "10%",
                        "bSortable": false,
                        "bSearchable": false,
                        "mRender": function(data, type, row, meta) {
                            return data == 1 ? '<span class="badge badge-success">Active</span>' :
                                '<span class="badge badge-danger">Inactive</span>';
                        }
                    },
                    {
                        "mData": "bank_id",
                        "sClass": "text-center pr-2",
                        "sWidth": "10%",
                        "bSortable": false,
                        "bSearchable": false,
                        "mRender": function(data, type, row, meta) {
                            return ''
                            @if ($allowAccess->update)
                                +
                                `<a href="#" data-block="body" data-url="{{ $url }}/${data}/edit" class="ajax_modal btn btn-xs btn-warning tooltips text-secondary" data-placement="left" data-original-title="Edit Data" ><i class="fa fa-edit"></i></a> `
                            @endif
                            @if ($allowAccess->delete)
                                +
                                `<a href="#" data-block="body" data-url="{{ $url }}/${data}/delete" class="ajax_modal btn btn-xs btn-danger tooltips text-light" data-placement="left" data-original-title="Delete Data" ><i class="fa fa-trash"></i></a> `
                            @endif ;
                        }
                    }
                ],
                "fnDrawCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                    $('a', this.fnGetNodes()).tooltip();
                }
            });

            $('.dataTables_filter input').unbind().bind('keyup', function(e) {
                if (e.keyCode == 13) {
                    dataMaster.search($(this).val()).draw();
                }
            });
        });
    </script>
@endpush
