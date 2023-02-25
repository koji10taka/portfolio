// ハンバーガーメニュークリック時のイベント
$('.js-menu').click(function () {
    // メニューアイコンと✕ボタンの変形切り替え
    $(this).toggleClass('header__container__menu__open__active');
    // メニューアイコン（あるいは✕ボタン）クリック時にオーバーレイの表示・非表示の切り替え
    $('.header__container__modal__overlay').toggle();
    // メニューアイコン（あるいは✕ボタン）クリック時にメニューを右からスライド表示・左に非表示の切り替え
    $('.header__container__modal__link').toggleClass('header__container__modal__link__slide');
});
