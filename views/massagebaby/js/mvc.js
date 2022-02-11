// ---------------------------------------trang chủ=====================================
var homepage= document.getElementById('homepages').innerHTML;
homepage = Number(homepage);
function pagehomeup(){
homepage = homepage + 1;
$('#homepages').empty();
$('#homepages').append(homepage);

ajaxcon();
};

function pagehomedow(){
   if (homepage > 1) {
homepage = homepage - 1;
$('#homepages').empty();
$('#homepages').append(homepage);
ajaxcon();
   }
};
function ajaxcon(){
   $.post("pagehome",{page:homepage},function(data){
   $('#propagehome').empty();
   $('#propagehome').append(data);
})
};
