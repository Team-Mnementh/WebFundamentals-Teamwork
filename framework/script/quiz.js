window.onload = initialize;

function initialize() {
    hidePopup();
}

function displayPopup() {
    document.getElementById('pad').style.display = 'block';
    document.getElementById('popup').style.display = 'block';
}

function hidePopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('pad').style.display = 'none';
}


function quizRezult() {
    var userAnswers = getAnswers();
    if(userAnswers == "") {
        return;
    }
    var result = calculateResult(userAnswers);    
    var userProfile = getProfile(result);
    document.getElementById('quiz-result').innerHTML = userProfile;
    displayPopup();
    document.getElementById("quiz").reset();
}

/**
 * 
 * @returns {Array|undefined}
 */
function getAnswers() {
    var numOfAnswers = 6;
    var profile = [0,0,0,0,0];
    for(i=1; i<=numOfAnswers; i++) {
        var question = 'q'+i;
        var answer = getQuestionValue(question);
        if(answer!=false) {
            profile[answer] += 1;
        } else {
            var msg = "Моля отговорете на всички въпроси";
            alert(msg);
            return;
        }
    }
    return profile;
}

/**
 * 
 * @param {type} question
 * @returns {document@call;getElementsByName.value|Boolean}
 */
function getQuestionValue(question) {
    var answers = document.getElementsByName(question);
    for (q=0; q < answers.length; q++) {
        if (answers[q].checked==true) {
            return answers[q].value;
        }       
    }
    return false;
}

/**
 * 
 * @param {type} userAnswers
 * @returns {Number}
 */
function calculateResult(userAnswers) {
    var maxVal = Math.max.apply( Math, userAnswers );
    var count = 0;
    var profile = 0;
    //check how many profiles are with max value
    for (j=1; j<userAnswers.length; j++) {
        if (userAnswers[j]==maxVal) {         
            count++;
        }
    }
    //get the index of the most selected profile
    if (count == 1) {
        profile = userAnswers.indexOf(maxVal);       
    } else {
        profile = 0;
    }  
    return profile;
}

/**
 * 
 * @param {type} result
 * @returns {unresolved}
 */
function getProfile(result) {
    var profiles = ['Имаш заложби за нинджа, но трябват още тренировки',
        'Явно си бил нинджа, ама в момента си позагубил форма. Добре ще е да се замислиш за един опреснителен курс в SoftUni',
        'Ти определено си нинджа - само че на купона :)',
        'Поздравления, ти си готова за битка SoftUni нинджа',
        'Не е лек пътя на нинджата. Продължавай така и имаш всички шансове да успееш'];   
    return profiles[result];
}

