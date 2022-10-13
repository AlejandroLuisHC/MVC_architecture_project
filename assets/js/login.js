const 
    loginForm = document.getElementById('loginForm'),
    logoutInfo = document.getElementById('logoutInfo'),
    loginAlert = document.getElementById('loginAlert');

window.onload = clearLogInfo();

loginForm.addEventListener('submit', e => {
    e.preventDefault();
    logoutInfo.style.display = 'none';

    loginData = new FormData(loginForm);
    fetch('index.php?C=Login', {
        method: 'POST',
        body: loginData,
    })
        .then(res => res.json())
        .then(data => {
            if (data === "OK") {
                location.replace("index.php");
            } else {
                let errMsg = document.createElement('span');
                errMsg.className = 'alert alert-danger';
                errMsg.textContent = data;
                while(loginAlert.hasChildNodes()){
                    loginAlert.removeChild(loginAlert.firstChild);
                };
                loginAlert.appendChild(errMsg);
            }
        })
})

function clearLogInfo() {
    setTimeout(() => {
        logoutInfo.style.visibility  = 'hidden';
    }, 5 * 1000);
}