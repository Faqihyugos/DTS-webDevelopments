var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $inputFields = document.querySelectorAll('input-field');
var $email = document.getElementById('email');
var $pass = document.getElementById('password');

function addError(message) {
   $error.innerHTML = message;
   $error.style.display = 'block';
 } 

function removeError(message) {
   $error.innerHTML = '';
   $error.style.display = 'hidden';
 } 

 function validate(event) {
   event.preventDefault();
   $error.style.display = 'none';

   if ($email.value !== 'admin@vsga.com' || $pass.value !== 'password') {
      addError('Email atau password salah!');
   }else{
      removeError();
      alert('Anda berhasil Login');
   }
 }

 $form.addEventListener('submit', validate);