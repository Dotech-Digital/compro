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
                                    {{ $title }}
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group required mb-2">
                                    <label class="control-label col-form-label">API Token</label>
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control form-control-sm" id="api_token"
                                            name="api_token" readonly
                                            value="{{ isset($user->api_token) ? $user->api_token : '' }}" disabled />
                                        <span class="input-group-append">
                                            <button data-key="{{ $user->api_token }}" class="btn btn-info btn-flat tooltips"
                                                data-placement="left" data-original-title="Copy Token" id="copy">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="#" data-block="body" data-url="{{ $url }}/{{ $user->user_id }}"
                                    class="ajax_modal btn btn-danger tooltips text-light" data-placement="left"
                                    data-original-title="Regenerate">Regenerate</i></a>
                            </div>
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
            $('#copy').click(function() {
                const key = $(this).data('key')
                navigator.clipboard.writeText(key);
                toastr.success('Successfully copy to clipboard');
            })
        })
    </script>
@endpush
