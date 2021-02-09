<?php
// const: 定数キーワード。不変の値は $ なしでも格納できます
const START = 1;
const END   = 100;
// implode: 配列要素を文字列により連結する
// @see https://www.php.net/manual/ja/function.implode.php
echo implode("\n", 
    // array_slice: 配列を任意の範囲で切り取る
    // @see https://www.php.net/manual/ja/function.array-slice.php
    array_slice(
        // array_replace: 配列の中身を置き換える
        // @see https://www.php.net/manual/ja/function.array-replace.php
        array_replace(range(0, END), 
            // array_fill_keys: 第二引数の値で埋まった第一引数のキーらを持つ配列を得る
            // @see https://www.php.net/manual/ja/function.array-fill-keys.php
            array_fill_keys(range(0, END, 3), 'Fizz'), 
            array_fill_keys(range(0, END, 5), 'Buzz'),
            array_fill_keys(range(0, END, 15), 'FizzBuzz')
        ),
        START, END
    )
);