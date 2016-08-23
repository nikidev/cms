
$(function() {
                $('#category-sort').sortable({
                    helper: fixWidthHelper,
                    cursor: 'move',
                    axis: 'y',
                    stop: function(){
                        $.map($(this).find('li'), function(el) {
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