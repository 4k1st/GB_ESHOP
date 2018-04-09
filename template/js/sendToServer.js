alert('loaded');

function showpopup(id, page)
{	

	var xmlHttpRequest = null;
	var params="?page="+page;
	if (window.XMLHttpRequest)
	  xmlHttpRequest = new window.XMLHttpRequest();
	else
	  xmlHttpRequest = new ActiveXObject("Msxml2.XMLHTTP");
  
	xmlHttpRequest.open("GET","engine/popup.php"+params,false);
	xmlHttpRequest.send(null);
	var form=document.getElementById(id)
				document.getElementById('forms').innerHTML=xmlHttpRequest.responseText;
	document.getElementById(id).style.display="block";
	
	
}

 
function load()
{
	var is=document.getElementById("is_value").value;
	var block=document.getElementById("block").value;
	var price=document.getElementById("price").value;
	var cost=document.getElementById("cost").value;		
	var link=document.getElementById("link_value").value;
	var rating=document.getElementById("rating").value;
	var params='?fields=1&is='+encodeURIComponent(is)
								+'&block='+encodeURIComponent(block)
								+'&price='+encodeURIComponent(price)
								+'&cost='+encodeURIComponent(cost)
								+'&link='+encodeURIComponent(link)
								+'&rating='+encodeURIComponent(rating);
	var values = {'is': is, 'block': block, 'price': price,'cost':cost,'link':link,'rating':rating}; // Создаём ассоциативный массив

	var selectColor = document.getElementById("selectColor");
	addRow('tableResults',values);
		
	alert(xmlHttpRequest.status+' : '+xmlHttpRequest.statusText+"  "+xmlHttpRequest.responseText);
}
	
