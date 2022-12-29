// shopping cart popup

function on() {
    const menuBar = document.getElementById("menuBar");
  
    const overlay = document.getElementById("overlay");
  
    
    menuBar.classList.toggle("menuBarStyle");
    overlay.classList.toggle("overlayStyle");
    
  }


// qr code popup
  function qrcode() {
    const qrcode = document.getElementById("qrCode")
    
    qrcode.classList.toggle("qrCodeStyle")
  }