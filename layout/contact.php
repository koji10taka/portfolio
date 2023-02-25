<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<?php require_once('components/header.php') ?>

<div class="contact-wrapper">
    <div class="container">
        <h1>Contact</h1>
    </div>
</div>

<div class="form-wrapper">
    <div class="container">
        <div class="container01">
            <form class="container01__form">
                <fieldset class="container01__form__group">
                    <label class="container01__form__group__label">氏名<span class="container01__form__group__label__mark">必須</span></label>
                    <br>
                    <input type="text" class="container01__form__group__text">
                </fieldset>

                <fieldset class="container01__form__group">
                    <label class="container01__form__group__label">メールアドレス<span class="container01__form__group__label__mark">必須</span></label>
                    <br>
                    <input type="text" class="container01__form__group__text">
                </fieldset>

                <fieldset class="container01__form__group">
                    <label class="container01__form__group__label">学校名<span class="container01__form__group__label__mark">必須</span></label>
                    <br>
                    <input type="text" class="container01__form__group__text">
                </fieldset>

                <fieldset class="container01__form__group">
                    <label class="container01__form__group__label">ご用件<span class="container01__form__group__label__mark">必須</span></label>
                    <br>
                    <div class="container01__form__group__unity">
                        <input type="radio" class="container01__form__group__unity__radio" name="matter" id="entry">
                        <label for="entry" class="container01__form__group__unity__option container01__form__group__unity__option--active js-entry">ゼミお申込み</label>
                        <input type="radio" class="container01__form__group__unity__radio" name="matter" id="inquire">
                        <label for="inquire" class="container01__form__group__unity__option js-inquire">その他お問い合わせ</label>
                    </div>
                </fieldset>

                <fieldset class="container01__form__group">
                    <label class="container01__form__group__label">お問い合わせ<span class="container01__form__group__label__mark">必須</span></label>
                    <br>
                    <textarea></textarea>
                </fieldset>

                <fieldset class="container01__form__group02">
                    <input type="checkbox" id="checkBox" class="container01__form__group02__consent">
                    <label for="checkBox" class="container01__form__group02__box js-checkbox"></label>
                    <label class="container01__form__group02__sign js-sign"></label>
                    <label class="container01__form__group02__check">プライバシーポリシーに同意する</label>
                </fieldset>

                <fieldset class="container01__form__group02">
                    <p class="container01__form__group02__confirm">※送信前に入力内容をよくご確認ください。</p>
                    <br>
                    <input type="submit" value="送信する＞" class="container01__form__group02__btn">
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div class="qa-wrapper">
    <div class="container">
        <div class="container02">
            <h1 class="container02__title"><span>Q&A</span></h1>

            <div class="container02__accordion">
            <!-- アコーディオンメニューを作成 -->
                <div class="container02__accordion__list">
                    <div class="container02__accordion__list__question">
                        <span class="container02__accordion__list__question__icon">Q</span>
                        <p>群馬県に就職を希望する人しか参加できませんか？</p>
                        <span class="container02__accordion__list__question__chevron js-question01"><i class="fa-solid fa-chevron-down"></i></span>
                    </div>
                    <div class="container02__accordion__list__answer js-answer01">
                        <span class="container02__accordion__list__answer__icon">A</span>
                        <p>群馬県に就職を考えていない方でも大歓迎です。</p>
                    </div>
                </div>

                <div class="container02__accordion__list container02__accordion__list--gray">
                    <div class="container02__accordion__list__question">
                        <span class="container02__accordion__list__question__icon">Q</span>
                        <p>キャリコに参加したら勧誘されたり連絡がたくさん来るのでしょうか？</p>
                        <span class="container02__accordion__list__question__chevron js-question02"><i class="fa-solid fa-chevron-down"></i></span>
                    </div>
                    <div class="container02__accordion__list__answer js-answer02">
                        <span class="container02__accordion__list__answer__icon">A</span>
                        <p>キャリコでは企業と学生の主体性にお任せしていますので、こちらから勧誘することはありません。
                            あなたのご希望があれば、あなたに興味を持った企業様を紹介させていただくことがあります。
                        </p>
                    </div>
                </div>

                <div class="container02__accordion__list">
                    <div class="container02__accordion__list__question">
                        <span class="container02__accordion__list__question__icon">Q</span>
                        <p>キャリコに参加するにはどうすればよいでしょうか？</p>
                        <span class="container02__accordion__list__question__chevron js-question03"><i class="fa-solid fa-chevron-down"></i></span>
                    </div>
                    <div class="container02__accordion__list__answer js-answer03">
                        <span class="container02__accordion__list__answer__icon">A</span>
                        <p>「イベント情報」ページで参加したいイベントを探し、イベント詳細ページ下段の「参加する」からお申し込みください。</p>
                    </div>
                </div>

                <div class="container02__accordion__list container02__accordion__list--gray">
                    <div class="container02__accordion__list__question">
                        <span class="container02__accordion__list__question__icon">Q</span>
                        <p>どんな服装で参加すればいいですか？</p>
                        <span class="container02__accordion__list__question__chevron js-question04"><i class="fa-solid fa-chevron-down"></i></span>
                    </div>
                    <div class="container02__accordion__list__answer js-answer04">
                        <span class="container02__accordion__list__answer__icon">A</span>
                        <p>私服での参加で構いません。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('components/footer.php') ?>
<script src="../assets/js/contact.js"></script>
<script src="../assets/js/header.js"></script>
<script src="../assets/js/footer.js"></script>
</body>
</html>
