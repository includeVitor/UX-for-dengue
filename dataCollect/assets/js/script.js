const API_URL = "http://localhost:3000/";
const BASE_URL = "http://localhost:8080/"

function age(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:'',
        allowZero:false,
        precision:0
        });
}

function weight(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:',',
        allowZero:false,
        precision:1
        });
}

function height(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:',',
        allowZero:false,
        precision:2
        });
}

function temperature(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:',',
        allowZero:false,
        precision:1
        });
}

function heartBeat(id){
    $(`${id}`).maskMoney(
        {
        thousands: '',
        decimal:',',
        allowZero:false,
        precision:0
        });
}
