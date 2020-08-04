まずは、_reset.scssですが、これはスタイルをリセットするファイルです。
リセットCSSについては解説する必要はないと思いますので、割愛します。
続いて、_base.scssですが、このSCSSファイルにはサイト共通で設定する必要のあるスタイルを定義します。
例えば、次のようなスタイルです。

_base.scss, _reset.scssのファイルでは、基本的にはタグ指定でスタイルを指定します。
BEM設計での指定は、ここではしません。


例）

body{
  color: #000;
  font-family: フォント名;
}
//SP
@media screen and (max-width: #{nth($breakPointList, 1)}){
  body{
    min-width: 320px;
  }
  html, body{
    height: 100%;
    min-height: 100%;
  }
}
//PC
@media print,screen and (min-width: #{nth($breakPointList, 2)}){
  body{
    width: 100%;
  }
}