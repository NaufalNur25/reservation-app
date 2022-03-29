@extends('layouts.form')

@if (session('errors'))
<p class="text-primary">{{session('errors')}}</p>
@endif
