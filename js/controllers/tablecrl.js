
'use strict';

carmodule.controller('tablecrl', ['$scope', function ($scope) {

        if (!dataObject.tblRows) {

            dataObject.tblRows = datarows();

            console.log('created');

        } else {
            $('.divcenter table').html(dataObject.tblRows);
            $('td div').click(function () {
                alert($(this).text());
            });
            $('.divcenter table').DataTable();
            console.log('available');
        }
  
    }]);

function datarows() {
    var cnt = 0;
    var tds = "";
    var trs = "";
    var thd = "<thead style='display:none'><tr><th>ENO</th><th>EMPName</th><th>Country</th><th>Salary</th>" +
            "<th>EMPName</th><th>Country</th></tr></thead>";
    for (var t = 0; t < 5; t++) {
        tds = "";
        var tr = "<tr>";
        for (var n = 0; n < 6; n++) {
            cnt++;
            tds += '<td><div class="brd1 col-xs-1"><img src="imgs/car.png" style="width:80px; height:auto">' +
                    cnt + '<br>Blah..blah..</div></td>';
        }
        tr += tds + "</tr>";
        trs += tr;
    }
    trs = thd + trs;

    $('.divcenter table').html(trs);
    $('td div').click(function () {
        alert($(this).text());
    });
    $('.divcenter table').DataTable();

    $('.divcenter table');

    return  trs;
}


function liData() {
    dataObject.lists = [];
//    var links = {};
    for (var k = 0; k < 1000; k++) {
        var links = {};
        for (var t = 0; t < 10; t++) {
            links.obj1 = 'imgs/car.png';
            links.obj2 = 'imgs/car.png';
            links.obj3 = 'imgs/car.png';
            links.obj4 = 'imgs/car.png';
            links.obj5 = 'imgs/car.png';
            links.obj6 = 'imgs/car.png';
            links.obj7 = 'imgs/car.png';
            links.obj8 = 'imgs/car.png';
            links.obj9 = 'imgs/car.png';
        }
        dataObject.lists[k] = links;
    }
   return dataObject.lists;
}


