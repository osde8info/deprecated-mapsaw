document.observe('dom:loaded', function() {
    var changeEffect;
    Sortable.create('sortlist', { tag: 'img', overlap:'horizontal',constraint:false, 
	onChange: function(item) {
	    var list = Sortable.options(item).element;
	    $('changeNotification').update(Sortable.serialize(list).escapeHTML());
	    if(changeEffect) changeEffect.cancel();
	    changeEffect = new Effect.Highlight('changeNotification', {restoreColor:"transparent" });
	},
	    
	onUpdate: function() {
	    new Ajax.Request("saveImageOrder.php", {
		method: "post",
		onLoading: function(){$('activityIndicator').show()},
		onLoaded: function(){$('activityIndicator').hide()},
		parameters: { data: Sortable.serialize("sortlist") }
	    });
	}				
    });
});
