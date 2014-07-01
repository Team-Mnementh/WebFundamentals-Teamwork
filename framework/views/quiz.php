<section class="question">        
    <header>
        <h2>SoftUni тест </h2> 
    </header>

    <article>
        <header>
            <h3>Истинска SoftUni нинджа ли си?</h3>
        </header>

        <form action="#" method="POST" id="quiz">
            
            <div>
                
                <p>1. Как обикновено ти започва деня:</p>

                <input id="question1_answer1" type="radio" name="q1" value="1">
                <label for="question1_answer1">
                Ставам в 6:30, къпя се, пия кафе и излизам по задачи
                </label>
                <br/>
            
                <input id="question1_answer2" type="radio" name="q1" value="2">
                <label for="question1_answer2">
                    Уф, докато стана и се оправя, той деня минал, за нищо не ми остава време
                </label>
                <br />
                
                <input id="question1_answer3" type="radio" name="q1" value="3">
                <label for="question1_answer3">
                    Кой ден...?
                </label>
                <br />

                <input id="question1_answer4" type="radio" name="q1" value="4">
                <label for="question1_answer4">
                    Не ме занимавайте с глупости, не виждате ли че имам 50 домашни на главата.
                </label>
            </div>
            
            <div>
                <p>2. По колко часа на ден спите?</p>

                <input id="question2_answer1" type="radio" name="q2" value="1">
                <label for="question2_answer1">
                    Лягам в 22:30 и ставам в 6:30
                </label>
                <br />

                <input id="question2_answer2" type="radio" name="q2" value="2">
                <label for="question2_answer2">
                    Тия моите съседи като се разлопат сутрин към 11:30 и направо откачам.
                </label>
                <br />

                <input id="question2_answer3" type="radio" name="q2" value="3">
                <label for="question2_answer3">
                    Обикновено спа нощем
                </label>
                <br />

                <input id="question2_answer4" type="radio" name="q2" value="4">
                <label for="question2_answer4">
                    Какъв сън бе човек, не виждаш ли че ми пуши главата с тия домашни.
                </label>
            </div>  

            <div>
                <p>3. Колко често излизате с приятели на бира</p>

                <input id="question3_answer1" type="radio" name="q3" value="1">
                <label for="question3_answer1">
                    Всеки петък и събота вечер
                </label>
                <br />

                <input id="question3_answer2" type="radio" name="q3" value="2">
                <label for="question3_answer2">
                    Всеки ден някъде запиваме
                </label>
                <br />

                <input id="question3_answer3" type="radio" name="q3" value="3">
                <label for="question3_answer3">
                    За какво ми е да излизам нали затова е измислен интернет и скайп
                </label>
                <br />

                <input id="question3_answer4" type="radio" name="q3" value="4">
                <label for="question3_answer4">
                    Почваш яко да ми лазиш по нервите
                </label>
            </div>

            <div>
                <p>4. Кога за последно сте се напивали безпаметно?</p>

                <input id="question4_answer1" type="radio" name="q4" value="1">
                <label for="question4_answer1">
                    Като студент, има периоди, когато ми се губят дни, но сега понамалих темпото
                </label>
                <br />

                <input id="question4_answer2" type="radio" name="q4" value="2">
                <label for="question4_answer2">
                    Ела, ако искаш с нас довечера, да видиш как ще се усмъртим
                </label>
                <br />

                <input id="question4_answer3" type="radio" name="q4" value="3">
                <label for="question4_answer3">
                    Не пия, откакто след един запой си смених паролите
                </label>
                <br />

                <input id="question4_answer4" type="radio" name="q4" value="4">
                <label for="question4_answer4">
                    Само да завърша курса и един месец няма да изтрезнея
                </label>
            </div>
            
            <div>
                <p>5. Имате ли партньор в живота?</p>

                <input id="question5_answer1" type="radio" name="q5" value="1">
                <label for="question5_answer1">
                    Да, женен съм с 2 деца
                </label>
                <br />

                <input id="question5_answer2" type="radio" name="q5" value="2">
                <label for="question5_answer2">
                    Абе, братле, да ти изглеждам на мъж за една жена
                </label>
                <br />

                <input id="question5_answer3" type="radio" name="q5" value="3">
                <label for="question5_answer3">
                    Да, Toshiba Tecra W50
                </label>
                <br />

                <input id="question5_answer4" type="radio" name="q5" value="4">
                <label for="question5_answer4">
                    Ей сега ти счупих главата ...
                </label>
            </div>                    

            <div>
                <p>6. Какво хапвате най-често?</p>

                <input id="question6_answer1" type="radio" name="q6" value="1">
                <label for="question6_answer1">
                    Жена ми прави много хубава мусака
                </label>
                <br />

                <input id="question6_answer2" type="radio" name="q6" value="2">
                <label for="question6_answer2">
                    Квото дойде, че напоследък няма кинти за пиячка
                </label>
                <br />

                <input id="question6_answer3" type="radio" name="q6" value="3">
                <label for="question6_answer3">
                    Хамбургер с кола
                </label>
                <br />

                <input id="question6_answer4" type="radio" name="q6" value="4">
                <label for="question6_answer4">
                    Нямам време за ядене
                </label>
            </div> 
        </form>
		<button onclick="quizRezult();">Дай да видя!</button>
		<script src="script/quiz.js"></script>
    </article>
    
    <div id="popup">
        <p id="quiz-result">opa</p>
        <button onclick="hidePopup();" class="button"> Скрий </button>
    </div>
    <div id="pad"></div>
</section>