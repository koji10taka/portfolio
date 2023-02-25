<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<?php require_once('components/header.php') ?>

<div class="about-wrapper">
    <div class="container  container01">
        <div class="container01__about">
            <h1 class="container01__about__txt01">about carico</h1>
            <p class="container01__about__txt02">
                キャリコゼミは、地方大学の学生を中心に自ら考え行動し、納得した<br>
                「20代キャリア」をしっかり歩めるようあなたのキャリアデザインや<br>
                就活をサポートするゼミナールです。
            </p>
        </div>
    </div>
</div>

<div class="message-wrapper">
    <div class="container container02">
        <div class="container02__message">
            <p>
            ほとんどの人にとって最後の学生生活となるのが、この現役の大学時代。<br>
            この時に、やってみたい様々なことを経験し、学んで成長し、たくさん楽しんで、​学生生活を味わい尽くすのもとても大切なことですが、​それと同時に、次のキャリアについて考えて行動する、大切な時期でもあります。<br><br>

            この時にどれだけ社会を理解し、また、自分を深く理解して行動するかで、​この先およそ40年以上、 どのような社会人生活を送るか、大きな方向性が決まってきます。<br><br>​

            本当に納得した状態で、自信を持ってファーストキャリアを突き進んでほしい。<br>​
            そう願う、キャリコゼミから、最高の学生時代を一緒につくっていく「機会」を提供します
            </p>
        </div>
    </div>
</div>

