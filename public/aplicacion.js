console.log("hello word");
console.log("Hola a todos");
const botones= document.querySelector('#botones');

const nombreUsuario= document.querySelector('#nombreUsuario');
const formulario = document.querySelector('#formulario');
const inputchat = document.querySelector('#inputchat');
const contenidoProtegido = document.querySelector('#contenidoProtegido');
const botonenviar = document.querySelector('#botonenviar');
formulario.classList='container'
//botonenviar.addEventListener('click',()=>{console.log('Me diste click, si ves este mensaje vamos bien')});

firebase.auth().onAuthStateChanged((user)=>{
    
    var user_ = JSON.parse($('meta[name="auth-check"]').attr('content'));

    if(typeof user_ !== 'undefined' || user_ !== null){
        botones.innerHTML= /*html*/`   <button class="btn btn-outline-danger d-none" id='btnCerrarSesion'>Cerrar Sesión</button>`
        //nombreUsuario.innerHTML=user_.email;
        cerrarSesion();
        contenidoChat(user_)
    }
    else {
        console.log('no existe user');
        botones.innerHTML= /*html*/`<button class="btn btn-outline-success mr-2" id='btnAcceder'>Acceder</button>`
        iniciarSesion();
        nombreUsuario.innerHTML='Chat';
        //formulario.classList='input-group bg-dark py-3 fixed-bottom container d-none'
    }
});
const contenidoChat = (user)=>{
    console.log('entramos al chat')
    
    formulario.addEventListener('submit', (e)=>{
        e.preventDefault()
        console.log(inputchat.value)
        
        if(!inputchat.value.trim())
        {
            console.log('input vacio')
            return
        }
        
        firebase.firestore().collection('chat').add(
            {   texto: inputchat.value,
                //uid: user.uid,
                name:user.name,
                fecha: Date.now()})
                .then(res=> {console.log('mensaje guardado')})
                .catch(e=> console.log(e))

                inputchat.value='';
    })
    firebase.firestore().collection('chat').orderBy('fecha')
    .onSnapshot(query=>{
       // console.log(query)
       contenidoProtegido.innerHTML=''
        query.forEach(doc=>{//console.log(doc.data())
        //if(doc.data().uid===user.uid)
        //{
            contenidoProtegido.innerHTML +=`
            <div class="d-flex justify-content-end">
                <span class="container" style="color:black">
                  <b>${doc.data().name}:</b> ${doc.data().texto}
                </span>
            </div>`
       // }
        /*else{
            contenidoProtegido.innerHTML +=`
            <div class="d-flex justify-content-start">
                <span class="badge badge-primary" style="color:black">
                    ${doc.data().texto}
                </span>
            </div>`
        }*/
        contenidoProtegido.scrollTop = contenidoProtegido.scrollHeight
        })
    })
}
const cerrarSesion= ()=>{
    const btnCerrarSesion = document.querySelector('#btnCerrarSesion');
    btnCerrarSesion.addEventListener('click', ()=>{firebase.auth().signOut()})
}

const iniciarSesion=()=>{

    const btnAcceder= document.querySelector('#btnAcceder');
    btnAcceder.addEventListener('click',async()=>{
        //console.log('me diste click')
        try{
            const provider= new firebase.auth.GoogleAuthProvider();
            await firebase.auth().signInWithPopup(provider)
        }catch(error){
            console.log(error)
        }

    })

}