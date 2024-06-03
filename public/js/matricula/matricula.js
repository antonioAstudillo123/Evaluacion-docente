

window.onload = main;

function main()
{

    document.getElementById('spinnerDiv').classList.add('d-none');
    document.getElementById('matricula').classList.remove('d-none');

    eventos();

}


function eventos()
{

    let buttons = document.querySelectorAll('button[type="submit"]');

    buttons.forEach(element => {
        element.addEventListener('click' , function(e){
            e.preventDefault();

            //Obtenemos la informacion tanto del profesor como de la materia que se va a calificar
            let nombreProfesor = document.getElementById('nombre_'+e.target.value);
            let materia = document.getElementById('materia_'+e.target.value);

            //Mostramos en el formulario la información de la materia y profesor
            document.getElementById('textMateriaP').textContent = materia.textContent;
            document.getElementById('textDocenteP').textContent = nombreProfesor.textContent;

            //Reseteamos el formulario cada vez que lo dibujamos en el DOM
            document.getElementById('idFormEvaluacion').reset();
            document.getElementById('idMatricula').value = e.target.value;
            document.getElementById('evaluacionDiv').classList.remove('d-none');
            document.getElementById('matricula').classList.add('d-none');
        })
    });
}
