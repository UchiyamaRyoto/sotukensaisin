/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/testQuizCommon.js":
/*!****************************************!*\
  !*** ./resources/js/testQuizCommon.js ***!
  \****************************************/
/***/ (() => {

eval("(function ($) {\n  var prefectural = [{\n    id: \"01\",\n    question: \"16世紀ドイツで、贖宥状を批判し、九十五か条の論題を提起したのは誰？\",\n    answer01: \"ルター\",\n    answer02: \"フス\",\n    answer03: \"ウィクリフ\",\n    answer04: \"ツヴィングリ\",\n    explain: \"モップ：もっとも包括的には、共通の情緒的な衝動の影響を受けた、空間を共有した不安定な集合的行為をいう。「群集」に近似的な概念であるが、活動する群集である点や、より狭くは一定の確定された目的を志向する点や、相互行為の明確な焦点を欠くなどの点で群集とは区別される。モブともいう。活動的群集としてのモッブには、攻撃的群集（暴動、リンチ、テロリズム）、逃走的群集（パニック）、取得的群集（略奪）、表出的群集（集合的舞踊）が含まれる。\"\n  }, {\n    id: \"02\",\n    question: \"16世紀ドイツで、領邦ごとに教派を選択できた制度を何というか？\",\n    answer01: \"軍管区性\",\n    answer02: \"領邦協会性\",\n    answer03: \"荘園征\",\n    answer04: \"皇帝教皇主義\",\n    explain: \"アジテーター：古代ギリシアにおける先導的民衆指導者のこと。民主主義社会において社会的経済的に低い階層の民衆の勘定、恐れ、偏見、無知に訴えることにより権力を得、かつ、政治的目的を達成しようとする指導者を言う。ポピュリズムと同義と捉えることもできる。\"\n  }, {\n    id: \"03\",\n    question: \"16世紀ドイツで、ルター派を容認した決議は何？\",\n    answer01: \"ウェストファリア条約\",\n    answer02: \"ヴェルダン条約\",\n    answer03: \"メルセン条約\",\n    answer04: \"アウグスブルクの宗教和議\",\n    explain: \"スケープゴート：レビ記16章において、食材の日に人々の苦難や行ってきた罪を負わせて荒野に話した山羊を指す。また犠牲となる動物を選別し、飾り立てて教会の外に追いやるという儀式の類型はヒッタイトや古代ギリシア、古代ローマでも見られる。\"\n  }, {\n    id: \"04\",\n    question: \"16世紀ドイツで、ルターの教えに触発されて発生した大規模な農民反乱を何という？\",\n    answer01: \"南北戦争\",\n    answer02: \"ドイツ農民戦争\",\n    answer03: \"アラブの春\",\n    answer04: \"口語農民戦争\",\n    explain: \"セクト：「セクト」とは、既に認知・確立されている宗教の「分派」、もしくは、思想的指導者のもとに集まった人たちの「集まり」、を指す。こうしたことから、仏教、ヒンドゥー教、神道、道教などから派生した団体を指して「セクト」という表現をする。しかしながら、前出の宗教が離脱や分裂に対して、比較的寛容であったのに対し、教えの正統性を重視するキリスト教は、離脱や分裂そのものに反対してきた。キリスト教国で「セクト」の語が否定的な意味合いを持つのは、こうしたことによる。\"\n  }, {\n    id: \"05\",\n    question: \"新教派の人々を指す相称は何？\",\n    answer01: \"メスティソ\",\n    answer02: \"ムスリム\",\n    answer03: \"プロテスタント\",\n    answer04: \"シオニスト\",\n    explain: \"マスヒステリー：利害の共通である学友、小集落の住民、宗教団体などの小集団内で、発端者が何らかの症\"\n  }];\n  var prefecturalCapital = prefectural;\n  console.log(prefecturalCapital);\n\n  // 問題数の合計\n  var $questionTotalNum = 5;\n  // 現在の質問数\n  var $currentNum = 0;\n  // 得点\n  var $pointPerCorrect = 5;\n  // 説明文\n  var $explainText = \"\";\n  // スコアの判定\n  var scoreText = \"aaa\";\n  // クイズの量指定\n  // let quizId = [\"01\", \"02\", \"03\", \"04\", \"05\",\"06\", \"07\", \"08\", \"09\", \"10\",\"11\", \"12\", \"13\", \"14\", \"15\",\n  // \"16\", \"17\", \"18\", \"19\", \"20\",\"21\", \"22\", \"23\", \"24\", \"25\",\"26\", \"27\", \"28\", \"29\", \"30\",\n  // \"31\", \"32\", \"33\", \"34\", \"35\",\"36\", \"37\", \"38\", \"39\", \"40\",\"41\", \"42\", \"43\", \"44\", \"45\",\n  // \"46\", \"47\", \"48\", \"49\", \"50\",\"51\", \"52\", \"53\", \"54\", \"55\",\"56\", \"57\", \"58\", \"59\", \"60\",\n  // \"61\", \"62\", \"63\", \"64\", \"65\",\"66\", \"67\", \"68\", \"69\", \"70\",\"71\", \"72\",\"73\",\"74\",\"75\",\n  // ,\"76\",\"77\",\"78\",\"79\",\"80\"\n  // ];\n  var quizId = [\"01\", \"02\", \"03\", \"04\", \"05\"];\n\n  // クイズ並び替え\n  shuffleQuiz(quizId);\n  var questionObject = function () {\n    var Obj = function Obj($target) {\n      // 質問番号\n      this.$questionNumber = $target.find(\".quiz-question-number\");\n      // 質問文\n      this.$questionName = $target.find(\".quiz-question\");\n      // 選択肢\n      this.$questionButton = $target.find(\".quiz-button\");\n      this.$button01 = $target.find(\".button01\");\n      this.$button02 = $target.find(\".button02\");\n      this.$button03 = $target.find(\".button03\");\n      this.$button04 = $target.find(\".button04\");\n      // テキスト\n      this.$answer01 = $target.find(\".quiz-text01\");\n      this.$answer02 = $target.find(\".quiz-text02\");\n      this.$answer03 = $target.find(\".quiz-text03\");\n      this.$answer04 = $target.find(\".quiz-text04\");\n      // 点数\n      this.$score = $target.find(\".score-wrap .score\");\n      // 次へのボタン\n      this.$nextButton = $target.find(\".next-button\");\n      // 説明\n      this.$explain = $target.find(\".explain\");\n      this.init();\n    };\n    Obj.prototype = {\n      init: function init() {\n        // イベント処理\n        this.event();\n      },\n      event: function event() {\n        // イベント内\n        var _this = this;\n\n        // スコア\n        var score = 0;\n\n        // 初めて表示されたとき\n        $(window).on(\"load\", function () {\n          // valueの取得\n          var value = quizId[$currentNum];\n          // 次の問題を取得\n          var nextQuestion = _this.searchQuestion(value);\n          // 次の問題を表示\n          _this.changeQuestion(nextQuestion);\n          _this.shuffleAnswer($(\".quiz-answer\"));\n        });\n\n        // 選択肢が押されたとき\n        this.$questionButton.on(\"click\", function () {\n          //正解の選択肢が押されたとき\n          if ($(this).hasClass(\"button01\")) {\n            $(this).parents(\".quiz-answer\").addClass(\"is-correct\");\n            score = score + $pointPerCorrect;\n          } else {\n            $(this).parents(\".quiz-answer\").addClass(\"is-incorrect\");\n          }\n          $(this).addClass(\"is-checked\");\n          $(\".explain\").addClass(\"is-show\");\n          $(\".explain-wrap .explain-text\").text($explainText);\n          return false;\n        });\n        this.$nextButton.on(\"click\", function () {\n          $(\".explain\").removeClass(\"is-show\");\n          if ($currentNum + 1 == $questionTotalNum) {\n            if (score > 80) {\n              scoreText = \"もしかして文系ですかぁ！？！！\";\n            } else if (score > 60) {\n              scoreText = \"革命児！天才児！ギフテッド！！あなたみたいな人は見たことない！\";\n            } else if (score > 40) {\n              scoreText = \"頭悪すぎる。今まで何して生きてたの？勉学に励もう！\";\n            } else {\n              scoreText = \"へたくそ！！\";\n            }\n            $(\".finish\").addClass(\"is-show\");\n            $(\".scope-wrap .score\").text(score);\n            $(\".evaluation\").text(scoreText);\n          }\n\n          // 現在の数字を更新\n          $currentNum = $currentNum + 1;\n\n          // 次の質問番号取得\n          var value = quizId[$currentNum];\n\n          // 次の質問取得\n          var nextQuestion = _this.searchQuestion(value);\n\n          // 次の質問表示\n          _this.changeQuestion(nextQuestion);\n\n          // クラスの削除\n          _this.$questionButton.removeClass(\"is-checked\");\n          $(\".quiz-answer\").removeClass(\"is-correct\").removeClass(\"is-incorrect\");\n\n          // 選択肢の並び替え\n          _this.shuffleAnswer($(\".quiz-answer\"));\n        });\n      },\n      // 次の質問を取得する関数\n      searchQuestion: function searchQuestion(questionId) {\n        var nextQuestion = null;\n        prefecturalCapital.forEach(function (item) {\n          if (item.id == questionId) {\n            nextQuestion = item;\n          }\n        });\n        return nextQuestion;\n      },\n      // 次の質問を表示する関数\n      changeQuestion: function changeQuestion(nextQuestion) {\n        var _this = this;\n        if (nextQuestion) {\n          var numPlusOne = $currentNum + 1;\n          _this.$questionNumber.text(\"質問\" + numPlusOne);\n          _this.$questionName.text(nextQuestion.question);\n          _this.$answer01.text(nextQuestion.answer01);\n          _this.$answer02.text(nextQuestion.answer02);\n          _this.$answer03.text(nextQuestion.answer03);\n          _this.$answer04.text(nextQuestion.answer04);\n          $explainText = nextQuestion.explain;\n        }\n      },\n      // 選択肢の並び替えをする関数\n      shuffleAnswer: function shuffleAnswer(container) {\n        var content = container.find(\"> *\");\n        var total = content.length;\n        content.each(function () {\n          content.eq(Math.floor(Math.random() * total)).prependTo(container);\n        });\n      }\n    };\n    return Obj;\n  }();\n  var quiz = $(\".quiz\");\n  if (quiz[0]) {\n    var queInstance = new questionObject(quiz);\n  }\n\n  // 回答順を変更\n  function shuffleQuiz(array) {\n    for (var i = array.length - 1; i > 0; i--) {\n      var random = Math.floor(Math.random() * (i + 1));\n      var selected = array[i];\n      array[i] = array[random];\n      array[random] = selected;\n    }\n    return array;\n  }\n})(jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvdGVzdFF1aXpDb21tb24uanMiLCJuYW1lcyI6WyIkIiwicHJlZmVjdHVyYWwiLCJpZCIsInF1ZXN0aW9uIiwiYW5zd2VyMDEiLCJhbnN3ZXIwMiIsImFuc3dlcjAzIiwiYW5zd2VyMDQiLCJleHBsYWluIiwicHJlZmVjdHVyYWxDYXBpdGFsIiwiY29uc29sZSIsImxvZyIsIiRxdWVzdGlvblRvdGFsTnVtIiwiJGN1cnJlbnROdW0iLCIkcG9pbnRQZXJDb3JyZWN0IiwiJGV4cGxhaW5UZXh0Iiwic2NvcmVUZXh0IiwicXVpeklkIiwic2h1ZmZsZVF1aXoiLCJxdWVzdGlvbk9iamVjdCIsIk9iaiIsIiR0YXJnZXQiLCIkcXVlc3Rpb25OdW1iZXIiLCJmaW5kIiwiJHF1ZXN0aW9uTmFtZSIsIiRxdWVzdGlvbkJ1dHRvbiIsIiRidXR0b24wMSIsIiRidXR0b24wMiIsIiRidXR0b24wMyIsIiRidXR0b24wNCIsIiRhbnN3ZXIwMSIsIiRhbnN3ZXIwMiIsIiRhbnN3ZXIwMyIsIiRhbnN3ZXIwNCIsIiRzY29yZSIsIiRuZXh0QnV0dG9uIiwiJGV4cGxhaW4iLCJpbml0IiwicHJvdG90eXBlIiwiZXZlbnQiLCJfdGhpcyIsInNjb3JlIiwid2luZG93Iiwib24iLCJ2YWx1ZSIsIm5leHRRdWVzdGlvbiIsInNlYXJjaFF1ZXN0aW9uIiwiY2hhbmdlUXVlc3Rpb24iLCJzaHVmZmxlQW5zd2VyIiwiaGFzQ2xhc3MiLCJwYXJlbnRzIiwiYWRkQ2xhc3MiLCJ0ZXh0IiwicmVtb3ZlQ2xhc3MiLCJxdWVzdGlvbklkIiwiZm9yRWFjaCIsIml0ZW0iLCJudW1QbHVzT25lIiwiY29udGFpbmVyIiwiY29udGVudCIsInRvdGFsIiwibGVuZ3RoIiwiZWFjaCIsImVxIiwiTWF0aCIsImZsb29yIiwicmFuZG9tIiwicHJlcGVuZFRvIiwicXVpeiIsInF1ZUluc3RhbmNlIiwiYXJyYXkiLCJpIiwic2VsZWN0ZWQiLCJqUXVlcnkiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy90ZXN0UXVpekNvbW1vbi5qcz8yNGNiIl0sInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbiAoJCkge1xuXG4gICAgY29uc3QgcHJlZmVjdHVyYWwgPSBbXG4gICAgICAgIHtcbiAgICAgICAgICAgIGlkOiBcIjAxXCIsXG4gICAgICAgICAgICBxdWVzdGlvbjogXCIxNuS4lue0gOODieOCpOODhOOBp+OAgei0luWupeeKtuOCkuaJueWIpOOBl+OAgeS5neWNgeS6lOOBi+adoeOBruirlumhjOOCkuaPkOi1t+OBl+OBn+OBruOBr+iqsO+8n1wiLFxuICAgICAgICAgICAgYW5zd2VyMDE6IFwi44Or44K/44O8XCIsXG4gICAgICAgICAgICBhbnN3ZXIwMjogXCLjg5XjgrlcIixcbiAgICAgICAgICAgIGFuc3dlcjAzOiBcIuOCpuOCo+OCr+ODquODlVwiLFxuICAgICAgICAgICAgYW5zd2VyMDQ6IFwi44OE44O044Kj44Oz44Kw44OqXCIsXG4gICAgICAgICAgICBleHBsYWluOiBcIuODouODg+ODl++8muOCguOBo+OBqOOCguWMheaLrOeahOOBq+OBr+OAgeWFsemAmuOBruaDhee3kueahOOBquihneWLleOBruW9semfv+OCkuWPl+OBkeOBn+OAgeepuumWk+OCkuWFseacieOBl+OBn+S4jeWuieWumuOBqumbhuWQiOeahOihjOeCuuOCkuOBhOOBhuOAguOAjOe+pOmbhuOAjeOBq+i/keS8vOeahOOBquamguW/teOBp+OBguOCi+OBjOOAgea0u+WLleOBmeOCi+e+pOmbhuOBp+OBguOCi+eCueOChOOAgeOCiOOCiueLreOBj+OBr+S4gOWumuOBrueiuuWumuOBleOCjOOBn+ebrueahOOCkuW/l+WQkeOBmeOCi+eCueOChOOAgeebuOS6kuihjOeCuuOBruaYjueiuuOBqueEpueCueOCkuasoOOBj+OBquOBqeOBrueCueOBp+e+pOmbhuOBqOOBr+WMuuWIpeOBleOCjOOCi+OAguODouODluOBqOOCguOBhOOBhuOAgua0u+WLleeahOe+pOmbhuOBqOOBl+OBpuOBruODouODg+ODluOBq+OBr+OAgeaUu+aSg+eahOe+pOmbhu+8iOaatOWLleOAgeODquODs+ODgeOAgeODhuODreODquOCuuODoO+8ieOAgemAg+i1sOeahOe+pOmbhu+8iOODkeODi+ODg+OCr++8ieOAgeWPluW+l+eahOe+pOmbhu+8iOeVpeWlqu+8ieOAgeihqOWHuueahOe+pOmbhu+8iOmbhuWQiOeahOiInui4iu+8ieOBjOWQq+OBvuOCjOOCi+OAglwiXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIGlkOiBcIjAyXCIsXG4gICAgICAgICAgICBxdWVzdGlvbjogXCIxNuS4lue0gOODieOCpOODhOOBp+OAgemgmOmCpuOBlOOBqOOBq+aVmea0vuOCkumBuOaKnuOBp+OBjeOBn+WItuW6puOCkuS9leOBqOOBhOOBhuOBi++8n1wiLFxuICAgICAgICAgICAgYW5zd2VyMDE6IFwi6LuN566h5Yy65oCnXCIsXG4gICAgICAgICAgICBhbnN3ZXIwMjogXCLpoJjpgqbljZTkvJrmgKdcIixcbiAgICAgICAgICAgIGFuc3dlcjAzOiBcIuiNmOWckuW+gVwiLFxuICAgICAgICAgICAgYW5zd2VyMDQ6IFwi55qH5bid5pWZ55qH5Li7576pXCIsXG4gICAgICAgICAgICBleHBsYWluOiBcIuOCouOCuOODhuODvOOCv+ODvO+8muWPpOS7o+OCruODquOCt+OCouOBq+OBiuOBkeOCi+WFiOWwjueahOawkeihhuaMh+WwjuiAheOBruOBk+OBqOOAguawkeS4u+S4u+e+qeekvuS8muOBq+OBiuOBhOOBpuekvuS8mueahOe1jOa4iOeahOOBq+S9juOBhOmajuWxpOOBruawkeihhuOBruWLmOWumuOAgeaBkOOCjOOAgeWBj+imi+OAgeeEoeefpeOBq+iotOOBiOOCi+OBk+OBqOOBq+OCiOOCiuaoqeWKm+OCkuW+l+OAgeOBi+OBpOOAgeaUv+ayu+eahOebrueahOOCkumBlOaIkOOBl+OCiOOBhuOBqOOBmeOCi+aMh+WwjuiAheOCkuiogOOBhuOAguODneODlOODpeODquOCuuODoOOBqOWQjOe+qeOBqOaNieOBiOOCi+OBk+OBqOOCguOBp+OBjeOCi+OAglwiXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIGlkOiBcIjAzXCIsXG4gICAgICAgICAgICBxdWVzdGlvbjogXCIxNuS4lue0gOODieOCpOODhOOBp+OAgeODq+OCv+ODvOa0vuOCkuWuueiqjeOBl+OBn+axuuitsOOBr+S9le+8n1wiLFxuICAgICAgICAgICAgYW5zd2VyMDE6IFwi44Km44Kn44K544OI44OV44Kh44Oq44Ki5p2h57SEXCIsXG4gICAgICAgICAgICBhbnN3ZXIwMjogXCLjg7Tjgqfjg6vjg4Djg7PmnaHntIRcIixcbiAgICAgICAgICAgIGFuc3dlcjAzOiBcIuODoeODq+OCu+ODs+adoee0hFwiLFxuICAgICAgICAgICAgYW5zd2VyMDQ6IFwi44Ki44Km44Kw44K544OW44Or44Kv44Gu5a6X5pWZ5ZKM6K2wXCIsXG4gICAgICAgICAgICBleHBsYWluOiBcIuOCueOCseODvOODl+OCtOODvOODiO+8muODrOODk+iomDE256ug44Gr44GK44GE44Gm44CB6aOf5p2Q44Gu5pel44Gr5Lq644CF44Gu6Ium6Zuj44KE6KGM44Gj44Gm44GN44Gf572q44KS6LKg44KP44Gb44Gm6I2S6YeO44Gr6Kmx44GX44Gf5bGx576K44KS5oyH44GZ44CC44G+44Gf54qg54my44Go44Gq44KL5YuV54mp44KS6YG45Yil44GX44CB6aO+44KK56uL44Gm44Gm5pWZ5Lya44Gu5aSW44Gr6L+944GE44KE44KL44Go44GE44GG5YSA5byP44Gu6aGe5Z6L44Gv44OS44OD44K/44Kk44OI44KE5Y+k5Luj44Ku44Oq44K344Ki44CB5Y+k5Luj44Ot44O844Oe44Gn44KC6KaL44KJ44KM44KL44CCXCJcbiAgICAgICAgfSxcbiAgICAgICAge1xuICAgICAgICAgICAgaWQ6IFwiMDRcIixcbiAgICAgICAgICAgIHF1ZXN0aW9uOiBcIjE25LiW57SA44OJ44Kk44OE44Gn44CB44Or44K/44O844Gu5pWZ44GI44Gr6Kem55m644GV44KM44Gm55m655Sf44GX44Gf5aSn6KaP5qih44Gq6L6y5rCR5Y+N5Lmx44KS5L2V44Go44GE44GG77yfXCIsXG4gICAgICAgICAgICBhbnN3ZXIwMTogXCLljZfljJfmiKbkuolcIixcbiAgICAgICAgICAgIGFuc3dlcjAyOiBcIuODieOCpOODhOi+suawkeaIpuS6iVwiLFxuICAgICAgICAgICAgYW5zd2VyMDM6IFwi44Ki44Op44OW44Gu5pilXCIsXG4gICAgICAgICAgICBhbnN3ZXIwNDogXCLlj6Poqp7ovrLmsJHmiKbkuolcIixcbiAgICAgICAgICAgIGV4cGxhaW46IFwi44K744Kv44OI77ya44CM44K744Kv44OI44CN44Go44Gv44CB5pei44Gr6KqN55+l44O756K656uL44GV44KM44Gm44GE44KL5a6X5pWZ44Gu44CM5YiG5rS+44CN44CB44KC44GX44GP44Gv44CB5oCd5oOz55qE5oyH5bCO6ICF44Gu44KC44Go44Gr6ZuG44G+44Gj44Gf5Lq644Gf44Gh44Gu44CM6ZuG44G+44KK44CN44CB44KS5oyH44GZ44CC44GT44GG44GX44Gf44GT44Go44GL44KJ44CB5LuP5pWZ44CB44OS44Oz44OJ44Kl44O85pWZ44CB56We6YGT44CB6YGT5pWZ44Gq44Gp44GL44KJ5rS+55Sf44GX44Gf5Zuj5L2T44KS5oyH44GX44Gm44CM44K744Kv44OI44CN44Go44GE44GG6KGo54++44KS44GZ44KL44CC44GX44GL44GX44Gq44GM44KJ44CB5YmN5Ye644Gu5a6X5pWZ44GM6Zui6ISx44KE5YiG6KOC44Gr5a++44GX44Gm44CB5q+U6LyD55qE5a+b5a6544Gn44GC44Gj44Gf44Gu44Gr5a++44GX44CB5pWZ44GI44Gu5q2j57Wx5oCn44KS6YeN6KaW44GZ44KL44Kt44Oq44K544OI5pWZ44Gv44CB6Zui6ISx44KE5YiG6KOC44Gd44Gu44KC44Gu44Gr5Y+N5a++44GX44Gm44GN44Gf44CC44Kt44Oq44K544OI5pWZ5Zu944Gn44CM44K744Kv44OI44CN44Gu6Kqe44GM5ZCm5a6a55qE44Gq5oSP5ZGz5ZCI44GE44KS5oyB44Gk44Gu44Gv44CB44GT44GG44GX44Gf44GT44Go44Gr44KI44KL44CCXCJcbiAgICAgICAgfSxcbiAgICAgICAge1xuICAgICAgICAgICAgaWQ6IFwiMDVcIixcbiAgICAgICAgICAgIHF1ZXN0aW9uOiBcIuaWsOaVmea0vuOBruS6uuOAheOCkuaMh+OBmeebuOensOOBr+S9le+8n1wiLFxuICAgICAgICAgICAgYW5zd2VyMDE6IFwi44Oh44K544OG44Kj44K9XCIsXG4gICAgICAgICAgICBhbnN3ZXIwMjogXCLjg6Djgrnjg6rjg6BcIixcbiAgICAgICAgICAgIGFuc3dlcjAzOiBcIuODl+ODreODhuOCueOCv+ODs+ODiFwiLFxuICAgICAgICAgICAgYW5zd2VyMDQ6IFwi44K344Kq44OL44K544OIXCIsXG4gICAgICAgICAgICBleHBsYWluOiBcIuODnuOCueODkuOCueODhuODquODvO+8muWIqeWus+OBruWFsemAmuOBp+OBguOCi+WtpuWPi+OAgeWwj+mbhuiQveOBruS9j+awkeOAgeWul+aVmeWbo+S9k+OBquOBqeOBruWwj+mbhuWbo+WGheOBp+OAgeeZuuerr+iAheOBjOS9leOCieOBi+OBrueXh1wiXG4gICAgICAgIH1cbiAgICBdO1xuXG5cbiAgICBjb25zdCBwcmVmZWN0dXJhbENhcGl0YWwgPSBwcmVmZWN0dXJhbDtcbiAgICBjb25zb2xlLmxvZyhwcmVmZWN0dXJhbENhcGl0YWwpO1xuXG4gICAgLy8g5ZWP6aGM5pWw44Gu5ZCI6KiIXG4gICAgbGV0ICRxdWVzdGlvblRvdGFsTnVtID0gNTtcbiAgICAvLyDnj77lnKjjga7os6rllY/mlbBcbiAgICBsZXQgJGN1cnJlbnROdW0gPSAwO1xuICAgIC8vIOW+l+eCuVxuICAgIGxldCAkcG9pbnRQZXJDb3JyZWN0ID0gNTtcbiAgICAvLyDoqqzmmI7mlodcbiAgICBsZXQgJGV4cGxhaW5UZXh0ID0gXCJcIjtcbiAgICAvLyDjgrnjgrPjgqLjga7liKTlrppcbiAgICBsZXQgc2NvcmVUZXh0ID0gXCJhYWFcIjtcbiAgICAvLyDjgq/jgqTjgrrjga7ph4/mjIflrppcbiAgICAvLyBsZXQgcXVpeklkID0gW1wiMDFcIiwgXCIwMlwiLCBcIjAzXCIsIFwiMDRcIiwgXCIwNVwiLFwiMDZcIiwgXCIwN1wiLCBcIjA4XCIsIFwiMDlcIiwgXCIxMFwiLFwiMTFcIiwgXCIxMlwiLCBcIjEzXCIsIFwiMTRcIiwgXCIxNVwiLFxuICAgIC8vIFwiMTZcIiwgXCIxN1wiLCBcIjE4XCIsIFwiMTlcIiwgXCIyMFwiLFwiMjFcIiwgXCIyMlwiLCBcIjIzXCIsIFwiMjRcIiwgXCIyNVwiLFwiMjZcIiwgXCIyN1wiLCBcIjI4XCIsIFwiMjlcIiwgXCIzMFwiLFxuICAgIC8vIFwiMzFcIiwgXCIzMlwiLCBcIjMzXCIsIFwiMzRcIiwgXCIzNVwiLFwiMzZcIiwgXCIzN1wiLCBcIjM4XCIsIFwiMzlcIiwgXCI0MFwiLFwiNDFcIiwgXCI0MlwiLCBcIjQzXCIsIFwiNDRcIiwgXCI0NVwiLFxuICAgIC8vIFwiNDZcIiwgXCI0N1wiLCBcIjQ4XCIsIFwiNDlcIiwgXCI1MFwiLFwiNTFcIiwgXCI1MlwiLCBcIjUzXCIsIFwiNTRcIiwgXCI1NVwiLFwiNTZcIiwgXCI1N1wiLCBcIjU4XCIsIFwiNTlcIiwgXCI2MFwiLFxuICAgIC8vIFwiNjFcIiwgXCI2MlwiLCBcIjYzXCIsIFwiNjRcIiwgXCI2NVwiLFwiNjZcIiwgXCI2N1wiLCBcIjY4XCIsIFwiNjlcIiwgXCI3MFwiLFwiNzFcIiwgXCI3MlwiLFwiNzNcIixcIjc0XCIsXCI3NVwiLFxuICAgIC8vICxcIjc2XCIsXCI3N1wiLFwiNzhcIixcIjc5XCIsXCI4MFwiXG4gICAgLy8gXTtcbiAgICBsZXQgcXVpeklkID0gW1wiMDFcIiwgXCIwMlwiLCBcIjAzXCIsIFwiMDRcIiwgXCIwNVwiXVxuXG4gICAgLy8g44Kv44Kk44K65Lim44Gz5pu/44GIXG4gICAgc2h1ZmZsZVF1aXoocXVpeklkKTtcblxuICAgIGxldCBxdWVzdGlvbk9iamVjdCA9IChmdW5jdGlvbiAoKSB7XG4gICAgICAgIGxldCBPYmogPSBmdW5jdGlvbiAoJHRhcmdldCkge1xuICAgICAgICAgICAgLy8g6LOq5ZWP55Wq5Y+3XG4gICAgICAgICAgICB0aGlzLiRxdWVzdGlvbk51bWJlciA9ICR0YXJnZXQuZmluZChcIi5xdWl6LXF1ZXN0aW9uLW51bWJlclwiKTtcbiAgICAgICAgICAgIC8vIOizquWVj+aWh1xuICAgICAgICAgICAgdGhpcy4kcXVlc3Rpb25OYW1lID0gJHRhcmdldC5maW5kKFwiLnF1aXotcXVlc3Rpb25cIik7XG4gICAgICAgICAgICAvLyDpgbjmip7ogqJcbiAgICAgICAgICAgIHRoaXMuJHF1ZXN0aW9uQnV0dG9uID0gJHRhcmdldC5maW5kKFwiLnF1aXotYnV0dG9uXCIpO1xuICAgICAgICAgICAgdGhpcy4kYnV0dG9uMDEgPSAkdGFyZ2V0LmZpbmQoXCIuYnV0dG9uMDFcIik7XG4gICAgICAgICAgICB0aGlzLiRidXR0b24wMiA9ICR0YXJnZXQuZmluZChcIi5idXR0b24wMlwiKTtcbiAgICAgICAgICAgIHRoaXMuJGJ1dHRvbjAzID0gJHRhcmdldC5maW5kKFwiLmJ1dHRvbjAzXCIpO1xuICAgICAgICAgICAgdGhpcy4kYnV0dG9uMDQgPSAkdGFyZ2V0LmZpbmQoXCIuYnV0dG9uMDRcIik7XG4gICAgICAgICAgICAvLyDjg4bjgq3jgrnjg4hcbiAgICAgICAgICAgIHRoaXMuJGFuc3dlcjAxID0gJHRhcmdldC5maW5kKFwiLnF1aXotdGV4dDAxXCIpO1xuICAgICAgICAgICAgdGhpcy4kYW5zd2VyMDIgPSAkdGFyZ2V0LmZpbmQoXCIucXVpei10ZXh0MDJcIik7XG4gICAgICAgICAgICB0aGlzLiRhbnN3ZXIwMyA9ICR0YXJnZXQuZmluZChcIi5xdWl6LXRleHQwM1wiKTtcbiAgICAgICAgICAgIHRoaXMuJGFuc3dlcjA0ID0gJHRhcmdldC5maW5kKFwiLnF1aXotdGV4dDA0XCIpO1xuICAgICAgICAgICAgLy8g54K55pWwXG4gICAgICAgICAgICB0aGlzLiRzY29yZSA9ICR0YXJnZXQuZmluZChcIi5zY29yZS13cmFwIC5zY29yZVwiKTtcbiAgICAgICAgICAgIC8vIOasoeOBuOOBruODnOOCv+ODs1xuICAgICAgICAgICAgdGhpcy4kbmV4dEJ1dHRvbiA9ICR0YXJnZXQuZmluZChcIi5uZXh0LWJ1dHRvblwiKTtcbiAgICAgICAgICAgIC8vIOiqrOaYjlxuICAgICAgICAgICAgdGhpcy4kZXhwbGFpbiA9ICR0YXJnZXQuZmluZChcIi5leHBsYWluXCIpO1xuXG4gICAgICAgICAgICB0aGlzLmluaXQoKTtcbiAgICAgICAgfTtcblxuICAgICAgICBPYmoucHJvdG90eXBlID0ge1xuICAgICAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIC8vIOOCpOODmeODs+ODiOWHpueQhlxuICAgICAgICAgICAgICAgIHRoaXMuZXZlbnQoKTtcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBldmVudDogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIC8vIOOCpOODmeODs+ODiOWGhVxuICAgICAgICAgICAgICAgIGxldCBfdGhpcyA9IHRoaXM7XG5cbiAgICAgICAgICAgICAgICAvLyDjgrnjgrPjgqJcbiAgICAgICAgICAgICAgICBsZXQgc2NvcmUgPSAwO1xuXG4gICAgICAgICAgICAgICAgLy8g5Yid44KB44Gm6KGo56S644GV44KM44Gf44Go44GNXG4gICAgICAgICAgICAgICAgJCh3aW5kb3cpLm9uKFwibG9hZFwiLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgICAgIC8vIHZhbHVl44Gu5Y+W5b6XXG4gICAgICAgICAgICAgICAgICAgIGxldCB2YWx1ZSA9IHF1aXpJZFskY3VycmVudE51bV07XG4gICAgICAgICAgICAgICAgICAgIC8vIOasoeOBruWVj+mhjOOCkuWPluW+l1xuICAgICAgICAgICAgICAgICAgICBsZXQgbmV4dFF1ZXN0aW9uID0gX3RoaXMuc2VhcmNoUXVlc3Rpb24odmFsdWUpO1xuICAgICAgICAgICAgICAgICAgICAvLyDmrKHjga7llY/poYzjgpLooajnpLpcbiAgICAgICAgICAgICAgICAgICAgX3RoaXMuY2hhbmdlUXVlc3Rpb24obmV4dFF1ZXN0aW9uKTtcbiAgICAgICAgICAgICAgICAgICAgX3RoaXMuc2h1ZmZsZUFuc3dlcigkKFwiLnF1aXotYW5zd2VyXCIpKTtcbiAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgIC8vIOmBuOaKnuiCouOBjOaKvOOBleOCjOOBn+OBqOOBjVxuICAgICAgICAgICAgICAgIHRoaXMuJHF1ZXN0aW9uQnV0dG9uLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICAvL+ato+ino+OBrumBuOaKnuiCouOBjOaKvOOBleOCjOOBn+OBqOOBjVxuICAgICAgICAgICAgICAgICAgICBpZiAoJCh0aGlzKS5oYXNDbGFzcyhcImJ1dHRvbjAxXCIpKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKHRoaXMpLnBhcmVudHMoXCIucXVpei1hbnN3ZXJcIikuYWRkQ2xhc3MoXCJpcy1jb3JyZWN0XCIpO1xuICAgICAgICAgICAgICAgICAgICAgICAgc2NvcmUgPSBzY29yZSArICRwb2ludFBlckNvcnJlY3Q7XG4gICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKHRoaXMpLnBhcmVudHMoXCIucXVpei1hbnN3ZXJcIikuYWRkQ2xhc3MoXCJpcy1pbmNvcnJlY3RcIik7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgJCh0aGlzKS5hZGRDbGFzcyhcImlzLWNoZWNrZWRcIik7XG5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAkKFwiLmV4cGxhaW5cIikuYWRkQ2xhc3MoXCJpcy1zaG93XCIpO1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICQoXCIuZXhwbGFpbi13cmFwIC5leHBsYWluLXRleHRcIikudGV4dCgkZXhwbGFpblRleHQpO1xuICAgICAgICAgICAgICAgICAgICByZXR1cm4gZmFsc2U7XG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICB0aGlzLiRuZXh0QnV0dG9uLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xuXG4gICAgICAgICAgICAgICAgICAgICQoXCIuZXhwbGFpblwiKS5yZW1vdmVDbGFzcyhcImlzLXNob3dcIik7XG5cbiAgICAgICAgICAgICAgICAgICAgaWYgKCRjdXJyZW50TnVtICsgMSA9PSAkcXVlc3Rpb25Ub3RhbE51bSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYoc2NvcmUgPiA4MCl7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc2NvcmVUZXh0ID0gXCLjgoLjgZfjgYvjgZfjgabmlofns7vjgafjgZnjgYvjgYHvvIHvvJ/vvIHvvIFcIjtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1lbHNlIGlmKHNjb3JlID4gNjApe1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNjb3JlVGV4dCA9IFwi6Z2p5ZG95YWQ77yB5aSp5omN5YWQ77yB44Ku44OV44OG44OD44OJ77yB77yB44GC44Gq44Gf44G/44Gf44GE44Gq5Lq644Gv6KaL44Gf44GT44Go44Gq44GE77yBXCI7XG4gICAgICAgICAgICAgICAgICAgICAgICB9ZWxzZSBpZihzY29yZSA+IDQwKXtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzY29yZVRleHQgPSBcIumgreaCquOBmeOBjuOCi+OAguS7iuOBvuOBp+S9leOBl+OBpueUn+OBjeOBpuOBn+OBru+8n+WLieWtpuOBq+WKseOCguOBhu+8gVwiO1xuICAgICAgICAgICAgICAgICAgICAgICAgfWVsc2V7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgc2NvcmVUZXh0ID0gXCLjgbjjgZ/jgY/jgZ3vvIHvvIFcIjtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICQoXCIuZmluaXNoXCIpLmFkZENsYXNzKFwiaXMtc2hvd1wiKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICQoXCIuc2NvcGUtd3JhcCAuc2NvcmVcIikudGV4dChzY29yZSk7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKFwiLmV2YWx1YXRpb25cIikudGV4dChzY29yZVRleHQpO1xuICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgIC8vIOePvuWcqOOBruaVsOWtl+OCkuabtOaWsFxuICAgICAgICAgICAgICAgICAgICAgJGN1cnJlbnROdW0gPSAkY3VycmVudE51bSArIDE7XG5cbiAgICAgICAgICAgICAgICAgICAgIC8vIOasoeOBruizquWVj+eVquWPt+WPluW+l1xuICAgICAgICAgICAgICAgICAgICAgbGV0IHZhbHVlID0gcXVpeklkWyRjdXJyZW50TnVtXTtcblxuICAgICAgICAgICAgICAgICAgICAgLy8g5qyh44Gu6LOq5ZWP5Y+W5b6XXG4gICAgICAgICAgICAgICAgICAgICBsZXQgbmV4dFF1ZXN0aW9uID0gX3RoaXMuc2VhcmNoUXVlc3Rpb24odmFsdWUpO1xuXG4gICAgICAgICAgICAgICAgICAgICAvLyDmrKHjga7os6rllY/ooajnpLpcbiAgICAgICAgICAgICAgICAgICAgIF90aGlzLmNoYW5nZVF1ZXN0aW9uKG5leHRRdWVzdGlvbik7XG5cbiAgICAgICAgICAgICAgICAgICAgIC8vIOOCr+ODqeOCueOBruWJiumZpFxuICAgICAgICAgICAgICAgICAgICAgX3RoaXMuJHF1ZXN0aW9uQnV0dG9uLnJlbW92ZUNsYXNzKFwiaXMtY2hlY2tlZFwiKTtcbiAgICAgICAgICAgICAgICAgICAgICQoXCIucXVpei1hbnN3ZXJcIikucmVtb3ZlQ2xhc3MoXCJpcy1jb3JyZWN0XCIpLnJlbW92ZUNsYXNzKFwiaXMtaW5jb3JyZWN0XCIpO1xuXG4gICAgICAgICAgICAgICAgICAgICAvLyDpgbjmip7ogqLjga7kuKbjgbPmm7/jgYhcbiAgICAgICAgICAgICAgICAgICAgIF90aGlzLnNodWZmbGVBbnN3ZXIoJChcIi5xdWl6LWFuc3dlclwiKSk7XG4gICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIH0sXG5cbiAgICAgICAgICAgIC8vIOasoeOBruizquWVj+OCkuWPluW+l+OBmeOCi+mWouaVsFxuICAgICAgICAgICAgc2VhcmNoUXVlc3Rpb246IGZ1bmN0aW9uIChxdWVzdGlvbklkKSB7XG4gICAgICAgICAgICAgICAgbGV0IG5leHRRdWVzdGlvbiA9IG51bGw7XG4gICAgICAgICAgICAgICAgcHJlZmVjdHVyYWxDYXBpdGFsLmZvckVhY2goZnVuY3Rpb24gKGl0ZW0pIHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKGl0ZW0uaWQgPT0gcXVlc3Rpb25JZCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgbmV4dFF1ZXN0aW9uID0gaXRlbTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIHJldHVybiBuZXh0UXVlc3Rpb247XG4gICAgICAgICAgICB9LFxuXG4gICAgICAgICAgICAvLyDmrKHjga7os6rllY/jgpLooajnpLrjgZnjgovplqLmlbBcbiAgICAgICAgICAgIGNoYW5nZVF1ZXN0aW9uOiBmdW5jdGlvbiAobmV4dFF1ZXN0aW9uKSB7XG4gICAgICAgICAgICAgICAgbGV0IF90aGlzID0gdGhpcztcblxuICAgICAgICAgICAgICAgIGlmKG5leHRRdWVzdGlvbikge1xuICAgICAgICAgICAgICAgICAgICBsZXQgbnVtUGx1c09uZSA9ICRjdXJyZW50TnVtICsgMTtcbiAgICAgICAgICAgICAgICAgICAgX3RoaXMuJHF1ZXN0aW9uTnVtYmVyLnRleHQoXCLos6rllY9cIiArIG51bVBsdXNPbmUpO1xuXG4gICAgICAgICAgICAgICAgICAgIF90aGlzLiRxdWVzdGlvbk5hbWUudGV4dChuZXh0UXVlc3Rpb24ucXVlc3Rpb24pO1xuXG4gICAgICAgICAgICAgICAgICAgIF90aGlzLiRhbnN3ZXIwMS50ZXh0KG5leHRRdWVzdGlvbi5hbnN3ZXIwMSk7XG4gICAgICAgICAgICAgICAgICAgIF90aGlzLiRhbnN3ZXIwMi50ZXh0KG5leHRRdWVzdGlvbi5hbnN3ZXIwMik7XG4gICAgICAgICAgICAgICAgICAgIF90aGlzLiRhbnN3ZXIwMy50ZXh0KG5leHRRdWVzdGlvbi5hbnN3ZXIwMyk7XG4gICAgICAgICAgICAgICAgICAgIF90aGlzLiRhbnN3ZXIwNC50ZXh0KG5leHRRdWVzdGlvbi5hbnN3ZXIwNCk7XG5cbiAgICAgICAgICAgICAgICAgICAgJGV4cGxhaW5UZXh0ID0gbmV4dFF1ZXN0aW9uLmV4cGxhaW47XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSxcblxuICAgICAgICAgICAgLy8g6YG45oqe6IKi44Gu5Lim44Gz5pu/44GI44KS44GZ44KL6Zai5pWwXG4gICAgICAgICAgICBzaHVmZmxlQW5zd2VyOiBmdW5jdGlvbiAoY29udGFpbmVyKSB7XG4gICAgICAgICAgICAgICAgbGV0IGNvbnRlbnQgPSBjb250YWluZXIuZmluZChcIj4gKlwiKTtcbiAgICAgICAgICAgICAgICBsZXQgdG90YWwgPSBjb250ZW50Lmxlbmd0aDtcbiAgICAgICAgICAgICAgICBjb250ZW50LmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICBjb250ZW50LmVxKE1hdGguZmxvb3IoTWF0aC5yYW5kb20oKSAqIHRvdGFsKSkucHJlcGVuZFRvKGNvbnRhaW5lcik7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9LFxuICAgICAgICB9O1xuXG4gICAgICAgIHJldHVybiBPYmo7XG4gICAgfSkoKTtcblxuICAgIGxldCBxdWl6ID0gJChcIi5xdWl6XCIpO1xuICAgIGlmIChxdWl6WzBdKSB7XG4gICAgICAgIGxldCBxdWVJbnN0YW5jZSA9IG5ldyBxdWVzdGlvbk9iamVjdChxdWl6KTtcbiAgICB9XG5cbiAgICAvLyDlm57nrZTpoIbjgpLlpInmm7RcbiAgICBmdW5jdGlvbiBzaHVmZmxlUXVpeihhcnJheSkge1xuICAgICAgICBmb3IgKGxldCBpID0gYXJyYXkubGVuZ3RoIC0gMTsgaSA+IDA7IGktLSkge1xuICAgICAgICAgICAgbGV0IHJhbmRvbSA9IE1hdGguZmxvb3IoTWF0aC5yYW5kb20oKSAqIChpICsgMSkpO1xuICAgICAgICAgICAgbGV0IHNlbGVjdGVkID0gYXJyYXlbaV07XG4gICAgICAgICAgICBhcnJheVtpXSA9IGFycmF5W3JhbmRvbV07XG4gICAgICAgICAgICBhcnJheVtyYW5kb21dID0gc2VsZWN0ZWQ7XG4gICAgICAgIH1cbiAgICAgICAgcmV0dXJuIGFycmF5O1xuICAgIH1cbn0pKGpRdWVyeSk7XG4iXSwibWFwcGluZ3MiOiJBQUFBLENBQUMsVUFBVUEsQ0FBQyxFQUFFO0VBRVYsSUFBTUMsV0FBVyxHQUFHLENBQ2hCO0lBQ0lDLEVBQUUsRUFBRSxJQUFJO0lBQ1JDLFFBQVEsRUFBRSxvQ0FBb0M7SUFDOUNDLFFBQVEsRUFBRSxLQUFLO0lBQ2ZDLFFBQVEsRUFBRSxJQUFJO0lBQ2RDLFFBQVEsRUFBRSxPQUFPO0lBQ2pCQyxRQUFRLEVBQUUsUUFBUTtJQUNsQkMsT0FBTyxFQUFFO0VBQ2IsQ0FBQyxFQUNEO0lBQ0lOLEVBQUUsRUFBRSxJQUFJO0lBQ1JDLFFBQVEsRUFBRSxpQ0FBaUM7SUFDM0NDLFFBQVEsRUFBRSxNQUFNO0lBQ2hCQyxRQUFRLEVBQUUsT0FBTztJQUNqQkMsUUFBUSxFQUFFLEtBQUs7SUFDZkMsUUFBUSxFQUFFLFFBQVE7SUFDbEJDLE9BQU8sRUFBRTtFQUNiLENBQUMsRUFDRDtJQUNJTixFQUFFLEVBQUUsSUFBSTtJQUNSQyxRQUFRLEVBQUUseUJBQXlCO0lBQ25DQyxRQUFRLEVBQUUsWUFBWTtJQUN0QkMsUUFBUSxFQUFFLFNBQVM7SUFDbkJDLFFBQVEsRUFBRSxRQUFRO0lBQ2xCQyxRQUFRLEVBQUUsY0FBYztJQUN4QkMsT0FBTyxFQUFFO0VBQ2IsQ0FBQyxFQUNEO0lBQ0lOLEVBQUUsRUFBRSxJQUFJO0lBQ1JDLFFBQVEsRUFB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\n//# sourceURL=webpack-internal:///./resources/js/testQuizCommon.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/testQuizCommon.js"]();
/******/ 	
/******/ })()
;