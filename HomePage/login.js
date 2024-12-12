function showRegister(){
  document.getElementById('registerForm').style.display = 'block';
  document.getElementById('loginForm').style.display = 'none';
}

function showLogin(){
  document.getElementById('loginForm').style.display = 'block';
  document.getElementById('registerForm').style.display = 'none';
}

function closeErrorModal(){
  document.getElementById('errorPopup').style.display = 'none';
}

// Show popup if there's an error
document.addEventListener("DOMContentLoaded", function (){
  const errorPopup = document.getElementById('errorPopup');
  const errorMessage = document.getElementById('errorMessage').innerText;
  if (errorMessage.trim() !== ""){
    errorPopup.style.display = 'block';
  }
});
