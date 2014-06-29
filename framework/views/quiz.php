<section>
    <h1>SoftUni тест <span>Истинска SoftUni нинджа ли си?</span></h1>
    
    <form id="quiz" onsubmit="quizRezult();">
        <div class="question">
            <h2>1. Как обикновено ти започва деня:</h2>
            <div class="answers">
                <label>
                    <input type="radio" name="q1" value="1">
                    <span>Ставам в 6:30, къпя се, пия кафе и излизам по задачи</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="2">
                    <span>Уф, докато стана и се оправя, той деня минал, за нищо не ми остава време</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="3">
                    <span>Кой ден...?</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="4">
                    <span>Не ме занимавайте с глупости, не виждате ли че имам 50 домашни на главата.</span>
                </label>
            </div>
        </div>
        
        <div class="question">
            <h2>2. По колко часа на ден спите</h2>
            <div class="answers">
                <label>
                    <input type="radio" name="q2" value="1">
                    <span>Лягам в 22:30 и ставам в 6:30</span>
                </label>
                <label>
                    <input type="radio" name="q2" value="2">
                    <span>Тия моите съседи като се разлопат сутрин към 11:30 и направо откачам.</span>
                </label>
                <label>
                    <input type="radio" name="q2" value="3">
                    <span>Обикновено спа нощем</span>
                </label>
                <label>
                    <input type="radio" name="q2" value="4">
                    <span>Какъв сън бе човек, не виждаш ли че ми пуши главата с тия домашни.</span>
                </label>
            </div>
        </div>
        
        <div class="question">
            <h2>3. Колко често излизате с приятели на бира</h2>
            <div class="answers">
                <label>
                    <input type="radio" name="q3" value="1">
                    <span>Всеки петък и събота вечер</span>
                </label>
                <label>
                    <input type="radio" name="q3" value="2">
                    <span>Всеки ден някъде запиваме</span>
                </label>
                <label>
                    <input type="radio" name="q3" value="3">
                    <span>За какво ми е да излизам нали затова е измислен интернет и скайп</span>
                </label>
                <label>
                    <input type="radio" name="q3" value="4">
                    <span>Почваш яко да ми лазиш по нервите</span>
                </label>
            </div>
        </div>

        <div class="question">
            <h2>4. Кога за последно сте се напивали безпаметно</h2>
            <div class="answers">
                <label>
                    <input type="radio" name="q4" value="1">
                    <span>Като студент, има периоди, когато ми се губят дни, но сега понамалих темпото</span>
                </label>
                <label>
                    <input type="radio" name="q4" value="2">
                    <span>Ела, ако искаш с нас довечера, да видиш как ще се усмъртим</span>
                </label>
                <label>
                    <input type="radio" name="q4" value="3">
                    <span>Не пия, откакто след един запой си смених паролите</span>
                </label>
                <label>
                    <input type="radio" name="q4" value="4">
                    <span>Само да завърша курса и един месец няма да изтрезнея</span>
                </label>
            </div>
        </div>

        <div class="question">
            <h2>5. Имате ли партньор в живота</h2>
            <div class="answers">
                <label>
                    <input type="radio" name="q5" value="1">
                    <span>Да, женен съм с 2 деца</span>
                </label>
                <label>
                    <input type="radio" name="q5" value="2">
                    <span>Абе, братле, да ти изглеждам на мъж за една жена</span>
                </label>
                <label>
                    <input type="radio" name="q5" value="3">
                    <span>Да, Toshiba Tecra W50</span>
                </label>
                <label>
                    <input type="radio" name="q5" value="4">
                    <span>Ей сега ти счупих главата ...</span>
                </label>
            </div>
        </div>

        <div class="question">
            <h2>6. Какво хапвате най-често</h2>
            <div class="answers">
                <label>
                    <input type="radio" name="q6" value="1">
                    <span>Жена ми прави много хубава мусака</span>
                </label>
                <label>
                    <input type="radio" name="q6" value="2">
                    <span>Квото дойде, че напоследък няма кинти за пиячка</span>
                </label>
                <label>
                    <input type="radio" name="q6" value="3">
                    <span>Хамбургер с кола</span>
                </label>
                <label>
                    <input type="radio" name="q6" value="4">
                    <span>Нямам време за ядене</span>
                </label>
            </div>
        </div>
        <input type="submit" value="Submit">
    </form>
    <button onclick="quizRezult();">Result</button>
	<script src="script/quiz.js"></script>
</section>
