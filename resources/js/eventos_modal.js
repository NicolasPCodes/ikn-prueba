document.querySelectorAll('.btn-detalle').forEach(boton => {
    boton.addEventListener('click', function () {
        const idEvento = this.getAttribute('data-id');
        console.log('ID del evento:', idEvento);
        // let url = "<?php echo base_url('api/evento/'); ?>" + idEvento;
        // const BASE_URL = window.location.origin + window.location.pathname;
        const BASE_URL = window.location.origin;

        // console.log('URL de la API:', url);
        console.log('URL base:', BASE_URL + "/detalle-cinturon/" + idEvento,);
        // Consulta a api para obtener detalles del evento
        fetch(BASE_URL + "/detalle-cinturon/" + idEvento, {
            method: 'GET'
        })
            .then(response => response.json())
            .then(data => {
                console.log('Detalles del evento:', data);
                // Titulo modal
                document.querySelector("#modalDetalle .modal-header .modal-title").innerHTML = data.nombre_cinturon;
                // Primera parte modal - cabecera
                document.querySelector("#modalDetalle .modal-body .grado-cinturon").innerHTML = data.nivel_grado;
                document.querySelector("#modalDetalle .modal-body .tiempo-permanencia").innerHTML = `Tiempo de permanencia: ${data.tiempo_permanencia}`;
                // Segunda parte modal - temario tecnico
                let temarioTecnicoHTML = '';
                let contenidoTemarioTecnico = JSON.parse(data.contenido_tecnico);
                contenidoTemarioTecnico.forEach(tecnica => {
                    temarioTecnicoHTML += `<li>${tecnica}</li>`;
                });
                document.querySelector("#modalDetalle .modal-body .temario-tecnico").innerHTML = `<ul>${temarioTecnicoHTML}</ul>`;
                let criteriosEvaluacionHTML = '';
                let contenidoCriteriosEvaluacion = JSON.parse(data.criterios_evaluacion);
                contenidoCriteriosEvaluacion.forEach(criterio => {
                    criteriosEvaluacionHTML += `<li>${criterio}</li>`;
                });
                document.querySelector("#modalDetalle .modal-body .criterios-evaluacion").innerHTML = `<ul>${criteriosEvaluacionHTML}</ul>`;
                // Tercera parte modal - fundamentos teóricos
                let contenidosTeoricosHTML = '';
                let contenidoFundamentosTeoricos = JSON.parse(data.contenidos_exigidos);
                contenidoFundamentosTeoricos.forEach(fundamento => {
                    contenidosTeoricosHTML += `<li>${fundamento}</li>`;
                });
                document.querySelector("#modalDetalle .modal-body .contenidos").innerHTML = `<ul>${contenidosTeoricosHTML}</ul>`;
                let evaluacionHTML = '';
                let contenidoEvaluacion = JSON.parse(data.evaluacion_exigido);
                contenidoEvaluacion.forEach(evaluacion => {
                    evaluacionHTML += `<li>${evaluacion}</li>`;
                });
                document.querySelector("#modalDetalle .modal-body .evaluacion").innerHTML = `<ul>${evaluacionHTML}</ul>`;
                // Cuarta parte modal - fundamentos fisicos
                let fundamentosFisicosHTML = '';
                let contenidoFundamentosFisicos = JSON.parse(data.contenidos_fisicos_requeridos);
                contenidoFundamentosFisicos.forEach(fundamento => {
                    fundamentosFisicosHTML += `<li>${fundamento}</li>`;
                });
                document.querySelector("#modalDetalle .modal-body .contenidos-fisicos").innerHTML = `<ul>${fundamentosFisicosHTML}</ul>`;
                let evaluacionFisicaHTML = '';
                let contenidoEvaluacionFisica = JSON.parse(data.evaluacion_requerido);
                contenidoEvaluacionFisica.forEach(evaluacion => {
                    evaluacionFisicaHTML += `<li>${evaluacion}</li>`;
                });
                document.querySelector("#modalDetalle .modal-body .evaluacion-fisicos").innerHTML = `<ul>${evaluacionFisicaHTML}</ul>`;
            })
            .catch(error => {
                console.error('Error al obtener los detalles del evento:', error);
            });

    })
});