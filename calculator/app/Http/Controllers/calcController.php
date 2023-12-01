<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

class calcController extends Controller
{

    public function sum($num1, $num2)
    {
        $validator = Validator::make(
            compact('num1', 'num2'),
            [
              'num1' => 'numeric|min:0',  // validation--> positive number, decimal and integar also.
              'num2' => 'numeric|min:0'
            ]
        );

        if ($validator->fails()) {
            return response([
              'num1' => $num1,
              'num2' => $num2,
              'errors' => $validator->errors()
            ], 400);
        }

        $result = ['result' => $num1 + $num2];
        return response()->json(
            compact('num1', 'num2', 'result'),
            200
        );
    }

    public function substract($num1, $num2)
    {
        $validator = Validator::make(
            compact('num1', 'num2'),
            [
              'num1' => 'numeric|min:0',
              'num2' => 'numeric|min:0'
            ]
        );

        if ($validator->fails()) {
            return response([
              'num1' => $num1,
              'num2' => $num2,
              'errors' => $validator->errors()
            ], 400);
        }

        $result = ['result' => $num1 - $num2];
        return response()->json(
            compact('num1', 'num2', 'result'),
            200
        );
    }

    public function mult($num1, $num2)
    {
        $validator = Validator::make(
            compact('num1', 'num2'),
            [
                'num1' => 'numeric|min:0',
                'num2' => 'numeric|min:0'
            ]
        );

        if ($validator->fails()) {
            return response([
              'num1' => $num1,
              'num2' => $num2,
              'errors' => $validator->errors()
            ], 400);
        }

        $result = ['result' => $num1 * $num2];
        return response()->json(
            compact('num1', 'num2', 'result'),
            200
        );
    }

    public function divide($num1, $num2)
    {
        $validator = Validator::make(
            compact('num1', 'num2'),
            [
              'num1' => 'integer',
              'num2' => 'integer|min:1'
            ]
        );

        if ($validator->fails()) {
            return response([
              'num1' => $num1,
              'num2' => $num2,
              'errors' => $validator->errors()
            ], 400);
        }

        $result = ['result' => $num1 / $num2];
        return response()->json(
            compact('num1', 'num2', 'result'),
            200
        );
    }

    public function expo($num1, $num2)
    {
        $validator = Validator::make(
            compact('num1', 'num2'),
            [
              'num1' => 'integer|max:5|min:0',
              'num2' => 'integer|max:5|min:0'
            ]
        );

        if ($validator->fails()) {
            return response([
              'num1' => $num1,
              'num2' => $num2,
              'errors' => $validator->errors()
            ], 400);
        }

        $result = ['result' => $num1 ** $num2];
        return response()->json(
            compact('num1', 'num2', 'result'),
            200
        );
    }
}
