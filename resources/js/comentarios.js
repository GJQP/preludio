const crearAlerta = (context, message) => {
    const alert = document.createElement('div');
    alert.classList.add('alert', `alert-${context}`, 'position-fixed');
    alert.style.top = '10px';
    alert.style.left = '50%';
    alert.style.transform = 'translateX(-50%)';
    alert.innerHTML = message;
    setTimeout(() => alert.remove(), 2500);

    return alert;
};
document.addEventListener('readystatechange', e => {
    if ('complete' === document.readyState) {
        const comentarios = document.querySelectorAll('.js-comentario');
        if (comentarios) {
            comentarios.forEach(comentario => {
                const reportLink = comentario.querySelector('.report-link');
                if (reportLink) {
                    reportLink.addEventListener('click', event => {
                        event.preventDefault();
                        axios.post(event.target.href, {
                            '_token': csrf_token
                        })
                            .then(res => {
                                const alert = crearAlerta('success', res.data);
                                document.body.appendChild(alert);
                            })
                            .catch(res => {
                                const alert = crearAlerta('danger', res.data);
                                document.body.appendChild(alert);
                            });
                    });
                }

            });
        }
    }
});