<div class="plan-wrapper">
    <div class="container03">
        <div class="container03__title">
            <h1 class="container03__title--head"><span>plan</span></h1>
            <p class="container03__title--content">Light会員とBasic会員の2つのプランをご用意しております。興味をお持ちの方は、<br>下記の表をご確認いただき、フォームよりお申し込みください。</p>
        </div>
        <div class="container container03__table">
            <!-- tableタグで表を作成 -->
            <table>
                <tr>
                    <th></th>
                    <th class="container03__table__headline"><span class="container03__table__headline__course container03__table__headline__course--light">Light会員</span></th>
                    <th class="container03__table__headline"><span class="container03__table__headline__course container03__table__headline__course--basic">Basic会員</span></th>
                </tr>

                <tr class="container03__table__bg container03__table__bg--gray">
                    <th class="container03__table__bg__head container03__table__bg__head--radius">月会費</th>
                    <td class="container03__table__bg__data01">0円</td>
                    <td class="container03__table__bg__data01 container03__table__bg__data01--radius">2000円</td>
                </tr>

                <tr class="container03__table__bg">
                    <th class="container03__table__bg__head">クラスコンセプト</th>
                    <td class="container03__table__bg__data02">就活を真剣に取り組みたい<br>仲間と繋がろう</td>
                    <td class="container03__table__bg__data02">就活と社会人スタートダッシュを成功させよう</td>
                </tr>

                <tr class="container03__table__bg container03__table__bg--gray">
                    <th class="container03__table__bg__head container03__table__bg__head--radius">参加可能コンテンツ</th>
                    <td class="container03__table__bg__data02">・他大学との交流<br>・社会人の講義,座談会<br>・就活基礎講座</td>
                    <td class="container03__table__bg__data02 container03__table__bg__data02--radius"><span>・他大学との交流<br>・社会人の講義,座談会<br>・就活基礎講座<br>・就活資料の閲覧<br>・キャリコンとの面談</span></td>
                </tr>

                <tr class="container03__table__bg">
                    <th class="container03__table__bg__head">キャリコ相談</th>
                    <td class="container03__table__bg__data01">入会時面談1回</td>
                    <td class="container03__table__bg__data01">いつでもＯＫ</td>
                </tr>

                <tr class="container03__table__bg container03__table__bg--gray">
                    <th class="container03__table__bg__head container03__table__bg__head--radius">アウトプット提出</th>
                    <td class="container03__table__bg__data01">なし</td>
                    <td class="container03__table__bg__data01 container03__table__bg__data01--radius">あり</td>
                </tr>

                <tr class="container03__table__bg">
                    <th class="container03__table__bg__head">長期インターン紹介</th>
                    <td class="container03__table__bg__data01">あり</td>
                    <td class="container03__table__bg__data01">あり</td>
                </tr>

            </table>
        </div>

        <!-- スマホ版のplan表を作成 -->
        <div class="container03__sp">
            <div class="container03__sp__plan">
                <h2><span class="container03__sp__plan__course container03__sp__plan__course--light js-light container03__sp__plan__course--light--active">Light会員</span></h2>
                <h2><span class="container03__sp__plan__course container03__sp__plan__course--basic js-basic">Basic会員</span></h2>
            </div>

            <?php
            // スマホ版plan表に使用の項目クラスを作成
            class Table {
                // プロパティを定義
                private $title;
                private $light;
                private $basic;
                private $title02;
                private $light02;
                private $basic02;

                // インスタンス生成と同時にプロパティに値をセット
                public function __construct($title, $light, $basic, $title02, $light02, $basic02) {
                $this->title = $title;
                $this->light = $light;
                $this->basic = $basic;
                $this->title02 = $title02;
                $this->light02 = $light02;
                $this->basic02 = $basic02;
                }

                // ゲッターを定義
                public function getTitle() {
                    return $this->title;
                }

                public function getLight() {
                    return $this->light;
                }

                public function getBasic() {
                    return $this->basic;
                }

                public function getTitle02() {
                    return $this->title02;
                }

                public function getLight02() {
                    return $this->light02;
                }

                public function getBasic02() {
                    return $this->basic02;
                }
            }

            // 表のインスタンスを生成
            $table01 = new Table("月会費", "0円", "2000円", "クラスコンセプト", "就活を真剣に取り組みたい仲間と繋がろう", "就活と社会人スタートダッシュを成功させよう！");
            $table02 = new Table("参加可能コンテンツ", "・他大学との交流<br>・社会人の講義,座談会<br>・就活基礎講座", "・他大学との交流<br>・社会人の講義,座談会<br>・就活基礎講座<br>・就活資料の閲覧<br>・キャリコンとの面談", "キャリコ相談", "入会時面談1回", "いつでもOK");
            $table03 = new Table("アウトプット提出", "なし", "あり", "長期インターン紹介", "あり", "あり");

            // インスタンスをまとめて配列に格納し、foreach文で順番に表示する
            $tables = array($table01, $table02, $table03);
            ?>
            <?php foreach($tables as $table): ?>
            <div class="container03__sp__table">
                <!-- 背景ホワイト -->
                <h3 class="container03__sp__table__title"><?php echo $table->getTitle() ?></h3>
                <!-- Light -->
                <p class="container03__sp__table__content container03__sp__table__content--default js-light-table"><?php echo $table->getLight() ?></p>
                <!-- Basic -->
                <p class="container03__sp__table__content js-basic-table"><?php echo $table->getBasic() ?></p>
            </div>

            <div class="container03__sp__table container03__sp__table--gray">
                <!-- 背景グレー -->
                <h3 class="container03__sp__table__title"><?php echo $table->getTitle02() ?></h3>
                <!-- Light -->
                <p class="container03__sp__table__content container03__sp__table__content--default js-light-table"><?php echo $table->getLight02() ?></p>
                <!-- Basic -->
                <p class="container03__sp__table__content js-basic-table"><?php echo $table->getBasic02() ?></p>
            </div>
            <?php endforeach ?>
        </div>

        <a href="contact.php" class="container03__btn">申し込む＞</a>

    </div>
</div>

<?php require_once('components/footer.php') ?>
<script src="../assets/js/about.js"></script>
<script src="../assets/js/header.js"></script>
<script src="../assets/js/footer.js"></script>
</body>
</html>
