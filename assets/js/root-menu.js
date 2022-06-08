//open modal for login
function menu_login_modal_show()
{
  $(".menu_login_modal").css("display","block");
} 
// only opened modal close
function close_modal()
{
  $(".modal").css("display","none");
}

function password_toggle(inputpass,togglepass)
{
	const togglePassword = document.querySelector('#'+togglepass);
	const password = document.querySelector('#'+inputpass);

	 
	// toggle the type attribute
	const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
	password.setAttribute('type', type);
	// toggle the eye slash icon
	togglePassword.classList.toggle('fa-eye-slash');
	 
}

