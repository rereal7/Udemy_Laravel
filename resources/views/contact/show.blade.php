@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">お問い合わせ詳細</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Showです。
                    {{ $contact->your_name }}
                    {{ $contact->title }}
                    {{ $contact->email }}
                    {{ $contact->url }}
                    {{ $gender }}
                    {{ $age }}
                    {{ $contact->contact }}
                    <form method = "GET" action="{{ route('contact.edit', ['id' => $contact->id]) }}">
                    <input class="btn btn-info" type="submit" value="変更する">
                    <form method = "POST" action="{{ route('contact.destroy', ['id' => $contact->id]) }}" id='delete_{{ $contact->id}}'>
                    <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>
                    @csrf
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
//<!--
/**************************************
削除ボタンを押してすぐにレコードが削除
されるのも問題なので、一旦JavaScriptで
確認メッセージを流します。
 **************************************/
//-->
function deletePost(e){
    'use strict';
    if(confirm('本当に削除していいですか？')){
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>

@endsection
