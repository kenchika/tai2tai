
import {MDCSelect} from '@material/select';
import {MDCTextField} from '@material/textField';
import {MDCSnackbar} from '@material/snackbar';

const educ = new MDCSelect(document.querySelector('#education'));
const y = new MDCSelect(document.querySelector('#year'));
const remu = new MDCSelect(document.querySelector('#remuneration'));
const work = new MDCSelect(document.querySelector('#working'));
const a = new MDCSelect(document.querySelector('#age'));
const chine = new MDCSelect(document.querySelector('#chinese'));

//test if session('simulation') == true (if test ==null -> session('simulation') == true)
const test=document.querySelector('#name');
if (test!=null) {
  const name = new MDCTextField(test);
  const email = new MDCTextField(document.querySelector('#email'));
}



const snack =document.querySelector('.mdc-snackbar-simulator');



			$('#calc').click(function() {
        //if it's not the fist time the user do the simulation, no need to send email
        if (test==null) {
          //ckeck all inputs are filled else show error message
            if( educ.value !=  ""  && y.value !=  "" && remu.value !=  "" && work.value !=  "" && a.value !=  "" && chine.value !=  ""){
              calc();
            }
            else{
              openSnack();
            }

        }
        else {
          if( educ.value !=  "" && name.value !=  ""  && email.value !=  "" && y.value !=  "" && remu.value !=  "" && work.value !=  "" && a.value !=  "" && chine.value !=  "") {
            calc();
            $("#result").val($('#title').text());
            //call the simulatorMail route whith ajax to send email without reloading
  					$.ajax({
  						url:"http://127.0.0.1:8000/simulatorMail",
  						type: 'GET',
  						data: $('#sendForm').serialize() ,
  						dataType: 'json',
  					});
  				}
          else{
              openSnack();
          }

        }


			});
function openSnack() {
  if(snack!=null){
    const snackbar = new MDCSnackbar(snack);
    snackbar.open();
  }
}

function calc() {
  var year = y.value;
  var remuneration = remu.value;
  var working = work.value;
  var age = a.value;
  var chinese = chine.value;
  var education =educ.value;
  var total = Number(year) + Number(working) + Number(remuneration) + Number(age) + Number(chinese) + Number(education);
  var checkUni100 = document.getElementById("university100");
  var checkwork500 = document.getElementById("work500");
  var checkpatent = document.getElementById("patent");
  var checkchina5 = document.getElementById("china5");
  if (checkUni100.checked == true) total += 5;
  if (checkwork500.checked == true) total += 5;
  if (checkpatent.checked == true) total += 5;
  if (checkchina5.checked == true) total += 5;
  $('#results').html("you scored a total of " + total + " points");

  var win="Congratulations ! You are elegible to a Working Permit in China with Tai2Ttai. Get in touch with us to discuss opportunities!";
  var lose="Sorry you don't meet the criteria for a working permit with Tai2Tai. Please, keep in touch with us as we continuously seek solutions and our elegibility criteria may change in the future. ";
  if (educ.value > 11) {
    if (total >= 85) {
      $('#title').html(win);
    } else if (total >= 60 && education>=20) {
      $('#title').html(win);
    }
    else {
        $('#title').html(lose);
    }
  } else $('#title').html(lose);
}

;
