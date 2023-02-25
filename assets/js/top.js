$(function () {
    // ページ読み込みと同時にタイトルをフワッと表示させる
    $('.js-title').hide().fadeIn(1500);
});
// 1つ目の画像クリック時にモーダルウィンドウを表示
$('.js-open').click(function () {
    $('.modal-wrapper').fadeIn();
});
// ✕ボタンクリックでモーダルウィンドウを閉じる
$('.js-close').click(function () {
    $('.modal-wrapper').fadeOut();
});
