var mychart = document.getElementById('chart_div');
if (mychart) {

    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tháng', 'Doanh số', 'Chi phí nhập', 'Lợi nhận'],
            ['01/2020', 1000, 400, 200],
            ['02/2020', 1170, 460, 250],
            ['03/2020', 660, 1120, 300],
            ['04/2020', 1030, 540, 350]
        ]);

        var options = {
            chart: {
                // title: '',
                // subtitle: '',
            }
        };

        var chart = new google.charts.Bar(mychart);
        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
}

var dropdownToggle = document.querySelector('.dropdown-toggle');
if (dropdownToggle != null) {
    dropdownToggle.addEventListener('click', () => {
        document.querySelector('.dropdown-menu').style.display =
            (document.querySelector('.dropdown-menu').style.display == "none") ? "block" : "none";
    })
}

var btnThemNCC = document.querySelector('#themNCC');
var btnCloseThemNCC = document.querySelector('#closeThemNCC');
if (btnThemNCC != null) {
    btnThemNCC.addEventListener('click', function() {
        document.querySelector("#modalThemNCC").style.display = "block";
    });
    btnCloseThemNCC.addEventListener('click', function() {
        document.querySelector("#modalThemNCC").style.display = "none";
    });
}

var btnCloseThemSanPham = document.querySelector('#closeThemSanPham');
if (btnCloseThemSanPham != null) {

    btnCloseThemSanPham.addEventListener('click', function() {
        document.querySelector("#modalThemSanPham").style.display = "none";
    });
}

const usertoggle = document.querySelector('.user-toggle');
const usermenu = document.querySelector('.user-menu');

if (usertoggle != null) {
    usertoggle.addEventListener('click', () => {
        usermenu.style.display = usermenu.style.display == 'inline' ? 'none' : 'inline';
    })
}
const collapseAsideBtn = document.querySelector('.collapse-aside-button');
if (collapseAsideBtn != null) {
    collapseAsideBtn.addEventListener('click', () => {
        document.body.classList.toggle('collapse-aside');
        if (collapseAsideBtn.innerHTML != '<i class="fa fa-arrow-left fa-2x"></i>') {
            collapseAsideBtn.innerHTML = '<i class="fa fa-arrow-left fa-2x"></i>';
            chart.draw(data, options);
        } else
            collapseAsideBtn.innerHTML = '<i class="fa fa-bars fa-2x"></i>';
    })
}

const menuExpanders = document.querySelectorAll('.menu-expander');
if (menuExpanders != null) {
    menuExpanders.forEach(menu => {
        menu.addEventListener('click', () => {
            var content = menu.nextElementSibling;
            if (!content.style.maxHeight) {
                content.style.maxHeight = content.scrollHeight + 'px';
                menu.innerHTML = menu.innerHTML.replace('down', 'up');
            } else {
                content.style.maxHeight = null;
                menu.innerHTML = menu.innerHTML.replace('up', 'down');

            }
        })

    });
}