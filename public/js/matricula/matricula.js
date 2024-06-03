

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
            document.getElementById('idMatricula').value = e.target.value;
            document.getElementById('evaluacionDiv').classList.remove('d-none');
            document.getElementById('matricula').classList.add('d-none');
        })
    });
}
