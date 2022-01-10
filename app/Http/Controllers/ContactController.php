<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Rules\PostcodeRule;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function show()
    {
        return view('inquiry.index');
    }

    public function confirm()
    {
        return view('inquiry.confirm');
    }

    public function process()
    {

    }

    public function complete()
    {
        return view('inquiry.complete');
    }

    public function testAction(Request $request)
    {
        $request->validate([
        'fullname'=>'required', //OK
        'gender'=>'required', //OK
        'email'=>'required|email', //OK
        'postcode'=> ['required', new PostcodeRule()], // 郵便番号 ハイフン＆8字の設定
        'address'=>'required',
        'building_name'=>'required',
        'opinion'=>'required|max:120' //OK
        ]);
    }

    public function store(Request $request) //郵便番号　自動で全角から半角に修正
    {
        $data = $request->all();
        // ここで前処理
        if (isset($data['postcode']))
            $data['postcode'] = mb_convert_kana($data['postcode'], 'a');

        $validator = Validator::make($data, [
            'postcode' => 'required|string',
        ]);
        $validator->validate();

        // バリデーション通過後の処理…
    }
}