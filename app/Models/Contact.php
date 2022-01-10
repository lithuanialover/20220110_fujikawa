<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory; //これがなくてERRORがでた

    protected $table = 'contacts';//テーブル名を定義

    protected $guarded= ['id'];//AUTO_INCREMENT（オートインクリメント）、いわゆる「主キー」を設定したカラムがある場合には、明示的にここに定義

    public $timestamps = true; //マイグレーションにて「$table->timestamps();」などして「created_at」「updated_at」カラム（timestamp）を作成している場合には、カラム操作があった場合に自動的に日時を挿入するかを明示的に定義

    protected $fillable = [ //Faker（モデルファクトリ）でのインサートを許可するカラムを定義
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];

    //public static $rules⇒ validation
    public static $rules = array(
        'fullname'=>'required', //OK
        'gender'=>'required', //OK
        'email'=>'required|email', //OK
        'postcode'=>'required',//OK
        'address'=>'required',//OK
        'building_name'=>'required',//OK
        'opinion'=>'required|max:120' //OK
    );
    //,がなくてsyntax error(文法エラー)が出た
}
