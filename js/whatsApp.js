//----------------------------------------------------------WHATSAPP

// Replace the phone number and message with your own values
const phoneNumber = '+14375455632'
const message = 'Hi, I need help with my tamagotchi';

// Function to open WhatsApp app and send message
function sendWhatsappMessage() {
  window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`);
}

// Add event listener to button
const sendButton = document.getElementById('send-btn1');
sendButton.addEventListener('click', sendWhatsappMessage);