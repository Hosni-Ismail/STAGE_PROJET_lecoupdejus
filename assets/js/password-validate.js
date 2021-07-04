function val_a(){
if(frm1.password.value == " ")
{
	alert("Entrez votre mot de passe.");
	frm1.password.focus(); 
	return false;
}
if((frm1.password.value).length < 8)
{
	alert("Le mot de passe doit comporter au moins 8 caractères.");
	frm1.password.focus();
	return false;
}

if((frm1.password.value).length > 20)
{
	alert("le mot de passe doit comporter au maximum 20 caractères.");
	frm1.password.focus();
	return false;
}

if(frm1.confirmpassword.value == "")
{
	alert("Entrez le mot de passe de confirmation.");
	return false;
}
if(frm1.confirmpassword.value != frm1.password.value)
{
	alert("La confirmation du mot de passe ne correspond pas.");
	return false;
}

return true;
}

function val_b(){
if(frm2.password.value == "")
{
	alert("Entrez votre mot de passe.");
	frm2.password.focus(); 
	return false;
}
if((frm2.password.value).length < 8)
{
	alert("Le mot de passe doit comporter au moins 8 caractères.");
	frm2.password.focus();
	return false;
}

if((frm2.password.value).length > 20)
{
	alert("le mot de passe doit comporter au maximum 20 caractères.");
	frm2.password.focus();
	return false;
}

if(frm2.confirmpassword.value == "")
{
	alert("Entrez le mot de passe de confirmation.");
	return false;
}
if(frm2.confirmpassword.value != frm2.password.value)
{
	alert("La confirmation du mot de passe ne correspond pas.");
	return false;
}

return true;
}