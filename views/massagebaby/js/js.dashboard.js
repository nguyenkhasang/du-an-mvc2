// lấy biến từ url
function GetURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
}
  var tabs = GetURLParameter('tab');
tabs = Number(tabs);
switch(tabs) {
  case 2:
 document.getElementById("tab1").classList.remove('active');
 document.getElementById("tab2").classList.add('active');
 document.getElementById("home").classList.remove('active');
 document.getElementById("menu1").classList.add('active');
 document.getElementById("menu1").classList.add('show');
    break;
  case 3:
    document.getElementById("tab1").classList.remove('active');
 document.getElementById("tab3").classList.add('active');
 document.getElementById("home").classList.remove('active');
 document.getElementById("menu2").classList.add('active');
 document.getElementById("menu2").classList.add('show');
    break;
    case 4:
      document.getElementById("tab1").classList.remove('active');
 document.getElementById("tab4").classList.add('active');
 document.getElementById("home").classList.remove('active');
 document.getElementById("menu3").classList.add('active');
 document.getElementById("menu3").classList.add('show');
    break;
  default:
    ;
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
	$.post("pagepost",{page:homepage},function(data){
	$(".post").find("tbody").empty();
	$(".post").find("tbody").append(data);
})
};

}