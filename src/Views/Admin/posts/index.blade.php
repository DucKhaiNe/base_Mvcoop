@extends('layouts.master')

@section('title')
    Quản lý Bài Viết
@endsection

@section('content')
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    @if (isset($_SESSION['status']) && !$_SESSION['status'])
        <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    <a href="{{ url("admin/posts/create") }}" class="btn btn-primary">Thêm mới</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>HÌNH ẢNH</th>
                <th>TIÊU ĐỀ BÀI VIẾT</th>
                <th>NGƯỜI VIẾT</th>
                <th>NGÀY ĐĂNG</th>
                <th>NGÀY SỬA</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>
                        <img src="{{ asset($post['hinh_anh']) }}" width="100px" alt="">
                    </td>
                    <td>{{ $post['tieu_de'] }}</td>
                    <td>{{ $post['mo_ta'] }}</td>
                    <td>{{ $post['us_name'] }}</td>
                    <td>{{ $post['us_email'] }}</td>
                    <td>{{ $post['ngay_dang'] }}</td>
                    <td>{{ $post['ngay_sua'] }}</td>
                    <td>
                        <a href="{{ url("admin/posts/{$post['id']}/show") }}" class="btn btn-info">Xem</a>
                        <a href="{{ url("admin/posts/{$post['id']}/edit") }}" class="btn btn-warning">Sửa</a>
                        <a href="{{ url("admin/posts/{$post['id']}/delete") }}"
                            onclick="return confirm('Chắc chắn xóa không?');" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
