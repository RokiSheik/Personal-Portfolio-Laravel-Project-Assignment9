@extends('layouts.app')


@section('content')
    @include('components.header-content')
    <!--ABOUT START -->
    @include('components.about')

    <!-- ABOUT ENDS -->

    <!-- SERVICES START-->
    @include('components.services')

    <!-- SERVICES ENDS -->

    <!-- CALL TO ACTION START -->
    @include('components.call-to-action')

    <!-- CALL TO ACTION ENDS -->

    <!-- PROJECTS START -->

    @include('components.projects')
    <!-- PROJECTS ENDS -->

    <!-- PRICING START -->
    @include('components.pricing')

    <!-- PRICING ENDS -->


    <!-- CONTACT START -->
    @include('components.contact')

    <!-- CONTACT ENDS -->


@endsection