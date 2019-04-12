@extends('layouts.home')

@section('title','AnnieR')

@section('content')

  @include('navigator')

  @include('header')
  
  @include('services')

  @include('portfolio')

  {{-- @include('about') --}}

  @include('team')
  
  @include('clients')

  @include('contact')

  @include('footer')

  @include('modal.modal')

@endsection