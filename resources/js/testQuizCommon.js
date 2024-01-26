const { stringify } = require("postcss");

(function ($) {

    const prefectural = [
        {
            id: "01",
            question: "16世紀ドイツで、贖宥状を批判し、九十五か条の論題を提起したのは誰？",
            answer01: "ルター",
            answer02: "フス",
            answer03: "ウィクリフ",
            answer04: "ツヴィングリ",
            explain: "モップ：もっとも包括的には、共通の情緒的な衝動の影響を受けた、空間を共有した不安定な集合的行為をいう。「群集」に近似的な概念であるが、活動する群集である点や、より狭くは一定の確定された目的を志向する点や、相互行為の明確な焦点を欠くなどの点で群集とは区別される。モブともいう。活動的群集としてのモッブには、攻撃的群集（暴動、リンチ、テロリズム）、逃走的群集（パニック）、取得的群集（略奪）、表出的群集（集合的舞踊）が含まれる。"
        },
        {
            id: "02",
            question: "16世紀ドイツで、領邦ごとに教派を選択できた制度を何というか？",
            answer01: "軍管区性",
            answer02: "領邦協会性",
            answer03: "荘園征",
            answer04: "皇帝教皇主義",
            explain: "アジテーター：古代ギリシアにおける先導的民衆指導者のこと。民主主義社会において社会的経済的に低い階層の民衆の勘定、恐れ、偏見、無知に訴えることにより権力を得、かつ、政治的目的を達成しようとする指導者を言う。ポピュリズムと同義と捉えることもできる。"
        },
        {
            id: "03",
            question: "16世紀ドイツで、ルター派を容認した決議は何？",
            answer01: "ウェストファリア条約",
            answer02: "ヴェルダン条約",
            answer03: "メルセン条約",
            answer04: "アウグスブルクの宗教和議",
            explain: "スケープゴート：レビ記16章において、食材の日に人々の苦難や行ってきた罪を負わせて荒野に話した山羊を指す。また犠牲となる動物を選別し、飾り立てて教会の外に追いやるという儀式の類型はヒッタイトや古代ギリシア、古代ローマでも見られる。"
        },
        {
            id: "04",
            question: "16世紀ドイツで、ルターの教えに触発されて発生した大規模な農民反乱を何という？",
            answer01: "南北戦争",
            answer02: "ドイツ農民戦争",
            answer03: "アラブの春",
            answer04: "口語農民戦争",
            explain: "セクト：「セクト」とは、既に認知・確立されている宗教の「分派」、もしくは、思想的指導者のもとに集まった人たちの「集まり」、を指す。こうしたことから、仏教、ヒンドゥー教、神道、道教などから派生した団体を指して「セクト」という表現をする。しかしながら、前出の宗教が離脱や分裂に対して、比較的寛容であったのに対し、教えの正統性を重視するキリスト教は、離脱や分裂そのものに反対してきた。キリスト教国で「セクト」の語が否定的な意味合いを持つのは、こうしたことによる。"
        },
        {
            id: "05",
            question: "新教派の人々を指す相称は何？",
            answer01: "メスティソ",
            answer02: "ムスリム",
            answer03: "プロテスタント",
            answer04: "シオニスト",
            explain: "マスヒステリー：利害の共通である学友、小集落の住民、宗教団体などの小集団内で、発端者が何らかの症"
        }
    ];


    const prefecturalCapital = prefectural;
    console.log(prefecturalCapital);

    // 問題数の合計
    let $questionTotalNum = 5;
    // 現在の質問数
    let $currentNum = 0;
    // 得点
    let $pointPerCorrect = 5;
    // 説明文
    let $explainText = "";
    // スコアの判定
    let scoreText = "aaa";
    // クイズの量指定
    // let quizId = ["01", "02", "03", "04", "05","06", "07", "08", "09", "10","11", "12", "13", "14", "15",
    // "16", "17", "18", "19", "20","21", "22", "23", "24", "25","26", "27", "28", "29", "30",
    // "31", "32", "33", "34", "35","36", "37", "38", "39", "40","41", "42", "43", "44", "45",
    // "46", "47", "48", "49", "50","51", "52", "53", "54", "55","56", "57", "58", "59", "60",
    // "61", "62", "63", "64", "65","66", "67", "68", "69", "70","71", "72","73","74","75",
    // ,"76","77","78","79","80"
    // ];
    let quizId = ["01", "02", "03", "04", "05"];

    // クイズ並び替え
    shuffleQuiz(quizId);

    let questionObject = (function () {
        let Obj = function ($target) {
            // 質問番号
            this.$questionNumber = $target.find(".quiz-question-number");
            // 質問文
            this.$questionName = $target.find(".quiz-question");
            // 選択肢
            this.$questionButton = $target.find(".quiz-button");
            this.$button01 = $target.find(".button01");
            this.$button02 = $target.find(".button02");
            this.$button03 = $target.find(".button03");
            this.$button04 = $target.find(".button04");
            // テキスト
            this.$answer01 = $target.find(".quiz-text01");
            this.$answer02 = $target.find(".quiz-text02");
            this.$answer03 = $target.find(".quiz-text03");
            this.$answer04 = $target.find(".quiz-text04");
            // 点数
            this.$score = $target.find(".score-wrap .score");
            // 次へのボタン
            this.$nextButton = $target.find(".next-button");
            // 説明
            this.$explain = $target.find(".explain");

            this.init();
        };

        Obj.prototype = {
            init: function () {
                // イベント処理
                this.event();
            },
            event: function () {
                // イベント内
                let _this = this;

                // スコア
                let score = 0;

                // 初めて表示されたとき
                $(window).on("load", function () {
                    // valueの取得
                    let value = quizId[$currentNum];
                    // 次の問題を取得
                    let nextQuestion = _this.searchQuestion(value);
                    // 次の問題を表示
                    _this.changeQuestion(nextQuestion);
                    _this.shuffleAnswer($(".quiz-answer"));
                });

                // 選択肢が押されたとき
                this.$questionButton.on("click", function () {
                    //正解の選択肢が押されたとき
                    if ($(this).hasClass("button01")) {
                        $(this).parents(".quiz-answer").addClass("is-correct");
                        score = score + $pointPerCorrect;
                    } else {
                        $(this).parents(".quiz-answer").addClass("is-incorrect");
                    }
                    $(this).addClass("is-checked");

                            $(".explain").addClass("is-show");
                            $(".explain-wrap .explain-text").text($explainText);
                    return false;
                });

                this.$nextButton.on("click", function () {

                    $(".explain").removeClass("is-show");

                    if ($currentNum + 1 == $questionTotalNum) {
                        if(score > 80){
                            scoreText = "もしかして文系ですかぁ！？！！";
                        }else if(score > 60){
                            scoreText = "革命児！天才児！ギフテッド！！あなたみたいな人は見たことない！";
                        }else if(score > 40){
                            scoreText = "頭悪すぎる。今まで何して生きてたの？勉学に励もう！";
                        }else{
                            scoreText = "へたくそ！！";
                        }
                        $(".finish").addClass("is-show");
                        $(".scope-wrap .score").text(score);
                        $(".evaluation").text(scoreText);
                    }

                     // 現在の数字を更新
                     $currentNum = $currentNum + 1;

                     // 次の質問番号取得
                     let value = quizId[$currentNum];

                     // 次の質問取得
                     let nextQuestion = _this.searchQuestion(value);

                     // 次の質問表示
                     _this.changeQuestion(nextQuestion);

                     // クラスの削除
                     _this.$questionButton.removeClass("is-checked");
                     $(".quiz-answer").removeClass("is-correct").removeClass("is-incorrect");

                     // 選択肢の並び替え
                     _this.shuffleAnswer($(".quiz-answer"));
                })
            },

            // 次の質問を取得する関数
            searchQuestion: function (questionId) {
                let nextQuestion = null;
                prefecturalCapital.forEach(function (item) {
                    if (item.id == questionId) {
                        nextQuestion = item;
                    }
                });
                return nextQuestion;
            },

            // 次の質問を表示する関数
            changeQuestion: function (nextQuestion) {
                let _this = this;

                if(nextQuestion) {
                    let numPlusOne = $currentNum + 1;
                    _this.$questionNumber.text("質問" + numPlusOne);

                    _this.$questionName.text(nextQuestion.question);

                    _this.$answer01.text(nextQuestion.answer01);
                    _this.$answer02.text(nextQuestion.answer02);
                    _this.$answer03.text(nextQuestion.answer03);
                    _this.$answer04.text(nextQuestion.answer04);

                    $explainText = nextQuestion.explain;
                }
            },

            // 選択肢の並び替えをする関数
            shuffleAnswer: function (container) {
                let content = container.find("> *");
                let total = content.length;
                content.each(function () {
                    content.eq(Math.floor(Math.random() * total)).prependTo(container);
                });
            },
        };

        return Obj;
    })();

    let quiz = $(".quiz");
    if (quiz[0]) {
        let queInstance = new questionObject(quiz);
    }

    // 回答順を変更
    function shuffleQuiz(array) {
        for (let i = array.length - 1; i > 0; i--) {
            let random = Math.floor(Math.random() * (i + 1));
            let selected = array[i];
            array[i] = array[random];
            array[random] = selected;
        }
        return array;
    }
})(jQuery);
