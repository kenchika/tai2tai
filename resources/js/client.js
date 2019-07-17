
import {MDCSelect} from '@material/select';


var  selects = document.querySelectorAll('#phone');
for (var i = 0, select; select = selects[i]; i++) {
  MDCSelect.attachTo(select);
}
