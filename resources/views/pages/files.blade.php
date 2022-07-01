@extends('layouts.app')
@section('meta')
<title>{{$page->title}} - {{ settings('app_name', 'News') }}</title>
<meta name="keywords" content="{{$page->keywords}}">
<meta name="description" content="{{$page->description}}">
@endsection
@section('content')
<div class="page files-page">
  <div class="container ">
    <div class="row">
      <div class=" col-12  mx-auto">
        <main class="main-content">
          <div class="card">
            <div class="card-body">
              <h1 class="page-title">{{$page->title}}</h1>
              <div class="page-text">
                {!!$page->content!!}
              </div>
              <div class="page-files">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">{{ trans('text.name')}}</th>
                        <th scope="col" class="text-center">{{ trans('text.size')}}</th>
                        <th scope="col" class="text-center">{{ trans('text.date')}}</th>
                        <th scope="col" class="text-center">{{ trans('text.options')}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($files as $file)
                      <tr>
                        <td scope="row">{{$file->name}}</td>
                        <td class="text-center">{{$file->size}}</td>
                        <td class="text-center">{{$file->getDate()}}</td>
                        <td class="text-center" >
                        <a href="{{$file->getFileUrl()}}">
                            <download-icon fill-color="#96d46b"></download-icon>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</div>
@endsection