function validate()
{
	function fname()
	{
		let x=document.getElementById("fname").value;
		if x==' '
		alert= Name must be entered
	}
	function numb(){
		let x=document.getElementById("mobnum").value;
		if (is NaN(x)||x<1||x>10)
		{
		text="input not valid";
		}
		document.getElementById("demo").innerHTML=text;
	}
}
	