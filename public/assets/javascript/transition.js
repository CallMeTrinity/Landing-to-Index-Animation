window.onload = () => {

    const logo = document.querySelector('.logoLanding');


    logo.addEventListener('click', e => {
        e.preventDefault();
        logo.classList.add('animate');

            setTimeout(() => {
                window.location.href = "/index.php";
            }, 2000);
    });
}
