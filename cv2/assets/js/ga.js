chrome.storage.sync.get("css_injector", function(data) {
    var l = document.location.href;
    try{
    	console.log( ' ------ css injection ------ ')
	    	console.log( data.css_injector[l].css );
    	console.log( ' ------ css injection ------ ')
	    var css = document.createElement("style");
	    css.type = "text/css";
	    css.innerHTML = data.css_injector[l].css;
	    document.body.appendChild(css);
    }catch(ex){}
});
