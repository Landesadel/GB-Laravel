@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Administration</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
        </div>
    </div>
    <div class="table-responsive">
{{--        <x-alert type="info" message="it's a info message"></x-alert>--}}
{{--        <x-alert type="danger" message="it's a danger message"></x-alert>--}}
{{--        <x-alert type="warning" message="it's a warning message"></x-alert>--}}
{{--        <x-alert type="success" message="it's a success message"></x-alert>--}}
        <a href="{{ route('admin.parser') }}">Parsing news</a>
    </div>
@endsection
