@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h4>Manage Kategori</h4>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card">
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
    <script>
        $(document).ready(function () {
            $('#kategoriTable').on('draw.dt', function () {
                $('.btn-edit').on('click', function () {
                var id = $(this).data('id');
                window.location.href = "{{ url('kategori') }}/" + id + "/edit";
            });
            });
        });
    </script>
@endpush
