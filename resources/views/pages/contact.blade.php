@extends('layouts.app')
@section('meta')
<title>{{$page->title}} - {{ settings('app_name', 'News') }}</title>
<meta name="keywords" content="{{$page->keywords}}">
<meta name="description" content="{{$page->description}}">
@endsection
@section('content')
<div class="page contact-page">
    <div class="container">

        <main class="main-content">
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h1 class="page-title">{{$page->title}}</h1>
                        <div class="page-text">
                            {!!$page->content!!}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('store.contact') }}">
                            @csrf
                            @honeypot
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputName"
                                                class="col-md-12 control-label">{{ trans('front.name')}}</label>
                                            <div class="col-md-12">
                                                <input type="text" name="name" value="{{ old('name') }}"
                                                    class="form-control @error('name') is-invalid @enderror" autofocus>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail"
                                                class="col-md-12 control-label">{{ trans('front.email')}}</label>
                                            <div class="col-md-12">
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    class="form-control  @error('email') is-invalid @enderror">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputTitle"
                                        class="col-md-6 control-label">{{ trans('front.subject')}}</label>
                                    <div class="col-md-12">
                                        <input type="text" name="subject" value="{{ old('subject') }}"
                                            class="form-control @error('subject') is-invalid @enderror">
                                        @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputMessage"
                                        class="col-md-6 control-label">{{ trans('front.message')}}</label>
                                    <div class="col-md-12">
                                        <textarea name="body" class="form-control @error('body') is-invalid @enderror"
                                            rows="5">{{ old('body') }}</textarea>
                                        @error('body')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="contact-footer">
                                <button type="submit" class="btn btn-success btn-sm">{{ trans('front.send')}}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </main>

    </div>
</div>
@endsection