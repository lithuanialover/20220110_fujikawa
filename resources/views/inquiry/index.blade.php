@extends('layouts.app')

@section('title', 'お問合わせ')

@section('script')
<script>
  function onClick(e) {
    document.getElementById("contactform").submit();
  }
</script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script><!--住所自動入力-->
@endsection

@section('content')
<h2>お問い合わせ</h2>
  @error('token')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <form method="POST" id="contactform" action="/inquiry/confirm">
    @csrf
    <table class="table-form">
      <tr>
        <th>お名前<span class="req" title="required">*</span></th>
        <td>
          <input type="text" name="fullname" value="{{ old('fullname') }}"/>
          @error('fullname')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>性別<span class="req" title="required">*</span></th>
        <td>
          <div class="radio_gender">
            <input type="radio" name="gender" value="1">男性
            <input type="radio" name="gender" value="2">女性
          </div>
          @error('gender')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>

      <tr>
        <th>メールアドレス<span class="req" title="required">*</span></th>
        <td>
          <input type="email" name="email" value="{{ old('email') }}"/>
          @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>郵便番号<span class="req" title="required">*</span></th>
        <td>
          <!--<input type="text" name="yuubin" value="{{ old('postcode') }}"/>-->
          <input type="text" name="zip11" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" value="{{ old('postcode') }}"/>
          <!--<input type="postcode" name="postcode" value="{{ old('postcode') }}"/>-->
          @error('postcode')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>住所<span class="req" title="required">*</span></th>
        <td>
          <!--<input type="text" name="todoufuken" value="{{ old('address') }}"/>
          <input type="text" name="shikuchouson">-->
          <input type="text" name="addr11" size="60" value="{{ old('address') }}"/>
          <!--<input type="text" name="address" value="{{ old('address') }}"/>-->
          @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>
          <input type="text" name="building_name" value="{{ old('building_name') }}"/>
          @error('building_name')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
      <tr>
        <th>ご意見<span class="req" title="required">*</span></th>
        <td>
          <textarea name="text">{{ old('opinion') }}</textarea>
          @error('opinion')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </td>
      </tr>
    </table>
    <div class="button-area">
      <button type="button" class="go" onclick="onClick(event)">確認</button>
    </div>
  </form>

  <!--<section type="text/javascript">
$(document).on('keyup change', '[name="yuubin"]', function(e){
  if(!([8, 46].includes(e.keyCode))){
    let _val = $(this).val().replace(/[^0-9]/g, '');
    if(_val.length > 2) _val = _val.slice(0, 3) + '-' + _val.slice(3, 7);
    $(this).val(_val);
    $.getJSON('https://api.zipaddress.net?callback=?', {'zipcode': _val}, function(json){
      $('[name="todoufuken"]').val(json.pref);
      $('[name="shikuchouson"]').val(json.address);
    });
  }
});
  </section>-->
@endsection
