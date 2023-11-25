@extends('layout.layout')

@section('content')
{{--    Hero section--}}
    @include('components.hero')
{{--About Section--}}
    @include('components.about')
{{--    Facts section--}}
    @include('components.facts')
{{--skill section--}}
    @include('components.skill')
{{--    Resume section--}}
    @include('components.resume')
{{--    Contact section--}}
    @include('components.contact')
@endsection
