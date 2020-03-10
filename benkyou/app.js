function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    var gameOverHTML = "<h1 id='re'> Result </h1>";
    gameOverHTML += "<h2 id='score'> Your score: " + quiz.score + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};

// create questions
var questions = [
    new Question("Which one is 'a' in Hiragana?", ["か", "お","う", "あ"], "あ"),
    new Question("Choose the Hiragana 'ka'.", ["う", "え", "か", "せ"], "か"),
    new Question("'ho' is written ____ in Hiragana.", ["は", "ほ","ま", "も"], "ほ"),
    new Question("Which one is き?", ["ke", "ta", "ki", "sa"], "ki"),
    new Question("Which one is 'n' in Hiragana?", ["ん", "そ", "え", "ら"], "ん")
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();

