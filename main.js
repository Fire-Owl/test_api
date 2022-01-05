const currency1 = "USD";
const currency2 = "EUR";
const BASE_ENDPOINT ="https://api.ibanfirst.com/PublicAPI";
const url = `${BASE_ENDPOINT}/Rate/${currency1}${currency2}/`;

async function RateChange(){
    res = await fetch(url);
    json = await res.json();
    json.status == 200;
    json.rate.rate
    document.getElementById('rateChange').innerHTML = json.rate.rate; 
    
}

window.onload = RateChange();
