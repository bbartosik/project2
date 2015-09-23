<?php

//Function passing prameters from input forms on index file 
//parameters reflecting projects requirements
function create_password($words, $number, $symbol, $upcase) {


//pulling data from word fils

$allwords = file("words.txt");

//defining variables

//symbol array
$symbols = array('!', '@', '#', '$', '%', '^', '&', '*');

//randomizing words in symbol array
$rand_symbol = array_rand($symbols, 1);

//Innitializing password
$password = NULL;

//loop reflecting number of words
	for ($i=0;$i<$words;$i++)
	{
		//pulling random words from an array and assigning  them to variable
		$password .= $allwords[rand(0, count($allwords))];
		//getting rid of unwanted chars/spaces and adding '-' between words
		$password = preg_replace('/[^a-z0-9]+/i','-',
   		iconv('UTF-8','ASCII//TRANSLIT',$password));
	}

    // random number		
	if ($number =='on') 
	{
		$adding_number = rand(0,15);
		$password .= "$adding_number";
	}
	//adding symbol
	if ($symbol =='on')
	{
		$password .= "$symbols[$rand_symbol]";	
	}
	//upper case for first letter
	if ($upcase == 'on')
	{
		$password = ucfirst($password);
	}
	return $password;
}
?>