{{--
  Template Name: Index Template
--}}

@extends('layouts.base')


@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.index-slider')
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
