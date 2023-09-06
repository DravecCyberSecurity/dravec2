// Função para validar o formulário de login
function validateLoginForm() {
  const emailInput = document.querySelector('#login-in input[name="email"]');
    const passwordInput = document.querySelector('#login-in input[name="password"]');
  
    const emailRegex = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/;
  
    if (!emailRegex.test(emailInput.value)) {
      alert('Por favor, insira um email válido.');
      return false;
    }
  
    if (passwordInput.value.length < 8) {
      alert('A senha deve ter pelo menos 8 caracteres.');
      return false;
    }
  
    return true;
  }
  
  // Função para validar o formulário de cadastro
  function validateRegisterForm() {
    const usernameInput = document.querySelector('#login-up input[name="name"]');
    const emailInput = document.querySelector('#login-up input[name="email"]');
    const passwordInput = document.querySelector('#login-up input[name="password"]');
    const passwordRepeatInput = document.querySelector('#login-up input[name="passwordrpt"]');
  
    const usernameRegex = /^[a-zA-Z0-9_]{3,20}$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  
    if (!usernameRegex.test(usernameInput.value)) {
      alert('O nome de usuário deve ter de 3 a 20 caracteres alfanuméricos.');
      return false;
    }
  
    if (!emailRegex.test(emailInput.value)) {
      alert('Por favor, insira um email válido.');
      return false;
    }
  
    if (!passwordRegex.test(passwordInput.value)) {
      alert('A senha deve ter pelo menos 8 caracteres e conter uma letra maiúscula, uma letra minúscula, um número e um caractere especial.');
      return false;
    }
  
    if (passwordInput.value !== passwordRepeatInput.value) {
      alert('As senhas digitadas não coincidem.');
      return false;
    }
  
    return true;
  }
  
  // Event listeners para os formulários
  const loginForm = document.querySelector('#login-in');
  const registerForm = document.querySelector('#login-up');
  
  loginForm.addEventListener('submit', function (event) {
    if (!validateLoginForm()) {
      event.preventDefault();
    }
  });
  
  registerForm.addEventListener('submit', function (event) {
    if (!validateRegisterForm()) {
      event.preventDefault();
    }
  });

