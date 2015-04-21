function init() {
	tinyMCEPopup.resizeToInnerSize();
}

function getCheckedValue(radioObj) {
	if(!radioObj)
		return "";
	var radioLength = radioObj.length;
	if(radioLength == undefined)
		if(radioObj.checked)
			return radioObj.value;
		else
			return "";
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
}

function rshortcodesubmit() {
	
	var tagtext;
	
	var r_shortcode = document.getElementById('rshortcode_panel');
	var contact = document.getElementById('contact_panel');
	// who is active ?
	if (r_shortcode.className.indexOf('current') != -1) {
		var r_shortcodeid = document.getElementById('rshortcode_tag').value;
		switch(r_shortcodeid)
{
case 0:
 	tinyMCEPopup.close();
  break;

case "button":
	tagtext = "["+ r_shortcodeid + "  url=\"#\" target=\"_self\" style=\"yellow\" position=\"left\"] Button text [/" + r_shortcodeid + "]";
break;

case "alert":
	tagtext = "["+ r_shortcodeid + " style=\"white\"] Alert text [/" + r_shortcodeid + "]";
break;

default:
tagtext="["+r_shortcodeid + "] Insert you content here [/" + r_shortcodeid + "]";
}
}

if (contact.className.indexOf('current') != -1) {
		var email = document.getElementById('contact_email').value;
		if (email != 0 )
			tagtext = "[contactform email=" + email + "]";
		else
			tinyMCEPopup.close();
		}

if(window.tinyMCE) {
		//TODO: For QTranslate we should use here 'qtrans_textarea_content' instead 'content'
		window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, tagtext);
		//Peforms a clean up of the current editor HTML. 
		//tinyMCEPopup.editor.execCommand('mceCleanup');
		//Repaints the editor. Sometimes the browser has graphic glitches. 
		tinyMCEPopup.editor.execCommand('mceRepaint');
		tinyMCEPopup.close();
	}
	return;
}