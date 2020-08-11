
function addUser(){

    var firstname = $('#firstnameUser').val()
    var  lastname = $('#lastnameUser').val()
    var email = $('#emailUser').val()
    var  phone = $('#phoneUser').val()
    var  password = $('#passwordUser').val()


    if (firstname == "" || lastname == "" || email == "" || phone == "" || password == ""  ){
    emptyInputs()
    }
    else{
        ShowLoading($('#addUser'))
        document.getElementById("addUser").disabled = true;
        $.ajax({
            url: "/user-add",
            data : {
                first_name : firstname,
                last_name : lastname,
                email  : email,
                phone_number : phone,
                password  : password,
            },
            type:"post",
            success:function(msg){
                document.getElementById("addUser").disabled = false;
                HideLoading()
                if (msg == "true"){
                    document.getElementById("firstnameUser").value = "";
                    document.getElementById("lastnameUser").value = "";
                    document.getElementById("emailUser").value = "";
                    document.getElementById("phoneUser").value = "";
                    document.getElementById("passwordUser").value = "";

                    successAddToast('Administrateur')
                    $('#usertable').load(document.URL + '#body  tr')
                    $('#closeUser').click()
                }
                if (msg == 'exist'){

                } else if (msg == 'phone'){
                    $.toast({
                        heading: 'Erreur',
                        text: "Numéro de téléphone déjà utilisé",
                        position: 'top-right',
                        icon: 'error',
                        stack: false
                    });
                }
                else if (msg == 'email'){
                    $.toast({
                        heading: 'Erreur',
                        text: "Email déjà utilisé",
                        position: 'top-right',
                        icon: 'error',
                        stack: false
                    });
                }
                else if (msg == 'false') {
                    HideLoading()
                    internalerrormessage()
                }
            },
            error:function() {
                HideLoading()
                document.getElementById("addUser").disabled = false;
                internalerrormessage()
            }
        })
    }

}

function editUser(){

    var firstname = $('#firstname').val()
    var  lastname = $('#lastname').val()
    var email = $('#email').val()
    var  phone = $('#phone').val()
    var  id = $('#Userid').val()


    if (firstname == "" || lastname == "" || email == "" || phone == ""){
    emptyInputs()
        alert('1')
    }
    else{
        ShowLoading($('#editUser'))
        document.getElementById("editUser").disabled = true;
        $.ajax({
            url: "/user-edit",
            data : {
                first_name : firstname,
                last_name : lastname,
                email  : email,
                phone_number : phone,
                id : id,
            },
            type:"post",
            success:function(msg){
                document.getElementById("editUser").disabled = false;
                HideLoading()
                if (msg == "true"){
                    document.getElementById("firstnameUser").value = "";
                    document.getElementById("lastnameUser").value = "";
                    document.getElementById("emailUser").value = "";
                    document.getElementById("phoneUser").value = "";
                    document.getElementById("passwordUser").value = "";

                    successUpdateToast('Administrateur')
                    $('#usertable').load(document.URL + '#body  tr')
                    $('#closeUser').click()
                    $('#passwordUser').show()
                }

                else if (msg == 'false') {
                    HideLoading()
                    internalerrormessage()
                }
            },
            error:function() {
                HideLoading()
                document.getElementById("editUser").disabled = false;
                internalerrormessage()
            }
        })
    }

}

function actionUser(id,type){
    let text
    let warning
    let confbtn
    let url = "/users/action"
    let successmessage

    if (type == 1){
        warning = "success"
        text = "Activer  Utilisateur !"
        confbtn = "Validé"
        successmessage = "Utilisateur activé avec succes"
    }

    if (type == 2){
        warning = "warning"
        text = "Désactiver Utilisateur"
        confbtn = "Validé"
        successmessage = "Utilisateur désactivé avec succes"

    }

    if (type == 3){
        warning = "warning"
        text = "Cette action est iréversible!"
        confbtn = "Supprimer"
        successmessage = "Utilisateur supprimer avec succes"

    }

    Swal.fire({
        title:"Êtes vous sûre?",
        text:text,
        type:warning,
        showCancelButton:!0,
        confirmButtonText:confbtn,
        cancelButtonText:"Annuler",
        confirmButtonClass:"btn btn-success mt-2",
        cancelButtonClass:"btn btn-danger ml-2 mt-2",
        buttonsStyling:!1
    }).then(function(t){
        t.value?$.ajax({
            url: url+"/"+id+"/"+type,
            type:"get",
            success:function(msg){
                if (msg == "true"){
                    Swal.fire({
                        title:"Fait",
                        text: successmessage,
                        type:"success"
                    })
                    $('#usertable').load(document.URL + '#body  tr')
                }
                else{
                    Swal.fire({
                        title:"Annulé",
                        text:"Une erreur interne s'est produite",
                        type:"error"})
                }
            },
            error:function() {
                Swal.fire({
                    title:"Annulé",
                    text:"Une erreur s'est produite",
                    type:"error"})
            }
        }):t.dismiss===Swal.DismissReason.cancel&&Swal.fire(
            {title:"Annulé",text:"Action non effectué",type:"error"})
    })
}

function editUsers(lastname,firstname,email,phone,id){
    document.getElementById("firstname").value = firstname;
    document.getElementById("lastname").value = lastname;
    document.getElementById("email").value = email;
    document.getElementById("phone").value = phone;

    document.getElementById("Userid").value = id;


    $('#usereditModal').modal()
}
