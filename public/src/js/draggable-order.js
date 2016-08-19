// $(function() {
// 	$('#category-sort').sortable({
// 		stop: function(){
// 			$.map($(this).find('td'), function(el) {
// 				var itemID = el.id;
// 				var  itemIndex = $(el).index();

// 				$.ajax({
// 					url: '/categories',
// 					type: 'POST',
// 					dataType:'json',
// 					data:{itemID: itemID, itemIndex: itemIndex},
// 				})
// 			});
// 		}
// 	});
// });






// $("#category-sort").sortable({
// 				helper: fixWidthHelper,
// 				cursor: 'move',
//         		axis: 'y',
//                 update: function( event, ui ) 
//                 {
//                     var order = $(this).sortable('toArray');
//                     console.log(order);
//                     $.post('/categories', { order: order });
//                 }
//             }).disableSelection();


// function fixWidthHelper(e, ui) {
//     ui.children().each(function() {
//         $(this).width($(this).width());
//     });
//     return ui;
// }



$(function() {
                $('#category-sort').sortable({
                    helper: fixWidthHelper,
                    cursor: 'move',
                    axis: 'y',
                    stop: function(){
                        $.map($(this).find('td'), function(el) {
                            var itemID = el.id;
                            var  itemIndex = $(el).index();

                            $.ajax({
                                url: '/categories',
                                type: 'POST',
                                dataType:'json',
                                data:{itemID: itemID, itemIndex: itemIndex},
                            })
                        });
                    }
                });
            });

            function fixWidthHelper(e, ui) 
            {
                ui.children().each(function() {
                    $(this).width($(this).width());
                });
                
                return ui;
            }