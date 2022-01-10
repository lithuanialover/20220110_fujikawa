<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Route;//error後に追記
use App\Models\Contact; //追記
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = \App\Models\Contact::class; //ERROR後に追記
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        //'fullname'=> $faker->name(), //error
        //'gender'=> $faker->randomElement($array=[‘男性‘,’女性‘]), //error
        //'email'=> $faker->email(), //error
        //'postcode'=> $faker->postcode(),//error
        //'address'=> $faker->streetAddress(),//error
        //'building_name'=>'required',//error
        //'opinion'=> $faker->realText(120) //error

        'fullname'=> $this->faker->name(), //OK
        //'gender'=> $this->faker->randomElement($array=[‘男性‘,’女性‘]), //OK
        //'gender'=> $this->faker->numberBetween(0, 2), // 性別をランダム生成 0: 男, 1: 女 2: その他
        'gender' => $this->faker->numberBetween(1,2),  //この行を追加
        'email'=> $this->faker->email(), //OK
        'postcode'=> $this->faker->postcode(),//OK
        'address'=> $this->faker->streetAddress(),//OK
        'building_name'=>$this->faker->realText(20),//OK
        'opinion'=> $this->faker->realText(120) //OK
        ];
    }
}
