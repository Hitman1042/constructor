document.querySelectorAll('.sidebar button').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.sidebar').classList.toggle('collapsed');
    });
});