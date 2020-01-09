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
const MAX_CHARS = 255;
document.addEventListener('readystatechange', e => {
    if ('complete' === document.readyState) {
        const comentarios = document.querySelectorAll('.js-comentario');
        if (comentarios) {
            comentarios.forEach(comentario => {
                const reportLink = comentario.querySelector('.report-link');
                if (reportLink) {
                    reportLink.addEventListener('click', event => {
                        event.preventDefault();
                        console.log("Hola Reporte");
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
                const deleteLink = comentario.querySelector('.delete-link');
                if (deleteLink) {
                    console.log("Hola delete");
                    deleteLink.addEventListener('click', event => {
                        event.preventDefault();
                        axios.delete(event.target.href, {
                            '_token': csrf_token
                        }).then(res => {
                            const alerta = crearAlerta(res.data.status, res.data.message);
                            if ('success' === res.data.status) {
                                comentario.remove();
                            }
                            document.body.appendChild(alerta);
                        })
                    })
                }
            });
        }
        const cuenta = document.getElementById('char-count');
        /** @var HTMLTextAreaElement comentario */
        const comentario = document.getElementById('comentario');
        if (cuenta && comentario) {
            comentario.addEventListener('input', e => {
                cuenta.innerHTML = comentario.textLength;
                if (comentario.textLength === MAX_CHARS)
                    cuenta.parentElement.classList.add('text-danger');
                else
                    cuenta.parentElement.classList.remove('text-danger');
            });
        }
    }
});
