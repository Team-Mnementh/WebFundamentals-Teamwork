function getWish() {
  	
  	// write wishes here
	var wishes = ['Днес определено ти върви - за шестица на изпита се подготви.',
    		 		'Късметлия днес си ти - домашното ще ти спори.',
    				'Задачата трудна ще решиш - време е да се успокоиш.',
    				'Днес в леглото остани - със задачите не ти върви.',
    				'Тази вечер няма да се спи - задачи ще решаваш до зори.',
    				''];
    var positionInArray = Math.floor(Math.random() * wishes.length);

    document.getElementById('text').innerHTML = wishes[positionInArray];
}