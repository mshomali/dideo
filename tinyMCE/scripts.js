(function() {

    tinymce.create('tinymce.plugins.dideo_shortcode', {

        init : function(ed, url){
            ed.addButton('dideo_shortcode', {
                title : 'افزودن ویدئوی دیدئو',
                onclick : function() {
					var dideo = prompt("شناسه ویدئوی دیدئو را درج کنید :\n\nبه‌عنوان مثال شناسه ویدئوی https://www.dideo.ir/v/yt/wW7ptD1gB8Q عبارت است از : v/yt/wW7ptD1gB8Q",'');
					if( dideo ){
						//ed.selection.setContent('[aparat id="'+ ed.selection.getContent() +'"]');
						ed.selection.setContent('[dideo id="'+ dideo +'"]');
					}
                },
                image: url + "/dideo.png"
            });
        },

        getInfo : function() {
            return {
                longname : 'Dideo Shrotcut',
                author : 'Mehran Shomali',
                authorurl : 'http://mshomali.ir',
                infourl : '',
                version : "1.0"
            };
        }
    });

    tinymce.PluginManager.add('dideo_shortcode', tinymce.plugins.dideo_shortcode);
    
})();
