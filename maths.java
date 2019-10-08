package codechallenge;

import java.util.Arrays;

public class Withdraw {
	
	static int[] notes = { 20, 10, 5 };
	static int[] amounts = { 7, 15, 4 };
	static int accountBalance = 220; //API
	static int overdraftlimit = -100;
	
	public static void main(String[] args) {
		
		Withdrawal(140);
		System.out.println("");
		Withdrawal(50);
		System.out.println("");
		Withdrawal(90);
		System.out.println("");
		
	}
	
	public static void Withdrawal(int withdrawalAmount) {
		System.out.println("WHAT NOTES DO WE HAVE?: " + Arrays.toString(amounts));
		System.out.println("Balance: £" +accountBalance);
		System.out.println("Requested Amount: £" + withdrawalAmount);
		
		// Check if requested amount is multiple of 5
		if (withdrawalAmount % 5 == 0) 
		{
			System.out.println("Multiple of 5: PASS");
			// Check if requested amount is greater than account balance
			if (accountBalance - withdrawalAmount < overdraftlimit)
			{
				// Insufficient funds
				System.out.println("The requested amount exceeds your account balance.");
			} 
			else 
			{
	
				// Update Bank Balance and notify if customer is in overdraft
				accountBalance= accountBalance-withdrawalAmount;
				if (accountBalance > 0) 
				{
					// Balance still above zero
					System.out.println("Balance: £" + accountBalance);
				}
				else
				{
					//Balance below zero and overdraft applied
					System.out.println("You are now overdrawn. Your overdraft limit is -£100");
					System.out.println("Balance: £" + accountBalance);
				}
				
				// Check and Receive Notes
				//iterate through array of notes until customer receives total withdrawalAmount
				for(int i=0; i < notes.length && withdrawalAmount != 0; i++) 
				{
					if (amounts[i] != 0) //check if there are 20s, 10s, 5s
					{
						int amountofNotes = withdrawalAmount/notes[i];
						while (withdrawalAmount>=notes[i])
						{
							System.out.print("Number of " + notes[i] + "'s" + ": " + amountofNotes +"\n");
							//update how many 20s, 10s, 5s are in the ATM
							amounts[i] = amounts[i] - amountofNotes;
							withdrawalAmount = withdrawalAmount % notes[i];	
						}
					}
				}
			}
		} 
		else
		{
			System.out.println("You can only request amounts in multiples of 5");
		}
		
	};

}
