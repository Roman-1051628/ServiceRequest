let ip;
const api_url = 
      "https://api.ipify.org/?format=json";
  

async function getapi(url) {
    
    
    const response = await fetch(url);
    

    var data = await response.json();
    data = JSON.stringify(data.ip);
    ip = data.replace(/\./g,''); 
    ip = ip.replace(/\"/g,'');
    console.log(ip);
    if(ip === "x"){
        console.log("succes");
        document.getElementById("fullName").value = "Roman Fraikin";
        document.getElementById("nummer").value = "06123456789E";
        document.getElementById("company").value = "dEP";
    }
    }
getapi(api_url);

