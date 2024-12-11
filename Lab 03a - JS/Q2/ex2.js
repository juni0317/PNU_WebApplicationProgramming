function login() {
	const PASS = "pass";
    var input = prompt("Input the password", "");

    while (input != PASS) {
        alert("Wrong (you enterd: " + input + ")");
        input = prompt("Input the password", "");
    }

    alert("Pass (you enterd: " + input + ")");
      
}

function explainDays() {
    while (true) {
        var day = prompt("Input from Mon to Sun", "Mon");
        var lowerDay = day.toLowerCase();
        if (lowerDay === "mon" || lowerDay === "tue" || lowerDay === "wed" || lowerDay === "thu" || lowerDay === "fri") {
            var formattedDay = lowerDay.charAt(0).toUpperCase() + lowerDay.slice(1);
            document.write(formattedDay + ", to go to work!");
            break;
        } else if (lowerDay === "sat" || lowerDay === "sun") {
            document.write("Weekend, and take a rest!");
            break;
        } else {
            alert("Invalid input. Please enter a valid day from Mon to Sun."); 
        }
    }
}
