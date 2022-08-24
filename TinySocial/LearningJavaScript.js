var maincontetndiv = document.getElementById( "maincontent" )

console.log( "nodetype " + maincontetndiv.nodeType);

console.log( "InnerHTML " + maincontetndiv.innerHTML);

console.log( "ChildNodes" + maincontetndiv.childNodes); 

var alllistitems = document.getElementsByTagName( "li" );