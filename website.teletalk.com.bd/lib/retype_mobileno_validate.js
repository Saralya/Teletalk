var Validate = function() {
  if (document.getElementById('mobileno').value ==
    document.getElementById('confirmmobile').value) {
    document.getElementById('confirmmobile').style.color = 'green';
    document.getElementById('confirmmobile').innerHTML = 'matching';
	return true;
  } else {
    document.getElementById('confirmmobile').style.color = 'red';
    document.getElementById('confirmmobile').innerHTML = 'not matching';
	/*var s iv = document.getElementById("confirmmobile").value;
	alert(siv);
	retur */
	return false;
  }
}
