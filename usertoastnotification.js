function showToast(message, type) {
    // Create toast element
    var toast = document.createElement('div');
    toast.className = 'toast ' + type;
    toast.textContent = message;
  
    // Append toast to container
    var container = document.getElementById('toast-container');
    container.appendChild(toast);
  
    // Show toast
    setTimeout(function() {
      toast.classList.add('show');
    }, 100);
  
    // Hide toast after 3 seconds
    setTimeout(function() {
      toast.classList.remove('show');
      setTimeout(function() {
        container.removeChild(toast);
      }, 300);
    }, 3000);
  }
  