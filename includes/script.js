
alert("Sistema de registro en proceso, por favor no realizar carga de datos")

/*const boton=document.getElementById('boton')

boton.addEventListener('click', () => {
    console.log('CLICK')
    /*swal("Sistema de registro y control de asistencia en proceso")
    alert("Sistema de registro y control de asistencia en proceso")
    
}) */
/* FILTRADO BUSCADOR*/
const buscarF =[
    {palabra: 'Electricidad'},
    {palabra: 'Programacion'},
    {palabra: 'Directora'},
    {palabra: 'Telefono'},
    {palabra: 'Direccion'},
]


const buscar= document.querySelector('#inputSearch');
const boton = document.querySelector('#bSearch');

const filtrar =()=>{
    //console.log(buscar.value);
    const texto = buscar.value.toLowerCase();
    for (let  buscarF of buscarFs) {
        let palabra = buscarF.palabra.toLowerCase();
        if(palabra.indexOf(palabra) !== -1){
            
        }
    }
}
boton.addEventListener('click', filtrar);
