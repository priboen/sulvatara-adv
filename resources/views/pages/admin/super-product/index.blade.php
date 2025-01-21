@extends('layouts.admin-app')

@section('title', 'Produk Unggulan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Produk Unggulan</h1>
                <div class="section-header-button">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Produk Unggulan</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Produk Unggulan</h2>
                <p class="section-lead">
                    Kamu dapat mengatur seluruh Produk Unggulan, seperti mengedit, menghapus dan lainnya.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Produk Unggulan</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-right">
                                    <form method="GET" action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Cari nama Produk"
                                                name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix mb-3"></div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Kategori</th>
                                            <th>Merk</th>
                                            <th>Produk Unggulan</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($products as $pd)
                                            <tr>
                                                <td>{{ $pd->name }}</td>
                                                <td>{{ 'Rp. ' . number_format($pd->price, 2, ',', '.') }} /Hari</td>
                                                <td>{{ $pd->category->name }}</td>
                                                <td>{{ $pd->brand->name }}</td>
                                                <td>
                                                    <label class="custom-switch">
                                                        <input type="checkbox" class="custom-switch-input toggle-switch"
                                                            data-id="{{ $pd->id }}"
                                                            {{ $pd->is_super_product ? 'checked' : '' }}>
                                                        <span class="custom-switch-indicator"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-start">
                                                        <a href='{{ route('product.show', $pd->id) }}'
                                                            class="btn btn-sm btn-info btn-icon px-2">
                                                            <i class="fas fa-info"></i> Detail
                                                        </a>
                                                        <form action="{{ route('product.destroy', $pd->id) }}"
                                                            method="POST" class="px-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $products->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleSwitches = document.querySelectorAll('.toggle-switch');

            toggleSwitches.forEach(toggle => {
                toggle.addEventListener('change', (event) => {
                    const isChecked = event.target.checked;
                    const id = event.target.getAttribute('data-id');
                    const toggleUrl = `{{ route('super-product.toggle', ':id') }}`.replace(':id',
                        id);
                    fetch(toggleUrl, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content'),
                            },
                            body: JSON.stringify({
                                is_super_product: isChecked ? 1 : 0
                            }),
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                console.log(data.message);
                            } else {
                                alert('Gagal memperbarui status produk');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Terjadi kesalahan saat memperbarui status produk');
                        });
                });
            });
        });
    </script>
@endpush
