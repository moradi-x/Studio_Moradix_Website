@extends('Home.Layouts.layout')

@section('content')
    @include('Home.Sections.Components.hero')
    @include('Home.Sections.Components.trust-bar')
    @include('Home.Sections.Components.services')
    @include('Home.Sections.Components.portfolio')
    @include('Home.Sections.Components.why-us')
    @include('Home.Sections.Components.process')
    @include('Home.Sections.Components.faq')
    @include('Home.Sections.Components.cta-form')
@endsection