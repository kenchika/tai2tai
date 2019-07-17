import {MDCSlider} from '@material/slider';
import {MDCTextField} from '@material/textfield';
import {MDCRipple} from '@material/ripple';

import Chart from 'chart.js';



var ctx = document.getElementById('myChart');
const fabRipple = new MDCRipple(document.querySelector('.mdc-fab'));

const textFieldDay = new MDCTextField(document.querySelector('#day'));
textFieldDay.value=1000


const sliderMonth = new MDCSlider(document.querySelector('.sliderMonth'));
const textFieldMonth = new MDCTextField(document.querySelector('#month'));
textFieldMonth.value=2;

sliderMonth.listen('MDCSlider:input', () => textFieldMonth.value=sliderMonth.value);
document.querySelector('#month').addEventListener('input', function (evt) {
  sliderMonth.value=textFieldMonth.value;
});


const sliderYear = new MDCSlider(document.querySelector('.sliderYear'));
const textFieldYear = new MDCTextField(document.querySelector('#year'));
textFieldYear.value=10;
sliderYear.listen('MDCSlider:input', () => textFieldYear.value=sliderYear.value);
document.querySelector('#year').addEventListener('input', function (evt) {
  sliderYear.value=textFieldYear.value;
});



const sliderAllow = new MDCSlider(document.querySelector('.sliderAllow'));
const textFieldAllow = new MDCTextField(document.querySelector('#allow'));
textFieldAllow.value=10;
sliderAllow.listen('MDCSlider:input', () => textFieldAllow.value=sliderAllow.value);
document.querySelector('#allow').addEventListener('input', function (evt) {
  sliderAllow.value=textFieldAllow.value;
});



var activ = document.querySelector('#calc');
activ.addEventListener('click', function (evt) {
  calcTTC();
});
$('#HT').html('0 ¥');
$('#TAI').html('0 ¥');
$('#allowances').html('0 ¥');
$('#gross').html('0 ¥');
$('#salaryYear').html('0 ¥');
$('#net').html('0 ¥');
$('#netRemuneration').html('0 ¥');
$('#tax').html('0 ¥');

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
var myDoughnutChart=null;

function calcTTC(){
  var tab=null;
  var tab2=null;

  var turnoverVE=textFieldDay.value*(sliderMonth.value*4.33)*sliderYear.value;
  var TAI=(20/100)*turnoverVE;
  var allowances=(sliderAllow.value/100)*turnoverVE;
  var gross=(80/100)*turnoverVE-allowances;

  $('#HT').html(numberWithCommas(Math.round(turnoverVE)).concat(' ¥'));
  $('#TAI').html(numberWithCommas(Math.round(TAI*-1)).toString().concat(' ¥'));
  $('#allowances').html(numberWithCommas(Math.round(allowances)).toString().concat(' ¥'));
  $('#gross').html(numberWithCommas(Math.round(gross)).toString().concat(' ¥'));

  var sal=gross - 60000;
  var net=0;

  switch(true) {
    case sal <0:
    net= sal + 60000;
    break;
    case sal <= 36000:
    net= sal - (sal*0.03) + 60000;
    break;
    case sal <= 144000:
    net= sal - (sal*0.1) + 2520 + 60000;
    break;
    case sal <= 300000:
    net= sal - (sal*0.2) + 16920 + 60000;
    break;
    case sal <= 420000:
    net= sal - (sal*0.25) + 31920 + 60000;
    break;
    case sal <= 620000:
    net= sal - (sal*0.3) + 52920 + 60000;
    break;
    case sal <= 920000:
    net= sal - (sal*0.35) +85920 + 60000;
    break;
    case sal >920000 :
    net= sal - (sal*0.45) + 181920 + 60000;
    break;

  }


  const cash=net+allowances;
  const tax=turnoverVE-allowances-TAI-net;
  $('#net').html(numberWithCommas(Math.round(net)).toString().concat(' ¥'));
  $('#netRemuneration').html(numberWithCommas(Math.round((cash))).toString().concat(' ¥'));
  $('#tax').html(numberWithCommas(Math.round((tax*-1))).toString().concat(' ¥'));

  tab=[

    TAI,
    tax,
    net,
    allowances,

  ];
  tab2=[

    TAI+tax,
    cash,


  ];



  if (myDoughnutChart!=null) {
    myDoughnutChart.data.datasets[0].data = tab2;
    myDoughnutChart.data.datasets[1].data = tab;
    myDoughnutChart.update();
  }
  else {

    var config = {
      type: 'pie',
      data: {

        datasets: [{
          data:tab2,
          backgroundColor: [


            'rgba(101, 102, 104, 1)',
            'rgba(0, 143, 168, 1)',


          ],
          label: 'Dataset 1'
        },
        {
          data:tab,
          backgroundColor: [

            'rgba(255, 23, 68, 1)',
            'rgba(216, 216, 216, 1)',


            'rgba(252, 216, 44, 1)',
            'rgba(75, 192, 192, 1)',



          ],
          label: 'Dataset 1'
        }]

      },
      options: {
        responsive: false,
        tooltips: {
           enabled: false,
      }
    }
  };
    myDoughnutChart = new Chart(ctx, config);



  }











};
