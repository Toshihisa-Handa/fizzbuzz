<?php 
const START =1;
const END = 35;//ポストされた値

echo implode("\n",//配列を連結する際に改行を入れている
array_slice(
    array_replace(//第一引数の配列をそれ以降の同じ要素の値で置き換える
    range(0,END,1),//0からEND(35)までの配列を作成(1個刻み(1は省略可能))
    array_fill_keys(range(0, END, 3),'Fizz'),//第一引数で指定した配列の値をKeyとして第二引数で指定した値に全て変更する。この時配列のインデックスはrangeの第3引数の値になる
    array_fill_keys(range(0, END, 5),'Buzz'),
    array_fill_keys(range(0, END, 15),'FizzBuzz'),
),
    START, END
)
);
