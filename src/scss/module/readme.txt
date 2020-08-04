サイト共通で使用するモジュール別にスタイルが定義さているSCSSファイルを格納するディレクトリです。
moduleディレクトリに格納されるSCSSファイルは、必ずBEM設計のBlock単位になります。
また、サイト共通で使用するモジュール（Block）となりますので、次のBlockは基本的にどの案件でも出てくるモジュールとなります。

サイト共通ヘッダー : _header.scss
サイト共通フッター : _footer.scss
メイン : _main.scss
コンテンツ : _content.scss
サイドメニュー（サイドコンテンツ） : _snav.scss(_side.scss)
グローバルメニュー : _gnav.scss
フッターメニュー : _fnav.scss
シェアエリア : _share.scss

Webサイトによっては必要ないBlockもあるかと思いますが、基本的な大枠のアウトライン要素として、HTMLのソースコードは次のようになります。
<!-- header -->
<header class="header">
サイト共通ヘッダー
</header><!-- /header -->

<!-- gnav -->
<nav class="gnav">
グローバルメニュー
</nav><!-- /gnav -->

<!-- main -->
<main class="main">

<!-- content -->
<div class="content">
コンテンツ
</div><!-- /content -->

<!-- snav -->
<nav class="snav">
サイドメニュー
</nav><!-- /snav -->

</main><!-- /main -->

<!-- footer -->
<footer class="footer">
サイト共通フッター

<!-- fnav -->
<nav class="fnav">
フッターメニュー
</nav><!-- /fnav -->

</footer><!-- /footer -->




    _header.scss
    _gnav.scss
    _main.scss
    _content.scss
    _snav.scss
    _side.scss
    _footer.scss
    _fnav.scss
    _share.scss
    _etc.scss（その他）