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
        if (collapseAsideBtn.innerHTML != '<i class="fa fa-arrow-left fa-2x"></i>')
            collapseAsideBtn.innerHTML = '<i class="fa fa-arrow-left fa-2x"></i>';
        else
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