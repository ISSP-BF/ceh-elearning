(function(){tinymce.create('tinymce.plugins.MoodleImagePlugin',{init:function(ed,url){ed.addCommand('mceMoodleImage',function(){if(ed.dom.getAttrib(ed.selection.getNode(),'class','').indexOf('mceItem')!=-1)
return;ed.windowManager.open({file:url+'/image.htm',width:480+parseInt(ed.getLang('advimage.delta_width',0)),height:385+parseInt(ed.getLang('advimage.delta_height',0)),inline:1},{plugin_url:url})});ed.addButton('image',{title:'advimage.image_desc',cmd:'mceMoodleImage'})},getInfo:function(){return{longname:'Moodle image',author:'Moodle.com - based on AdvImage by Moxiecode Systems AB',authorurl:'http://moodle.org',infourl:'http://moodle.org',version:'3.6.0'}}});tinymce.PluginManager.add('moodleimage',tinymce.plugins.MoodleImagePlugin)})()