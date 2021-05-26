@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">お知らせ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインが成功しました！
                    <br>
                    <form method = "GET" action="{{ route('contact.index') }}">
                    <input class="btn btn-info" type="submit" value="一覧を見る">                </div>
            </div>
        </div>
    </div>
</div>
@endsection
