@extends('layouts.dashboard')
@section('title')
Mass Users Insert
@endsection
@section('content')
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ trans('msgs.'.session()->get('success')) }}
</div>
@endif
<form class="form-horizontal" action="{{ route('dashboard.mass_users_store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card">
    <div class="card-header"><strong>Mass users insert</strong></div>
    <div class="card-body">
    <div class="form-group row">
    <label class="col-md-3 col-form-label" for="file-input">File: </label>
    <div class="col-md-9">
    <input id="file-input" type="file" name="file">
    @error('file')
        <div style="color: red">
            {{ $message }}
        </div>
    @enderror
    @if(session()->has('failures'))
        @foreach (session()->get('failures') as $failure )
            @foreach ($failure->errors() as $e)
                <div style="color: red">
                    {{ 'error at row '.$failure->row().': '.$e }}
                @endforeach
        @endforeach
    @endif
    </div>
    </div>
    </div>
    <div class="card-footer">
    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
    </div>
    </div>
</form>
@endsection
