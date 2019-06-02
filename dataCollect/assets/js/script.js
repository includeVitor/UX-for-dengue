const API_URL = "http://localhost:3000/";
const BASE_URL = "http://localhost:8080/"

function age(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:'',
        allowZero:false,
        precision:0,
        suffix: '  ANOS'});
}

function weight(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:',',
        allowZero:false,
        precision:1,
        suffix: '  KG'});
}

function height(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:',',
        allowZero:false,
        precision:1,
        suffix: '  METROS'});
}

function temperature(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:',',
        allowZero:false,
        precision:1,
        suffix: '  Cº'});
}

function heartBeat(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:',',
        allowZero:false,
        precision:0,
        suffix: '  BPM'});
}
