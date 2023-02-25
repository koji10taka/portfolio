<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/top.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
<?php require_once('components/header.php'); ?>

<div class="top-wrapper">
    <div class="container">
        <div class="container01 js-title">
            <div class="container01__title">
                <h1 class="container01__title__headline">人とつながる</h1>
                <h1 class="container01__title__headline">全く新しい就活</h1>
            </div>
            <div class="container01__sub">
                <p>本当の自分と本当の会社</p>
                <p>ちゃんと理解し合うために</p>
                <p>ゆるいつながりから始めよう。</p>
            </div>
        </div>
    </div>
</div>

<div class="message-wrapper">
    <div class="container">
        <div class="container02">
            <h1 class="container02__title">message</h1>
            <p class="container02__txt">
                近年、企業の採用活動の早期化により、学生には就活の早期対策が迫られています。<br>
                しかし、企業の多くが東京圏に集中していることにより東京圏と地方とでは「就活情報量」の差、「就活意識」の差が生まれ、
                さらに地理的な制約がある地方学生は就活対策が遅れてしまう傾向にあります。<br>
                そのせいで、面接がうまくいかなかったり、<br>
                入社してもイメージと現実の差についていけなくなってしまったり。<br>
                そうならないために、キャリコゼミは<br>
                「自ら考え、行動できる人材に」<br>
                「大学では学べない＜社会理解＞を」<br>
                「新卒入社で、最高のスタートをきる」<br>
                この３つをゴールに掲げ、地方の大学生を中心に「情報収集力・思考力・行動力」を高めるためのアプローチをします。
            </p>
        </div>
    </div>
</div>

<div class="about-wrapper">
    <div class="container">
        <div class="container03">
            <h1 class="section-title"><span class="section-title__about">about carico<span></h1>
            <div class="container03__wrap">
                <p class="container03__wrap__txt container03__wrap__txt--pc">
                    キャリコゼミは、地方大学の学生を中心に「自ら考え行動」し、納得<br>した「20代キャリア」をしっかり歩めるよう
                    あなたのキャリアデザイ<br>ンや就活をサポートするゼミナールです。<br>
                </p>
                <p class="container03__wrap__txt container03__wrap__txt--sp">
                    キャリコゼミは、地方大学の学生を中心に「自ら考え行動」し、<br>納得した「20代キャリア」をしっかり歩めるよう<br>
                    あなたのキャリアデザインや就活をサポートするゼミナールです。<br>
                </p>
                <p class="container03__wrap__txt">
                    まずは[個別面談]であなたの現状や強み、志向性を把握。<br>その他にも[就活相談][社会人座談会][就活基礎講座][就活資料の閲覧]<br>
                    などのを提供し <あなたのニーズに合わせた就活サポート> をします。
                </p>
                <a href="about.php" class="container03__wrap__btn">詳しく見る></a>
            </div>
        </div>
    </div>
</div>

<div class="mentor-wrapper" id="mentorPart">
    <div class="container">
        <div class="container04">
            <h1 class="section-title"><span class="section-title__mentor">mentor</span></h1>
            <div class="container04__txt">
                <p>最前線で活躍する豪華メンバーが講師に就任。次の時代を担う
                    グローバル人材の成長を支えます。（順不同）
                </p>
            </div>
            <!-- プロフィールを作成 -->
            <div class="container04__prof">
                <!-- mentorのクラスを作成 -->
                <?php
                class Profile {
                    // プロパティを定義
                    private $image;
                    private $industry;
                    private $name;
                    private $affiliation;

                    // インスタンス生成と同時にプロパティに値をセット
                    public function __construct($image, $industry, $name, $affiliation) {
                        $this->image = $image;
                        $this->industry = $industry;
                        $this->name = $name;
                        $this->affiliation = $affiliation;
                    }

                    // ゲッターを定義
                    public function getImage() {
                        return $this->image;
                    }

                    public function getIndustry() {
                        return $this->industry;
                    }

                    public function getName() {
                        return $this->name;
                    }

                    public function getAffiliation() {
                        return $this->affiliation;
                    }
                }

                // プロフィールのインスタンスを作成
                $prof01 = new Profile("../assets/img/mentor01.png", "人材業界", "小圷 琢己", "株式会社キャリコ代表<br>(国家資格キャリアコン<br>サルタント)");
                $prof02 = new Profile("../assets/img/mentor02.png", "IT・通信業界", "若木 豪人", "大手IT企業");
                $prof03 = new Profile("../assets/img/mentor03.png", "広告・出版業界", "片栁 麻美子", "大手外資出版会社");
                $prof04 = new Profile("../assets/img/mentor04.png", "マーケティング業界", "横田 奈穂", "株式会社キャリコ");
                $prof05 = new Profile("../assets/img/mentor05.png", "金融業界", "荒木 航平", "公的機関");

                // インスタンスをまとめて配列に格納する
                $profs = array($prof01, $prof02, $prof03, $prof04, $prof05);
                ?>

                <!-- foreach文でインスタンスを順番に表示する -->
                <?php foreach($profs as $prof): ?>
                    <!-- 1つ目の画像をクリック時モーダルウィンドウを表示する -->
                    <?php if($prof == $prof01): ?>
                    <!-- 最初の1つ目の処理 -->
                    <div class="container04__prof__mentor">
                        <img class="container04__prof__mentor__img container04__prof__mentor__img--select js-open" src="<?php echo $prof->getImage() ?>">
                        <div class="container04__prof__mentor__info">
                            <p class="container04__prof__mentor__info__list01"><?php echo $prof->getIndustry() ?></p>
                            <p class="container04__prof__mentor__info__list02"><?php echo $prof->getName() ?></p>
                            <p class="container04__prof__mentor__info__list03"><?php echo $prof->getAffiliation() ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- 2つ目以降の処理 -->
                    <div class="container04__prof__mentor">
                        <img class="container04__prof__mentor__img" src="<?php echo $prof->getImage() ?>">
                        <div class="container04__prof__mentor__info">
                            <p class="container04__prof__mentor__info__list01"><?php echo $prof->getIndustry() ?></p>
                            <p class="container04__prof__mentor__info__list02"><?php echo $prof->getName() ?></p>
                            <p class="container04__prof__mentor__info__list03"><?php echo $prof->getAffiliation() ?></p>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<!-- モーダルを作成 -->
