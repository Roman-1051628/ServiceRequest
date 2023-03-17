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
    if(ip === "1958517558"){
        console.log("succes");
        document.getElementById("fullName").value = "Roman Fraikin";
        document.getElementById("nummer").value = "0636319142";
        document.getElementById("company").value = "dEP";
    }
    if(ip === "84241203196"){
        console.log("succes2");
        document.getElementById("fullName").value = "Roman Telefoon";
        document.getElementById("nummer").value = "068438922";
        document.getElementById("company").value = "dEP sfeerontwerpers";
    }
    if(ip === "8424745126"){
        console.log("succes");
        document.getElementById("fullName").value = "Roman Thuis";
        document.getElementById("nummer").value = "0182580509";
        document.getElementById("company").value = "Roman Corp.";
    }
    if(ip === "1958517561"){
        console.log("succes");
        document.getElementById("fullName").value = "Dep open WIFI";
        document.getElementById("nummer").value = "0611122233";
        document.getElementById("company").value = "DEP Corp.";
    }
    }
getapi(api_url);

