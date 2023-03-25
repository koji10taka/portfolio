// 画面に表示する文字列を入れる変数の初期化
let untyped = '';
// タイプした変数の初期化
let typed = '';
// スコアの初期値
let score = 0;

// 必要な要素の取得
const untypedfield = document.getElementById('untyped');

const typedfield = document.getElementById('typed');

const wrap = document.getElementById('wrap');

const start = document.getElementById('start');

const stop = document.getElementById('stop');

const reset = document.getElementById('reset');

const count = document.getElementById('count');

// 複数のテキストを格納するための配列
const textLists = [
    'healthy','produce','curious',
    'prenty','definition','separate',
    'control','instance','depend on',
    'input','title','culture',
    'unique','script','field',
    'let','const','var',
    'description', 'token', 'instead of',
    'put off', 'call off', 'password',
    'get along with', 'catch up with', 'put up with',
    'come up with', 'physical', 'embarrass', 
    'index', 'puzzle', 'mystery',
    'reply', 'answer', 'claim'
];

// ランダムなテキストを表示する
const createText = () => {
    // 正しくタイプした文字列をクリア
    typed ='';
    typedfield.textContent = typed;

    // 配列のインデックス数からランダムな数値を生成する処理
    let random = Math.floor(Math.random() * textLists.length); 

    // 配列からランダムにテキストを取得して画面に表示する処理
    untyped = textLists[random];
    untypedfield.textContent = untyped;
};

// キー入力判定処理
const keyPress = e => {

    // ミスタイプの場合
    if (e.key !== untyped.substring(0, 1)) {
        wrap.classList.add('mistyped');

        // 0.1秒だけ背景を赤くして元に戻す処理
        setTimeout(() => {
            wrap.classList.remove('mistyped');
        }, 100);
        return;
    }

    // 正タイプの場合

    // スコアのインクリメント
    score ++;
    typed += untyped.substring(0, 1);
    untyped = untyped.substring(1);
    typedfield.textContent = typed;
    untypedfield.textContent = untyped;

    // テキストがなくなったら新しいテキストを表示する
    if (untyped === '') {
        createText();
    }
};

// ランク判定の処理
const rankCheck = score => {

    // スコアに応じたテキスト表示用の変数
    let text = '';

    // スコアに応じて異なるメッセージを表示させる処理
    if (score < 100) {
        text = `あなたのランクはCです。\n\nBランクまであと${100 - score}文字です。`;
    } else if (score < 150) {
        text = `あなたのランクはBです。\n\nAランクまであと${150 - score}文字です。`;
    } else if (score < 200) {
        text = `あなたのランクはAです。\n\nSランクまであと${200 - score}文字です。`;
    } else if (score >= 200) {
        text = `あなたのランクはSです。\n\n素晴らしい!`;
    }

    return `${score}文字打てました!\n\n${text}\n\n [OK]リトライ / [キャンセル]終了`;
};

// ゲームを終了する処理
const gameOver = id => {
    clearInterval(id);

    const result = confirm(rankCheck(score));

    // OKボタンをクリックしたらリロードする処理
    if (result == true) {
        window.location.reload();
    }
};


// カウントダウンのタイマーの処理
const timer = () => {

    // タイマー部分のHTML要素を取得
    let time = count.textContent;

    const id = setInterval(() => {
        // 1秒ごとにカウントダウン処理
        time --;
        count.textContent = time;

        // カウントが0になったらタイマーを停止する処理
        if (time <= 0) {
            gameOver(id);
        }
            
        // ストップボタンを押したらタイマーを止め、ボタンを非表示にして、スタートボタンを再表示。再開はスタートボタン       
        stop.addEventListener('click', () => {
            clearInterval(id);
            stop.style.display = 'none';
            start.style.display = 'inline-block';
        });
    }, 1000);

    // リセットボタンを押したらページリロード
    reset.addEventListener('click', () => {
        window.location.reload();
    });
};

// ゲームスタート時の処理
start.addEventListener ('click', () => {

    // カウントダウンタイマーを開始する
    timer();
    
    // ランダムなテキストを表示する
    createText();

    // スタートボタンを非表示にする
    start.style.display = 'none';

    // ストップボタンを表示する
    stop.style.display = 'inline-block';

    // リセットボタンを表示する
    reset.style.display = 'inline-block';

    // キーボードのイベント処理
    document.addEventListener('keypress', keyPress);
});

untypedfield.textContent = 'スタートボタンで開始';
