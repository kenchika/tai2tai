import {MDCMenu} from '@material/menu';
const actions = new MDCMenu(document.querySelector('#actions'));
var actionsButton = document.querySelector('#actionsButton');
actionsButton.addEventListener('click', function (evt) {
  if	(actions.open != true){
    actions.open = true;
  }
  else{
    actions.open=false;
  }
});
