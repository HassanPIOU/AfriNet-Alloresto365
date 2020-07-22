(function () {
    const form = document.getElementById('forfaitCreateForm')
    form.addEventListener("submit", async function (e) {
        e.preventDefault();
        const data = new FormData(form);
        const url = form.getAttribute("action");
        const token = document.querySelector('meta[name="csrf-token"]').content
        let response = await fetch(url, {
            method: "POST",
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": token,
            },
            body: data,
        });
        let responseData = await response.json();

        if (response.ok) {
            successAddToast("Forfait")
            clearInputsValue(form)
            window.location.href = document.URL
        } else {
            if (response.status === 422) {
                inputErrors(form, responseData.errors);
            }
        }
    });

    const forms = document.querySelectorAll(".forfaitEditForm");
    forms.forEach(form => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault()
            const data = new FormData(form);
            const url = form.getAttribute("action");
            const token = document.querySelector('meta[name="csrf-token"]')
                .content;
            let response = await fetch(url, {
                method: "POST",
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token,
                },
                body: data,
            });
            let responseData = await response.json();
            if (response.ok) {
                $.toast({
                    heading: "Info",
                    text: responseData.msg,
                    position: "top-right",
                    icon: "info",
                    stack: false,
                });
                clearInputsValue(form);
                window.location.href = document.URL;
            } else {
                if (response.status === 422) {
                    inputErrors(form, responseData.errors);
                }
            }
        })
    })

    const trashBtn = document.querySelectorAll('.trash-package')
    trashBtn.forEach(btn => {
        btn.addEventListener('click', async (e) => {
            e.preventDefault()
            const url = btn.getAttribute('action-url')
            const userResponse = await Swal.fire({
                title: "Êtes vous sûre?",
                text: "Vous voulez vous mettre à la corbeille cet forfait ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Supprimer",
                cancelButtonText: "Annuler",
                confirmButtonClass: "btn btn-success mt-2",
                cancelButtonClass: "btn btn-danger ml-2 mt-2",
                buttonsStyling: false,
            })
            if (userResponse.value === true) {
                const response = await fetch(url, {
                    headers: {
                        "X-Requested-With": "XMLHttpRequest",
                    },
                });

                if (response.ok) {
                    $.toast({
                        heading: "Info",
                        text: "Fordfait mis à la corbeille",
                        position: "top-right",
                        icon: "info",
                        stack: false,
                    });
                    const tr = btn.parentNode.parentNode
                    tr.remove()
                } else {
                    if (response.status === 422) {
                        inputErrors(form, responseData.errors);
                    }
                }
            }

        })
    })
})();


function actionSubscription(id,type){
    let text
    let warning
    let confbtn
    let url = "/actionsub"
    let successmessage

    if (type == 1){
        warning = "success"
        text = "Activer la Souscription!"
        confbtn = "Validé"
        successmessage = "Souscription activé avec succes"
    }

    if (type == 2){
        warning = "warning"
        text = "Désactiver la Souscription"
        confbtn = "Validé"
        successmessage = "Souscription désactivé avec succes"

    }

    if (type == 3){
        warning = "warning"
        text = "Cette action est iréversible!"
        confbtn = "Supprimer"
        successmessage = "Souscription supprimer avec succes"

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
                    $('#subscriptiontable').load(document.URL + '#body  tr')
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

function addSubscription(){
    let customer = $('#customer').val()
    let forfait = $('#forfait').val()
    let duration = $('#duration').val()

    if (customer == null || forfait == null || duration == null){
      emptyInputs()
    }else{
        document.getElementById('addSubscription').disabled = true
        ShowLoading($('#addSubscription'))
        $.ajax({
            url: '/subscription-add',
            data : {
                customer_id : customer,
                package_id : forfait,
                duration : duration,
            },
            type:"post",
            success:function(msg){
                HideLoading()
                document.getElementById("addSubscription").disabled = false;
                if (msg == "true"){
                        document.getElementById("customer").value = "";
                        document.getElementById("forfait").value = "";
                        document.getElementById("duration").value = "";
                        successAddToast("Souscription")
                        $('#subscriptiontable').load(document.URL + '#body  tr')
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


function startSub(id){
   var  type = 1
    let text
    let warning
    let confbtn
    let successmessage

    if (type == 1){
        warning = "success"
        text = " activé la souscription ?"
        confbtn = "Validé"
        successmessage = "Souscription activé avec succes"
    }

    if (type == 3){
        warning = "warning"
        text = "Cette action est iréversible!"
        confbtn = "Supprimer"
        successmessage = "Souscription supprimer avec succes"

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
            url: "/souscription-valide-"+id,
            type:"get",
            success:function(msg){
                if (msg == "true"){
                    Swal.fire({
                        title:"Fait",
                        text: successmessage,
                        type:"success"
                    })
                    $('#subscriptiontable').load(document.URL + '#body  tr')
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

