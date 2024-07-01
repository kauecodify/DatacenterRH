function handleButtonClick(destination) {
    document.getElementById('loader').style.display = 'flex';
    setTimeout(() => {
        window.location.href = destination;
        document.getElementById('loader').style.display = 'none';
    }, 5000);
}

document.querySelector('.dashboard-button').addEventListener('click', function() {
    var usernameInput = document.getElementById('username').value.trim();
    if (usernameInput.toLowerCase() === 'admin') {
        handleButtonClick('dashboard.html');
    } else {
        alert('Usuário não autorizado.');
    }
});