<div class="modal-wrapper">
    <div class="container">
        <div class="modal">
            <div class="modal__prof">
                <img class="modal__prof__img" src="../assets/img/mentor01.png">
                <div class="modal__prof__info">
                    <p class="modal__prof__info__list01">人材業界</p>
                    <p class="modal__prof__info__list02">小圷 琢己</p>
                    <p class="modal__prof__info__list03">株式会社キャリコ代表(国家資格キャリアコンサルタント)</p>
                </div>
                <p class="modal__prof__career">
                    都内大手企業への内定5つを全て辞退し、大学卒業後は群馬県の新興IT企業「株式会社Quorico」に入社。
                    新卒1年目から人材事業部の代表として、事業部立ち上げに従事。\n\n大学時代就職活動をする中で「モノ」や「サービス」ではなく、
                    関わる『ヒト』に1番興味・関心があることに気付き、キャリアコンサルタントへ。\n\n大学3年生のときに企業経営者と学生を繋ぐイベント（現キャリコ）を開始。
                    就職活動前に社会人の考え方が知れる地域の新しい就職イベントとして、現在でも継続して開催中。大学時代から家庭教師最大手企業の広告作成や、
                    メガITベンチャー企業の新規事業創出インターンでは優勝など精力的に活動。\n\n群馬県内最年少キャリアコンサルタントとして注目され、多くのイベントで講師やパネリストとして招かれる
                </p>
            </div>
            <div class="modal__close js-close">✕</div>
        </div>
    </div>
</div>

<div class="blog-wrapper" id="blogPart">
    <div class="container">
        <div class="container05">
            <h1 class="section-title"><span class="section-title__blog">blog</span></h1>
            <p class="container05__txt">ブログを紹介します。様々な人の経験を除いてみましょう！</p>
            <!-- ブログ記事のクラスを定義 -->
            <?php
            class Article {
                // プロパティを定義
                private $image;
                private $kinds;
                private $date;
                private $title;

                // インスタンス生成と同時にプロパティに値をセット
                public function __construct($image, $kinds, $date, $title) {
                    $this->image = $image;
                    $this->kinds = $kinds;
                    $this->date = $date;
                    $this->title = $title;
                }

                // ゲッターを定義
                public function getImage() {
                    return $this->image;
                }

                public function getKinds() {
                    return $this->kinds;
                }

                public function getDate() {
                    return $this->date;
                }

                public function getTitle() {
                    return $this->title;
                }
            }

            // ブログ記事のインスタンスを生成
            $article01 = new Article("../assets/img/news01.png", "ニュース", "投稿日：2022.02.21", "【NEWS】★第1回収録しました★ NHK前橋放送局✕FM桐生✕ジョブラボぐんま✕キャリコの連携プロジェクト");
            $article02 = new Article("../assets/img/news02.png", "ブログ", "投稿日：2022.01.11", "【企業研究】IR確認のススメ");
            $article03 = new Article("../assets/img/news03.png", "ブログ", "投稿日：2021.11.22", "ワンランク上の積極性と行動力をGET  ～企業インタビューから得た多くのもの～");
            $article04 = new Article("../assets/img/news04.png", "ニュース", "投稿日：2021.11.12", "【NEWS】キャリコゼミインターン生が「県内企業インタビュー」を実施！FM桐生の公開配信番組にも参加してきました！");
            
            // インスタンスをまとめて配列に格納する
            $articles = array($article01, $article02, $article03, $article04);
            ?>
            
            <!-- foreach文でインスタンスを順番に表示する -->
            <?php foreach($articles as $article): ?>
            <div class="container05__article">
                <img class="container05__article__img" src="<?php echo $article->getImage() ?>">
                <div class="container05__article__content">
                    <p class="container05__article__content__kinds"><?php echo $article->getKinds() ?></p>
                    <p class="container05__article__content__date"><?php echo $article->getDate() ?></p>
                    <p class="container05__article__content__title"><?php echo $article->getTitle() ?></p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php require_once('components/footer.php'); ?>
<script src="../assets/js/top.js"></script>
<script src="../assets/js/header.js"></script>
<script src="../assets/js/footer.js"></script>
</body>
</html>
