@extends('layouts.app')
@section('title', 'Главная')
@section('content')
    <div class="container py-md-5">
        <div class="row g-0">
            <div class="col-sm-12 col-md-9">
                <x-blog.post/>
            </div>
            <div class="col-sm-12 col-md-3">
                <x-sidebar.author/>
            </div>
        </div>
    </div>
@endsection
