var url = 'https://the-eventhorizon.com/subdomain/livechatwajs/main.js';
var s = document.createElement('script');
s.type = 'text/javascript';
s.async = true;
s.src = url;
var options = {
"enabled":true,
"chatButtonSetting":{
  "backgroundColor":"#fbbe00",
  "ctaText":"",
  "borderRadius":"25",
  "marginLeft":"0",
  "marginBottom":"50",
  "marginRight":"50",
  "position":"right"
},
"brandSetting":{
  "brandName":"Event Horizon",
  "brandSubTitle":"Jasa Pembuatan Website Sederhana",
  "brandImg":"https://i.ibb.co/bHXKKyw/Header-Live-Chat.jpg",
  "welcomeText":"Hi!\nAda yang bisa kami bantu?",
  "messageText":"Hi, saya ingin menanyakan tentang pembuatan jasa web ini",
  "backgroundColor":"#fbbe00",
  "ctaText":"Chat",
  "borderRadius":"25",
  "autoShow":false,
  "phoneNumber":"6282127180662"
}
};
s.onload = function() {
    CreateWhatsappChatWidget(options);
};
var x = document.getElementsByTagName('script')[0];
x.parentNode.insertBefore(s, x);