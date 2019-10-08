function withdrawal(){
var amount = document.getElementById("amount").value;
var balance = 220;
var fivers = 4;
var tenners = 15;
var twenties = 7;

if ((balance-amount)<-100) {
		document.getElementById("balance").innerHTML = "You have insufficient funds";
	} else if (amount%5!==0) {
		document.getElementById("balance").innerHTML = "Invalid entry. Please enter at least a multiple of 5";
	} else if (fivers==0) {
		document.getElementById("balance").innerHTML = "No fivers available. Please enter at least a multiple of 10";
	} else if ((fivers==0) && (tenners==0)) {
			document.getElementById("balance").innerHTML = "Only multiples of 20 available at the moment";		
	} else if (((balance-amount)<0) && ((balance-amount)>=-100)) {
		balance = balance-amount;
		document.getElementById("balance").innerHTML = "You are now overdrawn. Your new balance is " + balance;
	} else if((balance-amount)>0) {
		balance = balance-amount;
		document.getElementById("balance").innerHTML = "Your new balance is " + balance;
	}
	}
	
	
	
	//Other idea considered
//var numbers = [amount, 20, 10, 5];

//calculatingNotes = numbers.reduce (myFunc);

//function myFunc(total, num) {
  //return total - num;
  
  //fivers--;
  //tenners--;
  //twenties--;
  
  //loop through until amount is 0
  //see more maths attempts in maths.java file
