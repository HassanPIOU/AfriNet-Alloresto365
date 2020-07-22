function setAlert(value,type){
    if (type == "success"){
        return "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">\n" +
            "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
            "    <span aria-hidden=\"true\">&times;</span>\n" +
            "  </button>\n" +
            "  <strong>"+value+"</strong>" +
            "</div>"
    } else{
        return "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">\n" +
            "  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
            "    <span aria-hidden=\"true\">&times;</span>\n" +
            "  </button>\n" +
            "  <strong>"+value+"</strong>" +
            "</div>"
    }
}

function ShowLoading(buttonid){
    let img = "<img  src='/assets/img/loading.svg' id='loadimg' style='padding-left: 20px; width: 40px;' />"
    return buttonid.append(img)
}
function HideLoading(){
    return $('#loadimg').remove()
}
function setError(value){
    return "<small style='color: #b02e2f;'>"+value+"</small>"
}

function removeEror(id){
    return id.hide()
}

function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;

    return [year, month, day].join('-');
}

function emptyInputs(){
    $.toast({
        heading: 'error',
        text:  'Veuillez remplir tous les champs',
        position: 'top-right',
        icon: 'warning',
        stack: false
    });
}

 function successAddToast(name){
     $.toast({
         heading: 'Succes',
         text:  name + ' Ajouter avec succes',
         position: 'top-right',
         icon: 'success',
         stack: false
     });
 }

 function internalerrormessage() {
     $.toast({
         heading: 'Erreur',
         text: "Une erreur interne s'est produite, veuillez réessayer plutard ",
         position: 'top-right',
         icon: 'error',
         stack: false
     });
 }

function successUpdateToast(name){
    $.toast({
        heading: 'Succes',
        text:  name + ' Modifier avec succes',
        position: 'top-right',
        icon: 'success',
        stack: false
    });
}


function inputErrors(form, errors)  {
    let errorElements = form.querySelectorAll('.is-invalid');
    for (let i = 0; i < errorElements.length; i++) {
        errorElements[i].classList.remove('is-invalid');
        let p = errorElements[i].parentNode.querySelector('.text-danger');
        if (p) {
            p.parentNode.removeChild(p);
        }
    }
    let errorsKey = Object.keys(errors);
    for (let i = 0; i < errorsKey.length; i++) {
        let key = errorsKey[i];
        let  error = errors[key]
        let input = form.querySelector(`input[name='${key}']`)
        if(input == null) { input = form.querySelector(`select[name='${key}']`) }
        if(input == null) { input = form.querySelector(`textarea[name='${key}']`) }
        if(input) {
            let p = document.createElement('span');
            p.className = 'text-danger';
            p.innerHTML = error;
            input.classList.add('is-invalid');
            input.parentNode.appendChild(p);
        }
    }
}

function clearInputsValue(form) {
    form.querySelectorAll('input, textarea').forEach(input => {
        if(input.name != '_token') {input.value = ''}
    });
}
