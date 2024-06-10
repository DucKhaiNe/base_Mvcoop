@extends('layouts.master')

@section('title')
Thêm mới Bài Viết
@endsection

@section('content')
@if (!empty($_SESSION['errors']))
<div class="alert alert-warning">
    <ul>
        @foreach ($_SESSION['e] as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>>
@php
unset($_SESSION['errors'])rm-data" method="POST">
<div class="row">
    <div class="col-md-6">
        <div class="mb-3 mt-3">
            <label for="users_id" class="form-label">User:</label>

            <select name="users_id" id="users_id" class="form-select">
                @foreach ($userPluck as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Tiêu đề bài viết:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="tieu_de" name="tieu_de" required autofocus>
        </div>
        <div class="mb-3 mt-3">
            <label for="img_thumbnail" class="form-label">Img Thumbnail:</label>
            <input type="file" class="form-control" id="img_thumbnail" placeholder="Enter img_thumbnail" name="img_thumbnail">
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3 mt-3">
            <label for="overview" class="form-label">Overview:</label>
            <textarea class="form-control" id="overview" placeholder="Enter overview" name="overview"></textarea>
        </div>

        <div class="mb-3 mt-3">
            <label for="content" class="form-label">Content:</label>
            <textarea class="form-control" id="content" rows="4" placeholder="Enter content" name="content"></textarea>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>
@endsection