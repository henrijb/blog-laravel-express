@extends('template')
@section('title')
    Laravel
@endsection
@section('style')

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
        margin-bottom: 40px;
    }

    .quote {
        font-size: 24px;
    }
@endsection
@section('content')
    <div class="title">Laravel 5</div>
    <div class="quote">{{ Inspiring::quote() }}</div>
@endsection
