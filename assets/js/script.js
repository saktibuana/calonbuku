// shopping cart popup

function on() {
    const menuBar = document.getElementById("menuBar");
  
    const overlay = document.getElementById("overlay");
    const transparrentBlack = document.getElementById("transparrentBlack");
    
    console.log(transparrentBlack);

    menuBar.classList.toggle("menuBarStyle");
    overlay.classList.toggle("overlayStyle");
    transparrentBlack.classList.toggle("blockStyle");
    
  }


// qr code popup
  function qrcode() {
    const qrcode = document.getElementById("qrCode")
    
    qrcode.classList.toggle("qrCodeStyle")
  }