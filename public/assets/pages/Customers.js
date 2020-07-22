
function addCustomer(v){

    var customerId = $('#customerId').val()

    var type = $('#type').val()
    var  firstname = $('#firstname').val()
    var lastname = $('#lastname').val()
    var company = $('#company_name').val()
    var  telephone = $('#tel').val()
    var  email = $('#email').val()
    var  ville = $('#city').val()
    var  pays = $('#country').val()
    var  adresse = $('#address').val()
    var  password = $('#password').val()


    var error = false

    if (type != null){
      if (type == 1){
          if (firstname == "" || lastname == "" || email == "" || telephone == ""  || ville == "" || pays == "" || adresse == "" || password ==""){
              error = true
          }
      }else{
          if (company == ""  || email == "" || telephone == ""  || ville == "" || pays == "" || adresse == "" || password ==""){
              error = true
          }
      }
    }else{
        error = true
    }


    if (error){
        emptyInputs()
    }
    else{
        var url = ""
        if (customerId != ""){
          url =   "/customer/edit"
        }else{
            "/customer/add"
        }

        ShowLoading($('#addcustomers'))
        document.getElementById("addcustomers").disabled = true;
        $.ajax({
            url: url,
            data : {
                type : type,
                first_name : firstname,
                last_name : lastname,
                company_name : company,
                email  : email,
                phone_number : telephone,
                city  : ville,
                country : pays,
                addresse : adresse,
                password : password,
                id : customerId
            },
            type:"post",
            success:function(msg){
                HideLoading()
                document.getElementById("addcustomers").disabled = false;
                if (msg == "true"){
                    if (customerId != ""){
                        successUpdateToast("Client")
                    }else{
                        document.getElementById("type").value = "";
                        document.getElementById("firstname").value = "";
                        document.getElementById("lastname").value = "";
                        document.getElementById("company_name").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("tel").value = "";
                        document.getElementById("city").value = "";
                        document.getElementById("country").value = "";
                        document.getElementById("adresse").value = "";
                        document.getElementById("password").value = "";
                         successAddToast("Client")
                        $('#customertable').load(document.URL + '#body  tr')
                    }

                }
              else  if (msg == 'exist') {
                    $.toast({
                        heading: 'Erreur',
                        text: 'Ce client existe dejà',
                        position: 'top-right',
                        icon: 'error',
                        stack: false
                    });
                }
                  else if (msg == 'phone') {
                        $.toast({
                            heading: 'Erreur',
                            text: 'Ce Numéro de téléphone est déjà utilisé',
                            position: 'top-right',
                            icon: 'error',
                            stack: false
                        });
                    }

              else  if (msg == 'false') {
                internalerrormessage()
                }
            },
            error:function() {
                HideLoading()
                document.getElementById("addcustomers").disabled = false;
                internalerrormessage()

            }
        })
    }

}

function actionCustomer(id,type){
    let text
    let warning
    let confbtn
    let url = "/customer/action"
    let successmessage

    if (type == 1){
        warning = "success"
        text = "Activer le Client!"
        confbtn = "Validé"
        successmessage = "Client activé avec succes"
    }

    if (type == 2){
        warning = "warning"
        text = "Désactiver Client"
        confbtn = "Validé"
        successmessage = "Client désactivé avec succes"

    }

    if (type == 3){
        warning = "warning"
        text = "Cette action est iréversible!"
        confbtn = "Supprimer"
        successmessage = "Client supprimer avec succes"

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
                    $('#customertable').load(document.URL + '#body  tr')
                }
                else{
                    Swal.fire({
                        title:"Cancelled",
                        text:"Une erreur interne s'est produite",
                        type:"error"})
                }
            },
            error:function() {
                Swal.fire({
                    title:"Cancelled",
                    text:"Une erreur s'est produite",
                    type:"error"})
            }
        }):t.dismiss===Swal.DismissReason.cancel&&Swal.fire(
            {title:"Cancelled",text:"Action non effectué",type:"error"})
    })
}

function typeToggle(value){
    if (parseInt(value) == 2){
        $('#company_name').parent().show('slow').delay(1000)
        $('#firstname').parent().hide('slow').delay(1000)
        $('#lastname').parent().hide('slow').delay(1000)
    }else{
        $('#firstname').parent().show('slow').delay(1000)
        $('#lastname').parent().show('slow').delay(1000)
        $('#company_name').parent().hide('slow').delay(1000)
    }
}


function editCustomer(lastname,firstname,city,country,email,company,phone,adresse,type,id) {
    $('#customerModal').modal()
    console.log(lastname)
    document.getElementById("type").value = type
    $('#company_name').val(company)
    $('#firstname').val(firstname)
    $('#lastname').val(lastname)
    $('#email').val(email)
    $('#tel').val(phone)
    $('#address').val(adresse)
    $('#city').val(city)
    $('#country').val(country)
    $('#password').val(country)
    $('#customerId').val(id)

    if (type == 2){
        typeToggle(2)
    }

    $('#addcustomers').html('Modifier')

}

function Updatecustomer(){
    var structure = $('#structure').val()
    var  denomination = $('#denomination').val()
    var email = $('#email').val()
    var  telephone = $('#telephone').val()
    var  ville = $('#ville').val()
    var  pays = $('#pays').val()
    var  adresse = $('#adresse').val()
    var  site = $('#site').val()
    var  customerId = $('#customerId').val()

    if (structure == "" || denomination == "" || email == "" || telephone == ""  || ville == "" || pays == "" || adresse == "" || site ==""){
     emptyInputs()
    }
    else{

        console.log(customerId)
        ShowLoading($('#updatecustomer'))
        document.getElementById("updatecustomer").disabled = true;
        $.ajax({
            url: "/customer-update",
            data : {
                id : customerId,
                structure : structure,
                denomination : denomination,
                email  : email,
                telephone : telephone,
                ville  : ville,
                pays : pays,
                adresse : adresse,
                site : site
            },
            type:"post",
            success:function(msg){
                HideLoading()
                if (msg == "true"){
                    document.getElementById("updatecustomer").disabled = false;
                    document.getElementById("structure").value = "";
                    document.getElementById("denomination").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("telephone").value = "";
                    document.getElementById("ville").value = "";
                    document.getElementById("pays").value = "";
                    document.getElementById("adresse").value = "";
                    document.getElementById("site").value = "";

                      successUpdateToast('Client')
                    $('#customertable').load(document.URL + '#body  tr')
                    $('#addcustomer_dismiss').click()
                }
                else if (msg == 'false') {
                    HideLoading()
                    document.getElementById("updatecustomer").disabled = false;
                  internalerrormessage()
                }
            },
            error:function() {
                HideLoading()
                document.getElementById("updatecustomer").disabled = false;
           internalerrormessage()
            }
        })
    }
}
