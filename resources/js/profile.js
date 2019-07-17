import {MDCMenu} from '@material/menu';
import {MDCTextField} from '@material/textfield';
import {MDCSelect} from '@material/select';
import {MDCSnackbar} from '@material/snackbar';
const snack =document.querySelector('.mdc-snackbar');
const snackSkill =document.querySelector('.mdc-snackbar-skill');
if (snackSkill!=null) {
  const snackbarSkill = new MDCSnackbar(snackSkill);
  snackbarSkill.open();
}
////////////////ADD HARD SKILL/////////////////////

const mdcSkillsList = new MDCMenu(document.querySelector('.mdcSkillsList'));
mdcSkillsList.setDefaultFocusState(0);

var skills = document.querySelector('#skill');
skills.addEventListener('keyup', function (evt) {
  if	(mdcSkillsList.open != true){

    mdcSkillsList.open = true;


  }
});
var addChipsButton = document.querySelector('#addChips');
var chips = document.querySelector('#chips');
var validate = document.querySelector('#validate');
var i=1;
function openSnack(text){
  if(snack!=null){
      const snackbar = new MDCSnackbar(snack);
      snackbar.labelText=text;
      snackbar.open();

  }
}
validate.addEventListener('click', function (evt) {
  if ($.trim($("#chips").html())=='') {
    openSnack("no skills added");
  }
  else{
    document.forms['addSkills'].submit();
  }
});
addChipsButton.addEventListener('click', function (evt) {

  //html= form to add multiple skills whith hidden inputs as value
  if (skills.value!="") {

    const html='<div  class="mdc-chip mr-2 mb-2" onClick="$(this).remove();"><input name="skill'+i+'" value="'+skills.value+'" type="hidden"/><i class="material-icons mdc-chip__icon mdc-chip__icon--leading">remove_circle</i><div class="mdc-chip__text">'+ skills.value+'</div></div>';
    i=i+1;
    skills = document.querySelector('#skill');
    $('#chips').append(html);
    skills.value="";
  }

});
////////////////ADD contact/////////////////////

const mdcContactsList = new MDCMenu(document.querySelector('.mdcContactsList'));
mdcContactsList.setDefaultFocusState(0);

var contact = document.querySelector('#contact');
//contact textfield infos
const name=new MDCTextField(document.querySelector('#contactName'));
const fonction=new MDCTextField(document.querySelector('#contactFonction'));
const phone=new MDCTextField(document.querySelector('#phone_number'));
const bankName=new MDCTextField(document.querySelector('#contactBankAccount'));
const bankNumber=new MDCTextField(document.querySelector('#contactBankAccountNumber'));
const bankBranch=new MDCTextField(document.querySelector('#contactBankBranch'));
const adressName=new MDCTextField(document.querySelector('#adressName'));
const adressNumber=new MDCTextField(document.querySelector('#adressNumber'));
const adressCity=new MDCTextField(document.querySelector('#adressCity'));
const adressCountry=new MDCTextField(document.querySelector('#adressCountry'));
const adressZip=new MDCTextField(document.querySelector('#adressZip'));
const englishName=new MDCTextField(document.querySelector('#englishName'));
const chineseName=new MDCTextField(document.querySelector('#chineseName'));
const companyCountry=new MDCTextField(document.querySelector('#companyCountry'));
const companyPhone=new MDCTextField(document.querySelector('#companyPhone'));
const taxNumber=new MDCTextField(document.querySelector('#taxNumber'));
contact.addEventListener('keyup', function (evt) {
  if	(mdcContactsList.open != true){
    mdcContactsList.open = true;
  }
  if (!this.value ) {
    $('#contactIdInput').html(" ");
    name.disabled=false;
    phone.disabled=false;

    fonction.disabled=false;
    bankName.disabled=false;
    bankNumber.disabled=false;
    bankBranch.disabled=false;
    adressName.disabled=false;
    adressNumber.disabled=false;
    adressCity.disabled=false;
    adressCountry.disabled=false;
    adressZip.disabled=false;
    englishName.disabled=false;
    chineseName.disabled=false;
    companyPhone.disabled=false;
    companyCountry.disabled=false;
    taxNumber.disabled=false;

  }
  else{

    name.disabled=true;
    phone.disabled=true;
    fonction.disabled=true;
    bankName.disabled=true;
    bankNumber.disabled=true;
    bankBranch.disabled=true;
    adressName.disabled=true;
    adressNumber.disabled=true;
    adressCity.disabled=true;
    adressCountry.disabled=true;
    adressZip.disabled=true;
    englishName.disabled=true;
    chineseName.disabled=true;
    companyCountry.disabled=true;
    companyPhone.disabled=true;
    taxNumber.disabled=true;




  }
});


//select cotract type
new MDCSelect(document.querySelector('#contractType'));



var  selects = document.querySelectorAll('#phone');
for (var i = 0, select; select = selects[i]; i++) {
  MDCSelect.attachTo(select);
}






//
// import {MDCTabBar} from '@material/tab-bar';
//
// const tabBar = new MDCTabBar(document.querySelector('.mdc-tab-bar'));
// tabBar.listen('MDCTabBar:activated', (activatedEvent) => {
//   document.querySelectorAll('.my-info').forEach((element, index) => {
//     if (index === activatedEvent.detail.index) {
//       element.classList.remove('my-info--hidden');
//
//     } else {
//       element.classList.add('my-info--hidden');
//     }
//   });
// });
