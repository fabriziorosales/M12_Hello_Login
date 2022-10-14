// Comprobamos que la pagina ha cargado totalmente
window.addEventListener('load', () => {

    usr = 0, em = 0, pass = 0, con = 0;
    var bloquearBoton = document.getElementById('submit');

    function insertDespues(e, i) {
        if (e.nextSibling) {
            e.parentNode.insertBefore(i, e.nextSibling);
        } else {
            e.parentNode.appendChild(i);
        }
    }

    // if (document.getElementsByClassName('username')[0]) {
    //     var usernameJav = document.getElementsByClassName('username')[0];
    //     var campoUsername = usernameJav.parentNode;
    //     usernameJav.addEventListener('keyup', () => {
    //         let expUser = /^(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;

    //         if (expUser.test(usernameJav.value)) {
    //             // Entrada correcta
    //             campoUsername.getElementsByClassName('error')[0].remove();
    //             bloquearBoton.disabled = false;
    //             usr = 1;
    //         } else {
    //             // Entrada incorrecta

    //             let parentErr = document.createElement('span');
    //             parentErr.classList.add('error');
    //             if (usernameJav.value == '') {
    //                 if (!campoUsername.getElementsByClassName('error')[0]) {
    //                     // parentErr.classList.add('error');
    //                     parentErr.appendChild(document.createTextNode('El campo username esta vacio'));
    //                     insertDespues(usernameJav, parentErr);
    //                 } else {
    //                     campoUsername.getElementsByClassName('error')[0].remove();
    //                     // parentErr.classList.add('error');
    //                     parentErr.appendChild(document.createTextNode('El campo username esta vacio'));
    //                     insertDespues(usernameJav, parentErr);
    //                 }
    //             } else {
    //                 if (!campoUsername.getElementsByClassName('error')[0]) {
    //                     // parentErr.classList.add('error');
    //                     parentErr.appendChild(document.createTextNode('El username no es correcto'));
    //                     insertDespues(usernameJav, parentErr);
    //                 } else {
    //                     campoUsername.getElementsByClassName('error')[0].remove();
    //                     // parentErr.classList.add('error');
    //                     parentErr.appendChild(document.createTextNode('El username no es correcto'));
    //                     insertDespues(usernameJav, parentErr);
    //                 }
    //             }

    //         }
    //     });
    // }

    var emailJav = document.getElementsByClassName('email')[0];
    var campoEmail = emailJav.parentNode;

    emailJav.addEventListener('keyup', () => {
        let expEmail = /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/;
        if (expEmail.test(emailJav.value)) {
            // Entrada correcta
            if (campoEmail.getElementsByClassName('error')[0]) {
                campoEmail.getElementsByClassName('error')[0].remove();
            }
            bloquearBoton.disabled = false;
            em = 1;
        } else {
            // Entrada incorrecta
            let parentErr = document.createElement('span');
            parentErr.classList.add('error');
            if (emailJav.value == '') {
                if (!campoEmail.getElementsByClassName('error')[0]) {
                    // parentErr.classList.add('error');
                    parentErr.appendChild(document.createTextNode('El campo email esta vacio'));
                    insertDespues(emailJav, parentErr);
                } else {
                    campoEmail.getElementsByClassName('error')[0].remove();
                    // parentErr.classList.add('error');
                    parentErr.appendChild(document.createTextNode('El campo email esta vacio'));
                    insertDespues(emailJav, parentErr);
                }
            } else {
                if (!campoEmail.getElementsByClassName('error')[0]) {
                    // parentErr.classList.add('error');
                    parentErr.appendChild(document.createTextNode('El email no es correcto'));
                    insertDespues(emailJav, parentErr);
                } else {
                    campoEmail.getElementsByClassName('error')[0].remove();
                    // parentErr.classList.add('error');
                    parentErr.appendChild(document.createTextNode('El email no es correcto'));
                    insertDespues(emailJav, parentErr);
                }
            }
        }
    });


    // CONTRASEÑA
    var passJav = document.getElementsByClassName('password')[0];
    var campoPass = passJav.parentNode;
    passJav.addEventListener('keyup', () => {
        let expPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,30}/;
        let parentErr = document.createElement('span');
        parentErr.classList.add('error');
        if (expPass.test(passJav.value)) {
            // Entrada correcta
            if (campoPass.getElementsByClassName('error')[0]) {
                campoPass.getElementsByClassName('error')[0].remove();
            }
            bloquearBoton.disabled = false;
            pass = 1;
            if (con == 1) {
                con = 0;
            }
        } else {
            // Entrada incorrecta
            if (passJav.value == '') {
                if (!campoPass.getElementsByClassName('error')[0]) {
                    parentErr.appendChild(document.createTextNode('El campo "contraseña" esta vacia'));
                    insertDespues(passJav, parentErr);
                } else {
                    campoPass.getElementsByClassName('error')[0].remove();
                    parentErr.appendChild(document.createTextNode('El campo "contraseña" esta vacia'));
                    insertDespues(passJav, parentErr);
                }
            } else {
                if (!campoPass.getElementsByClassName('error')[0]) {
                    // parentErr.classList.add('error');
                    parentErr.appendChild(document.createTextNode('La contraseña es incorrecta'));
                    insertDespues(passJav, parentErr);
                } else {
                    campoPass.getElementsByClassName('error')[0].remove();
                    parentErr.appendChild(document.createTextNode('La contraseña es incorrecta'));
                    insertDespues(passJav, parentErr);
                }
            }

        }
    });


    // CONFIRMAR CONTRASEÑA
    if (document.getElementsByClassName('password_con')[0]) {
        var passwordConJav = document.getElementsByClassName('password_con')[0];
        var campoPasswordCon = passwordConJav.parentNode;

        passwordConJav.addEventListener('keyup', () => {

            let parentErr = document.createElement('span');
            parentErr.classList.add('error');
            if (passwordConJav.value == '') {
                if (!campoPasswordCon.getElementsByClassName('error')[0]) {
                    // parentErr.classList.add('error');
                    parentErr.appendChild(document.createTextNode('El campo "confirmar contraseña" esta vacio'));
                    insertDespues(passwordConJav, parentErr);
                } else {
                    campoPasswordCon.getElementsByClassName('error')[0].remove();
                    // parentErr.classList.add('error');
                    parentErr.appendChild(document.createTextNode('El campo "confirmar contraseña" esta vacio'));
                    insertDespues(passwordConJav, parentErr);
                }
            } else {
                if (passJav.value == passwordConJav.value) {
                    // Entrada correcta
                    campoPasswordCon.getElementsByClassName('error')[0].remove();
                    bloquearBoton.disabled = false;
                    con = 1;
                } else {
                    // Entrada incorrecta
                    if (!campoPasswordCon.getElementsByClassName('error')[0]) {
                        // alert("Password: " + passJav.value + " | Confirm Password: " + passwordConJav.value);
                        // parentErr.classList.add('error');
                        parentErr.appendChild(document.createTextNode('Las contraseñas no coinciden'));
                        insertDespues(passwordConJav, parentErr);
                    } else {
                        campoPasswordCon.getElementsByClassName('error')[0].remove();
                        // parentErr.classList.add('error');s
                        parentErr.appendChild(document.createTextNode('Las contraseñas no coinciden'));
                        insertDespues(passwordConJav, parentErr);
                    }
                }
            }

        });
    }

    // Hover en el submit para verificar si se cumplen las condiciones.

    if (document.getElementsByClassName('password_con')[0]) {

        bloquearBoton.addEventListener('mouseover', () => {
            if (em == 1 && pass == 1 && con == 1) {
                bloquearBoton.disabled = false;
            } else {
                bloquearBoton.disabled = true;
            }
        });
        bloquearBoton.addEventListener('focus', () => {
            if (em == 1 && pass == 1 && con == 1) {
                bloquearBoton.disabled = false;
            } else {
                bloquearBoton.disabled = true;
            }
        });
    } else {
        bloquearBoton.addEventListener('mouseover', () => {
            if (em == 1 && pass == 1) {
                bloquearBoton.disabled = false;
            } else {
                bloquearBoton.disabled = true;
            }
        });
    }

})