window.onclick = function(event){

    switch(event.target){
        case modal:
            modal.style.display = "none";
            break;
            case ActionModal:
                ActionModal.style.display = "none";
                break;
                case SpecialistModal:
                    SpecialistModal.style.display = "none";
                    break;
                    case AddPhotoPopup:
                        AddPhotoPopup.style.display = "none";
                        break;
                        case EditPopup:
                            EditPopup.style.display = "none";
                            break;
                            case EditOrderPopup: 
                            EditOrderPopup.style.display = "none";
                            break;

    }

}

//#region  Category

var modal = document.getElementById("mymodal");
var button = document.getElementById("PopupToggle");
button.onclick = function(){
    modal.style.display= "block";
}

//#endregion

//#region Orders 

if(document.location.pathname == "/userorder"){
    var ArrayEditButton = document.getElementsByClassName("primarys-edit"),
    ArrayOrdersId = document.getElementsByClassName("o-id"),
    EditOrderPopup = document.getElementById("EditOrder"),
    currentOrderId = document.getElementById("Orderid");

    for (let i =0; i<= ArrayEditButton.length; i++){
        var btn =  new OrderButton(ArrayEditButton[i],ArrayOrdersId[i]);
    }

}
//#endregion


//#region photos

        if(document.location.pathname == "/photos"){

    var OpenAddPhotoBtn = document.getElementById("OpenAddPhotoPopup");
    var AddPhotoPopup = document.getElementById("AddPhotoPopup");
    var OpenEditPopup = document.getElementById("editBtn");
    var EditPopup = document.getElementById("EditPhotoPopup");
    var ArrayForms = document.getElementsByClassName("frm");
    var ArrayFormsbuttons = document.getElementsByClassName("editBtn");
    var ArrayFormsPaths = document.getElementsByClassName("pathinp");
    var ArrayFormsId = document.getElementsByClassName("idinp");
    
    OpenAddPhotoBtn.onclick = function(){
        AddPhotoPopup.style.display = "block";
    }
    var EditButtons = []
    for (let i =0; i<= ArrayForms.length; i++){
        
        var btn =  new EditButton(ArrayFormsbuttons[i],ArrayFormsPaths[i].defaultValue, ArrayFormsId[i].defaultValue);
    }
    }



//#endregion

//#region Actions
var ActionModal = document.getElementById("ActionsModal");
var ActionButton = document.getElementById("OpenActions");
ActionButton.onclick = function(){
    
    ActionModal.style.display= "block";

}
//#endregion

//#region  Users
    if(document.location.pathname == "/users")
    {
    var SpecialistButtons =  document.getElementsByClassName("SpecialistPopupBtn");
    var SpecialistModal = document.getElementById("SpecialistPopup");
    var idUsers = document.getElementsByClassName("idUser");
    var UserIdinput = document.getElementById("Userid");
    var UserGroup = document.getElementsByClassName("warning");
    var GroupInput = document.getElementById("gr");
    var userButtons = [];
    for (let i =0; i<= SpecialistButtons.length; i++){
        var btn =  new UserButton(SpecialistButtons[i],idUsers[i].innerHTML, UserGroup[i].innerHTML);
        userButtons[i]= btn 
    }
    
}
//#endregion

function OrderButton(button,orderId){
    this.button = button;
    this.orderId = orderId;

    this.button.onclick = function(e){
        
        EditOrderPopup.style.display = "block";
        currentOrderId.defaultValue = orderId.value
      
    } 
}

function EditButton(button,path, id){
    this.button = button;
    this.path = path;
    this.id = id;
    this.button.onclick = function(e){
        e.preventDefault();
        EditPopup.style.display = "block";
        let InputPath = document.getElementById("oldpath")
        let IdPh = document.getElementById("Idphoto");
        InputPath.defaultValue = path;
        IdPh.defaultValue = id;
    }
}

function UserButton (button, userId, group) {
    // Определяем свойства
   
    this.button = button
    this.group = group
    this.userId = userId
  
    // Определяем методы
    this.button.onclick = function () {
        let text = button.innerHTML.toLowerCase(); 
       
        if(text != 'вы'){
        SpecialistModal.style.display = "block";
        UserIdinput.value = userId;
        GroupInput.innerHTML = '';

        switch (group){
            case 'Клиент':
                GroupInput.innerHTML+='<option value="1" selected>Клиент</option> <option value="2">Специалист</option>'
                break;
                case 'Специалист':
                    GroupInput.innerHTML+=  '<option value="1" >Клиент</option> <option value="2" selected>Специалист</option>'
                    break; 
                    
                }
            }

    }
  }