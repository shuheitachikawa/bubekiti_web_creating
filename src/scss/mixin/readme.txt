mixinルール 1
別Blockで同じスタイルが必要になった場合、mixinを定義する。

よく出てくるケースとして、サイト内で共通して使用されるボタン系です。
例えば、サイト共通のヘッダーと、コンテンツに共通のボタンが出てくる場合を見てみます。
まずはHTMLのソースコードから。

<header class="header">
<p class="header-btn"><a href="#">サイト共通ボタン</a></p>
</header>

<section class="sec">
<p class="sec-btn"><a href="#">サイト共通ボタン</a></p>
</section>



mixinルール 2
1つのmixinに対し、1つの定義ファイルを用意する。


mixinルール 3
mixinの定義ファイル名は、mixin名と同じにする。