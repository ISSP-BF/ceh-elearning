var ed,url;if(url=tinyMCEPopup.getParam("media_external_list_url")){document.write('<script language="javascript" type="text/javascript" src="'+tinyMCEPopup.editor.documentBaseURI.toAbsolute(url)+'"></script>')}
function init(){ed=tinyMCEPopup.editor;document.getElementById('filebrowsercontainer').innerHTML=getFileBrowserHTML('filebrowser','src','media','media')}
function insertMedia(){var f=document.forms[0];var url=f.filename.value;var linkname=url.substring(url.lastIndexOf('/')+1);var h='<a href="'+f.src.value+'">'+linkname+'</a>';ed.execCommand('mceInsertContent',!1,h);tinyMCEPopup.close()}
function serializeParameters(){var d=document,s='';s+=getStr(null,'src');s=s.length>0?s.substring(0,s.length-1):s;return s}
function getStr(p,n,d){var e=document.forms[0].elements[(p!=null?p+"_":"")+n];var v=e.type=="hidden"?e.value:e.options[e.selectedIndex].value;if(n=='src')
v=tinyMCEPopup.editor.convertURL(v,'src',null);return((n==d||v=='')?'':n+":'"+jsEncode(v)+"',")}
function jsEncode(s){s=s.replace(new RegExp('\\\\','g'),'\\\\');s=s.replace(new RegExp('"','g'),'\\"');s=s.replace(new RegExp("'",'g'),"\\'");return s}
function generatePreview(c){var f=document.forms[0],p=document.getElementById('prev');p.innerHTML='<!-- x --->';var re=new RegExp("(.+)\#(.+)","i");var result=f.src.value.match(re);if(result){f.src.value=result[1];f.filename.value=result[2]}else{f.src.value=f.src.value;f.filename.value=f.src.value}
var pl=serializeParameters();if(pl==''){p.innerHTML='';return}
pl=tinyMCEPopup.editor.plugins.moodlemedia._parse(pl);if(!pl.src){p.innerHTML='';return}
pl.src=tinyMCEPopup.editor.documentBaseURI.toAbsolute(pl.src);p.innerHTML='<iframe src="'+tinyMCEPopup.editor.getParam("moodle_plugin_base")+'moodlemedia/preview.php'+'?media='+encodeURIComponent(encode64(pl.src.toString()))+'&sesskey='+encodeURIComponent(parent.M.cfg.sesskey)+'" width="100%" height="100%"></iframe>'}
function encode64(input){var keyStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";var output="";var chr1,chr2,chr3="";var enc1,enc2,enc3,enc4="";var i=0;do{chr1=input.charCodeAt(i++);chr2=input.charCodeAt(i++);chr3=input.charCodeAt(i++);enc1=chr1>>2;enc2=((chr1&3)<<4)|(chr2>>4);enc3=((chr2&15)<<2)|(chr3>>6);enc4=chr3&63;if(isNaN(chr2)){enc3=enc4=64}else if(isNaN(chr3)){enc4=64}
output=output+keyStr.charAt(enc1)+keyStr.charAt(enc2)+keyStr.charAt(enc3)+keyStr.charAt(enc4);chr1=chr2=chr3="";enc1=enc2=enc3=enc4=""}while(i<input.length);return output}
tinyMCEPopup.onInit.add(init)