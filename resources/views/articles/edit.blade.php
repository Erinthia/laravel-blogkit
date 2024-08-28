@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/articles/{{ $article->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Menambahkan method PUT untuk update data -->
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" required="required" name="title" value="{{ $article->title }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" required="required" name="content">{{ $article->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Feature Image</label>
                <input type="file" class="form-control" name="image">
                <br>
                @if ($article->featured_image)
                    <img width="150px" src="{{ asset('storage/' . $article->featured_image) }}">
                @endif
            </div>
            <button type="submit" class="btn btn-primary float-right">Ubah Data</button>
        </form>
    </div>
@endsection
