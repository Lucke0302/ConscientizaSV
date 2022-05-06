cancelar = document.getElementById('cancelar');
cancelar.addEventListener('click', function(){
    window.location.href = document.referrer;
});