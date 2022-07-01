@extends('layouts.app')
@section('meta')
<title>{{ settings('home_title', 'News') }}</title>
<meta name="keywords" content="{{ settings('main_keywords', 'News') }}">
<meta name="description" content="{{ settings('main_description', 'News') }}">
@endsection
@section('content')
<div class="actions-create">
  <div class="container ">
    <div class="row">
      <div class="col-12  mx-auto">
        <main class="main-content">
          <div class="create-action">
            <div class="card">
              <div class="card-body">
                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('action.store') }}">
                  @csrf
                  @honeypot
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-md-12 control-label">{{ trans('front.name')}}</label>
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
                          <label for="inputName" class="col-md-12 control-label">{{ trans('front.age')}}
                            <span class="text-danger">*</span>
                          </label>
                          <div class="col-md-12">
                            <input type="number" name="age" value="{{ old('age') }}"
                              class="form-control @error('age') is-invalid @enderror">
                            @error('age')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputEmail" class="col-md-12 control-label">{{ trans('front.email')}} <span
                              class="text-danger">*</span></label>
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
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputEmail" class="col-md-12 control-label">{{ trans('front.phone')}} <span
                              class="text-danger">*</span></label>
                          <div class="col-md-12">
                            <input type="number" name="phone" value="{{ old('phone') }}"
                              class="form-control  @error('phone') is-invalid @enderror">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-md-12 control-label">{{ trans('front.weight_before')}}
                            <span class="text-danger">*</span>
                          </label>
                          <div class="col-md-12">
                            <input type="number" name="weight_before" value="{{ old('weight_before') }}"
                              class="form-control @error('weight_before') is-invalid @enderror">
                            @error('weight_before')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-md-12 control-label">{{ trans('front.weight')}}
                            <span class="text-danger">*</span>
                          </label>
                          <div class="col-md-12">
                            <input type="number" name="weight" value="{{ old('weight') }}"
                              class="form-control @error('weight') is-invalid @enderror">
                            @error('weight')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputName" class="col-md-12 control-label">{{ trans('front.height')}}
                            <span class="text-danger">*</span>
                          </label>
                          <div class="col-md-12">
                            <input type="number" name="height" value="{{ old('height') }}"
                              class="form-control @error('height') is-invalid @enderror">
                            @error('height')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputMessage" class="col-md-6 control-label">{{ trans('front.story')}} <span
                          class="text-danger">*</span></label>
                      <div class="col-md-12">
                        <textarea name="story" class="form-control @error('story') is-invalid @enderror"
                          rows="5">{{ old('story') }}</textarea>
                        @error('story')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputEmail" class="col-md-12 control-label">{{ trans('front.image-before')}} <span
                              class="text-danger">*</span></label>
                          <div class="col-md-12">
                            <div class="custom-file  @error('image_before') is-invalid @enderror">
                              <input type="file" name="image_before" accept="image/*" value="{{ old('image_before') }}"
                                class="custom-file-input" id="image_before">
                              <label class="custom-file-label"
                                for="image_before">{{ trans('front.select-file') }}</label>
                            </div>
                            @error('image_before')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputEmail" class="col-md-12 control-label">{{ trans('front.image-after')}} <span
                              class="text-danger">*</span></label>
                          <div class="col-md-12">
                            <div class="custom-file  @error('image_after') is-invalid @enderror">
                              <input type="file" name="image_after" accept="image/*" value="{{ old('image_after') }}"
                                class="custom-file-input" id="image_after">
                              <label class="custom-file-label"
                                for="image_after">{{ trans('front.select-file') }}</label>
                            </div>
                            @error('image_after')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="contact-footer  mb-2">
                    <button type="submit" class="btn btn-success btn-sm">{{ trans('front.send')}}</button>
                  </div>
                  <span class="text-danger">* {{trans('front.required-fields')}}</span>
                </form>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</div>
@endsection