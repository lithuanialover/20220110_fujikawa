@extends('layouts.app')

@section('title', 'お問合わせ確認')

@section('content')
  <form method="POST" action="/inquiry/finish">
    @csrf
    <table class="table-form">
      <tr>
        <th>お名前</th>
        <td>{{$fullname}}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>{{$gender}}</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{$email}}</td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>{{$postcode}}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{$address}}</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{ $building_name }}</td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>{{ $opinion }}</td>
      </tr>
    </table>
    <div class="button-area">
      <button type="button" class="back" onclick="javascript:window.history.back(-1);return false;">戻る</button>
      <button type="submit" class="go">送信する</button>
    </div>
  </form>
@endsection
