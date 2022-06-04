/*
  Estudiante: Jennifer Elizabeth Quizhpe
  Ciclo: Quinto "A"
*/
console.log('correcto');

document.querySelector('#boton').addEventListener('click', traerDatos);

function traerDatos(){
    console.log('dentro de la funcion');

    const xhttp = new XMLHttpRequest();

    xhttp.open('GET', 'horario.json', true);

    xhttp.send();

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
           // console.log(this.responseText);
            let datos = JSON.parse(this.responseText);
            //console.log(datos);
            let res =  document.querySelector('#res');
            res.innerHTML='';

            for(let item of datos){
               // console.log(item);
               res.innerHTML += `
               <tr> 
                <td>${item.hora}</td>
                <td>${item.lunes}</td>
                <td>${item.martes}</td>
                <td>${item.miercoles}</td>
                <td>${item.jueves}</td>
                <td>${item.viernes}</td>
                <td>${item.sabado}</td>
                <td>${item.domingo}</td>
                </tr>
               `
            }
        }
    }
};