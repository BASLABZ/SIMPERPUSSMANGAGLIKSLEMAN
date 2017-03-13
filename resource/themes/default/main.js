function byid(id_name) { return document.getElementById(id_name); }

function loader(dirfname) {
	var js = document.createElement('script');
	js.src = ginapp.url+'resource/config/'+dirfname+'.js';
	document.head.appendChild(js);
}

// http://stackoverflow.com/questions/9330102/two-window-onload-on-the-the-site
function winload(fn) {
    if (window.addEventListener) {
        window.addEventListener('load', fn, false); // CURRENT-FUTURE!
    } else {
        window.attachEvent('onload', fn); // IE
    }
}

function plugger(ty,dirfname) {
	var proot,js,css;
	if (/^(css|both)$/.test(ty)) {
		proot = ginapp.url+'resource/themes/default/css/plugins/';
		css = document.createElement('link');
		css.rel = 'stylesheet';
		css.href = proot+dirfname+'.css';
		document.head.appendChild(css);
	}
	if (/^(js|both)$/.test(ty)) {
		proot = ginapp.url+'resource/themes/default/js/plugins/';
		js = document.createElement('script');
		js.src = proot+dirfname+'.js';
		document.head.appendChild(js);
	}
}