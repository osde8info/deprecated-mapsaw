window.onload = function() {
   $A($$('img.source')).each(
       function(item) {
           new Draggable(item, {});
       }
   );
   $A($$('img.target')).each(
       function(item) {
           Droppables.add(item);
       }
   );
}
