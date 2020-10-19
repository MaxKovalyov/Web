function list(type) {
	document.write('<'+type+'l class="lists">');
	for(var i = 1; i < list.arguments.length; i++) {
		document.write("<li>"+list.arguments[i]+"</li>");
	}
	document.write("</"+type+"l>");
}