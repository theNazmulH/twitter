@extends('layout.frontend')
@section('title') Edit your Tweet @endsection
@section('content')
    @include('partials._top_bar')
{{--    Form--}}
    <form action="{{ route('tweetID', $tweet->id) }}" method="POST" class="py-4">
        @csrf
                <textarea name="post_body" id="post_body" cols="30" rows="10" >{{$tweet->post_body}}</textarea>
                <button class="bg-blue-400 text-white font-bold py-2 px-8 rounded-full mr-8 float-right" type="submit">
                    Update
                </button>

    </form>
@endsection


