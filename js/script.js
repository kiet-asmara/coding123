const toggleButton = document.getElementById('menu-button')[0];
const navLinks = document.getElementById('nav-links');
toggleButton.addEventListener('click', function () {
    for (var i = 0; i < navLinks.length; i++)
        navLinks[i].classList.toggle('active');
})