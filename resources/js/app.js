/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');


window.Vue = require('vue');


/**
* The following block of code may be used to automatically register your
* Vue components. It will recursively scan this directory for the Vue
* components and automatically register them with their "basename".
*
* Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
*/

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

// const app = new Vue({
//   el: '#app',
//
// });
  //
  //
  // var navbar = $(".navbar-brand");
  // if ($(window).scrollTop() > 50) {
  //   $("nav").removeClass('bg-white');
  //   $("nav").removeClass('navbar-light');
  //   $("nav").removeClass('my-nav');
  //   $("nav").removeClass('mdc-elevation--z3');
  //
  // }
  // $(window).scroll(function() {
  //   if ($(document).scrollTop() < 50) {
  //
  //     $("nav").removeClass('bg-white');
  //     $("nav").removeClass('navbar-light');
  //     $("nav").removeClass('my-nav');
  //     $("nav").removeClass('mdc-elevation--z3');
  //
  //     // navbar.find(".menu__biglogo").removeClass('active');
  //     // navbar.find(".menu__minilogo").addClass('active');
  //
  //
  //   } else {
  //     $("nav").addClass('my-nav');
  //     $("nav").addClass('mdc-elevation--z3');
  //
  //     $("nav").addClass('navbar-light');
  //     $("nav").addClass('bg-white');
  //     // navbar.find(".menu__biglogo").addClass('active');
  //     // navbar.find(".menu__minilogo").removeClass('active');
  //
  //   }
  // });

//material design documentation : https://material.io/develop/web/components/
import {MDCRipple} from '@material/ripple';
import {MDCTextField} from '@material/textfield';
import {MDCTopAppBar} from '@material/top-app-bar/index';
import {MDCFormField} from '@material/form-field';
import {MDCCheckbox} from '@material/checkbox';
import {MDCSlider} from '@material/slider';
import {MDCList} from '@material/list';
import {MDCDialog} from '@material/dialog';
import {MDCSnackbar} from '@material/snackbar';
import {MDCMenu} from '@material/menu';





// import simpleParallax from 'simple-parallax-js';
// const menu = new MDCMenu(document.querySelector('.lang'));
//
// var lang = document.querySelector('#lang');
// lang.addEventListener('click', function (evt) {
//   if	(menu.open != true){
//     menu.open = true;
//   }
//
// });
// const simu = new MDCMenu(document.querySelector('.simulators'));
// var sim = document.querySelector('#simulators');
// sim.addEventListener('click', function (evt) {
//   if	(simu.open != true){
//     simu.open = true;
//   }
//
// });



const snack =document.querySelector('.mdc-snackbar-login');

if(snack!=null){
  const snackbar = new MDCSnackbar(snack);
  snackbar.open();
}
var err = document.querySelector('#errorLogin');





var  buttonRipples = document.querySelectorAll('.mdc-button');
var  fabRipples = document.querySelectorAll('.mdc-fab');
for (var i = 0, button; button = buttonRipples[i]; i++) {
  MDCRipple.attachTo(button);
}
for (var i = 0, fab; fab = fabRipples[i]; i++) {
  MDCRipple.attachTo(fab);
}




var  textfields = document.querySelectorAll('.mdc-text-field');
for (var i = 0, text; text = textfields[i]; i++) {
  MDCTextField.attachTo(text);
}





// Instantiation


//checkboxes
const formField = new MDCFormField(document.querySelector('.mdc-form-field'));

var checkboxes = document.querySelectorAll('.mdc-checkbox');

/*

const list = new MDCList(document.querySelector('#discussionList'));
const listItemRipples = list.listElements.map((listItemEl) => new MDCRipple(listItemEl));

*/
