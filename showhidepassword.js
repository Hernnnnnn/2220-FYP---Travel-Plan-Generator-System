let password = document.getElementById('passwd');
let toggleBtn = document.getElementById('togglebtn');

let loginPassword = document.getElementById('login-password');
let loginToggleBtn = document.getElementById('login-togglebtn');

toggleBtn.addEventListener('click', function () {
  if (password.type === 'password') {
    password.type = 'text';
    toggleBtn.classList.remove('fa-eye-slash');
    toggleBtn.classList.add('fa-eye');
  } else {
    password.type = 'password';
    toggleBtn.classList.remove('fa-eye');
    toggleBtn.classList.add('fa-eye-slash');
  }
});

loginToggleBtn.addEventListener('click', function () {
  if (loginPassword.type === 'password') {
    loginPassword.type = 'text';
    loginToggleBtn.classList.remove('fa-eye-slash');
    loginToggleBtn.classList.add('fa-eye');
  } else {
    loginPassword.type = 'password';
    loginToggleBtn.classList.remove('fa-eye');
    loginToggleBtn.classList.add('fa-eye-slash');
  }
});
