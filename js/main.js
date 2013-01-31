$(document).ready(function() {
    var statuses = ['Заказан',
        'Оплачивается',
        'Оплачен',
        'В процессе',
        'Готов',
        'Готов и ожидает'];

    var func = function getOrders() {
        var jsonData = {
            page: 1,
            limit: 100,
            start: 0,
            type: 0
        };
        $.ajax({
            type: "POST",
            url: "/php/index.php/orders/getOrders",
            data: jsonData,
            cache: false,
            dataType: "json",
            success: function(json){
                var ids = [];
                json.data.forEach(function(row) {
                    // Возьмём всё, что есть сейчас в mainTable
                    ids.push(row.id);
                    var table = $("#mainTable");
                    var children = table.children();
                    if(children.size() > 0) {
                        var isFinded = false;
                        var element = null;
                        for(var i = 0; i < children.size(); i++) {
                            element = children.get(i);
                            var id = element.id.substr(3);
                            if(id == row.id) {
                                isFinded = true;
                                break;
                            }
                        }
                        if(!isFinded) {
                            appendRow(row);
                        } else {
                            $(element).attr('class', 'order-' + row.status);
                            $(element).find('td:eq(4)').html(statuses[row.status]);
                        }
                    } else {
                        appendRow(row);
                    }
                });
                // Теперь посмотрим, какие нужно удалить из строк в таблице
                var table = $("#mainTable");
                var children = table.children();
                for(var i = 0; i < children.size(); i++) {
                    var element = children.get(i);
                    var id = element.id.substr(3);
                    var isFinded = false;
                    for(var j = 0; j < ids.length; j++) {
                        if(id == ids[j]) {
                            isFinded = true;
                            break;
                        }
                    }
                    if(!isFinded) {
                        $(element).fadeOut('slow', function(env) {
                            $(this).remove();
                        });
                        j--;
                    }
                }
                setTimeout(func, 1000);
            }
        });
    };
    func();


    function appendRow(row) {
        var tr = $("<tr id='row" + row.id + "' class='order-" + row.status + "'>");
        tr.append("<td>" + row.id + "</td><td>" + row.nick + "</td><td>" + row.coctail_name + "</td><td>" + row.quantity + "</td><td>" + statuses[row.status] + "</td>");
        $("#mainTable").append(tr);
    }
});