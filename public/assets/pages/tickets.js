(function () {
    const form = document.getElementById("newTicketForm");
    if (form) {
        form.addEventListener("submit", async function (e) {
            e.preventDefault();
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
                successAddToast("Ticket");
                clearInputsValue(form);
                $('#ticketpanel').load('#ticketpanel #ticketpanel')
                window.location.href = document.URL;
            } else {
                if (response.status === 422) {
                    inputErrors(form, responseData.errors);
                }
            }
        });
    }

    const ticketResponseForm = document.querySelector("#anserTicketForm")
    if (ticketResponseForm) {
        ticketResponseForm.addEventListener('submit', async function (e) {
            e.preventDefault()
            const data = new FormData(ticketResponseForm)
            const url = ticketResponseForm.getAttribute('action')
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
                $.toast({
                    heading: "Info",
                    text: "Reponse envoyée",
                    position: "top-right",
                    icon: "info",
                    stack: false,
                });
                $('#messagebox').load('#messagebox #messagebox')
                $('#content').val('')
            } else {
                if (response.status === 422) {
                    inputErrors(ticketResponseForm, responseData.errors);
                }
            }
        })
    }
    const trashBtn = document.querySelectorAll(".trash-ticket");
    if (trashBtn) {
        trashBtn.forEach((btn) => {
            btn.addEventListener("click", async (e) => {
                e.preventDefault();
                const url = btn.getAttribute("action-url");
                const userResponse = await Swal.fire({
                    title: "Êtes vous sûre?",
                    text:
                        "Etes vous sùre de vouloir supprimer ce ticket ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Supprimer",
                    cancelButtonText: "Annuler",
                    confirmButtonClass: "btn btn-success mt-2",
                    cancelButtonClass: "btn btn-danger ml-2 mt-2",
                    buttonsStyling: false,
                });
                if (userResponse.value === true) {
                    const response = await fetch(url, {
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                        },
                    });

                    if (response.ok) {
                        Swal.fire({
                            title:"Fait",
                            text: "Ticket supprimer avec succes",
                            type:"success"
                        })
                        const tr = btn.parentNode.parentNode;
                        tr.remove();
                    } else {
                        if (response.status === 422) {
                            inputErrors(form, responseData.errors);
                        }
                    }
                }
            });
        });
    }
})();

var ticketId

function setOptionTicket(id){
   ticketId = id
    $('#OptionModal').modal()

    console.log(ticketId)
}

function changeOption(type){
    var url = "/support/update-"+type+"-"+ticketId
    $.ajax({
        url: url,
        type:"get",
        success:function(msg){
            if (msg == "true"){
                    successUpdateToast("Ticket")
                $('#tickettable').load('#body  tr')
                $('#closeOption').click()
            }
            else  if (msg == 'false') {
                internalerrormessage()
            }
        },
        error:function() {
            internalerrormessage()

        }
    })
}
