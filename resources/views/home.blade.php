@extends('layout.frontend')
@section('title') Home @endsection


@section('content')

    @include('partials._top_bar')
    @include('partials._middle_tweet_form')
    @include('partials._tweet')

@endsection
