// 「Light会員」ボタンクリック時のイベント
$('.js-light').click(function () {
    // Light会員のメニューの表示・非表示を切り替える
    $('.js-light-table').toggle();
    // Basic会員のメニューの表示を隠す
    $('.js-basic-table').hide();
    // 表示されている「Light会員」のボタン色を変える
    $('.container03__sp__plan__course--light').toggleClass('container03__sp__plan__course--light--active');
    // 「Basicボタン」に色がついていた場合、色を付けていたクラスを取り除き、非アクティブ時の色にする
    $('.js-basic').removeClass('container03__sp__plan__course--basic--active');
});
// 「Basic会員」ボタンクリック時のイベント
$('.js-basic').click(function () {
    // Basic会員のメニューの表示・非表示を切り替える
    $('.js-basic-table').toggle();
    // Light会員のメニューの表示を隠す
    $('.js-light-table').hide();
    // 表示されている「Basic会員」のボタン色を変える
    $('.container03__sp__plan__course--basic').toggleClass('container03__sp__plan__course--basic--active');
    // 「Lightボタン」に色がついていた場合、色を付けていたクラスを取り除き、非アクティブ時の色にする
    $('.js-light').removeClass('container03__sp__plan__course--light--active')
});
