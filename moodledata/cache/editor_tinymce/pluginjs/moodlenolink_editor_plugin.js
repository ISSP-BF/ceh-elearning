(function(){tinymce.create('tinymce.plugins.moodlenolinkPlugin',{init:function(ed,url){ed.addCommand('mceMoodleNolink',function(){var n,p;n=ed.selection.getNode();p=ed.dom.getParent(n,function(t){return ed.dom.getAttrib(t,'class')=='nolink'});if(p){ed.dom.remove(p,!0)}else{ed.selection.setContent('<span class="nolink">'+ed.selection.getContent()+'</span>')}});ed.addButton('moodlenolink',{title:'moodlenolink.desc',cmd:'mceMoodleNolink',image:url+'/img/prevent_autolink.png'});ed.onNodeChange.add(function(ed,cm,n){var p,c;c=cm.get('moodlenolink');if(!c){return}
p=ed.dom.getParent(n,'SPAN');c.setActive(p&&ed.dom.hasClass(p,'nolink'));if(p&&ed.dom.hasClass(p,'nolink')||ed.selection.getContent()){c.setDisabled(!1)}else{c.setDisabled(!0)}})},getInfo:function(){return{longname:'moodlenolink plugin',author:'Mathieu Petit-Clair',authorurl:'http://moodle.com/hq',infourl:'http://docs.moodle.org/en/TinyMCE',version:"1.0"}}});tinymce.PluginManager.add('moodlenolink',tinymce.plugins.moodlenolinkPlugin)})()