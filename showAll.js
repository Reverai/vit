// Привет мир
window.onload = function()
{
	document.querySelector('#showAll').onclick = function()
	{
		ajaxPOST();
	}
}
function ajaxPOST()
{
	
	var request = new XMLHttpRequest();
	request.onreadystatechange = function()
	{
		if(request.readyState == 4)
		{
			document.querySelector('#SHOW').innerHTML = request.responseText;
		}
	} 

	request.open('POST', 'showAllcomment.php');
	request.send();
	
}


	
