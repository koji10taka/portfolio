// ボタンクリック時の処理の記述
function FormBtn (active, inactive) {
    $(active).click(function () {
        // クリックしたボタンのボタンのアクティブ・非アクティブ動作
        $(this).toggleClass('container01__form__group__unity__option--active');
        // もう一方のボタンを非アクティブ化
        $(inactive).removeClass('container01__form__group__unity__option--active');
    });
}

// 「ゼミお申込み」ボタンクリック時の処理
FormBtn('.js-entry', '.js-inquire');

// 「その他お問い合わせ」ボタンクリック時の処理
FormBtn('.js-inquire', '.js-entry');


// チェックボックスのチェックの付け外しの処理
function Checkbox (check, toggleCheck) {
    $(check).click(function () {
        $(toggleCheck).toggleClass('container01__form__group02__sign--active');
    });
}

// チェックボックスのクリック時の処理
Checkbox('.js-checkbox', '.js-sign');

// チェックマーク自体のクリック時の処理
Checkbox('.js-sign', '.js-sign');


// プルダウンメニュー開閉動作処理
function PullDown (question, answer) {
    $(question).click(function () {
        // Answerの開閉動作
        $(answer).slideToggle();
        // Answerの開閉時にアイコンを回転させる処理
        $(this).toggleClass('container02__accordion__list__question__chevron--active');
    });
}

// 1つ目の質問
PullDown('.js-question01', '.js-answer01');

// 2つ目の質問
PullDown('.js-question02', '.js-answer02');

// 3つ目の質問
PullDown('.js-question03', '.js-answer03');

// 4つ目の質問
PullDown('.js-question04', '.js-answer04');
