<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    //単純なあいさつ
    public function morning()
    {
        return view('greeting.simple.morning');
    }

    public function afternoon()
    {
        return view('greeting.simple.afternoon');
    }

    public function evening()
    {
        return view('greeting.simple.evening');
    }

    public function night()
    {
        return view('greeting.simple.night');
    }

    //URLによってメッセージが変わる
    public function freeword($word)
    {
        return view('greeting.freeword', ['word' => $word]);
    }

    //ランダムメッセージ
    public function random()
    {
        $ary = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
        shuffle($ary);
        $word = $ary[0];
        return view('greeting.random', ['word' => $word]);
    }
}
