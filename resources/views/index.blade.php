@extends('layout')

@section('main')

    @include('sections.profile._about')
    @include('sections.profile._facts')
    @include('sections.profile._skills')
    @include('sections.profile._resume')
    @include('sections.profile._portfolio')
    @include('sections.profile._services')
    @include('sections.profile._testimonials')
    @include('sections.profile._contact')

@endsection
