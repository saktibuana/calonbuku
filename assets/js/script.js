// shopping cart popup
function on() {
    const menuBar = document.getElementById("menuBar");  
    const overlay = document.getElementById("overlay");
    const transparrentBlack = document.getElementById("transparrentBlack");
    
    if(menuBar){
      menuBar.classList.toggle("menuBarStyle");    
    }

    if(overlay){
      overlay.classList.toggle("overlayStyle");
    }

    if(transparrentBlack){
      transparrentBlack.classList.toggle("blockStyle");
    }    
  }

// qr code popup
function qrcode() {
    const qrcode = document.getElementById("qrCode")  
    qrcode.classList.toggle("qrCodeStyle")
}