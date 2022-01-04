const currency1 = "USD";
const currency2 = "EUR";
const BASE_ENDPOINT ="https://api.ibanfirst.com/PublicAPI";
const url = `${BASE_ENDPOINT}/Rate/${currency1}${currency2}/`;

async function RateChange(){
    res = await fetch(url, {
        mode :'no-cors',
    });
    JSON = await res.JSON();
    JSON.status == 200;
    JSON.rate.rate
    document.getElementById('rateChange').innerHTML = JSON.rate.rate; 
    
}

window.onload = RateChange();
