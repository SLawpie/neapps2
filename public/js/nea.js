/*
toggle dark/light theme
*/

$('#main').toggleClass(localStorage.toggled);

function darkLight() {
/*DARK CLASS*/
    if (localStorage.toggled != 'dark') {
        $('#main').toggleClass('dark', true);
        localStorage.toggled = "dark";
        $('#dark-icon').toggleClass('hidden', false);
        $('#light-icon').toggleClass('hidden', true);
        document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
    } else {
        $('#main').toggleClass('dark', false);
        localStorage.toggled = "";
        $('#dark-icon').toggleClass('hidden', true);
        $('#light-icon').toggleClass('hidden', false);
        document.querySelector('meta[name="theme-color"]').setAttribute('content', '#f3f4f6')
    }
}

/*Add 'checked' property to input if background == dark*/
if ($('#main').hasClass('dark')) {
    var els = document.getElementsByClassName("toggle-check");
    Array.prototype.forEach.call(els, function(el) {
        el.checked = false
    });
    // $( '#toggle-check' ).prop( "checked", false )

    $('#dark-icon').toggleClass('hidden', false);
    $('#light-icon').toggleClass('hidden', true);
    document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
} else {
    var els = document.getElementsByClassName("toggle-check");
    Array.prototype.forEach.call(els, function(el) {
        el.checked = true
    });
    // $( '#toggle-check' ).prop( "checked", true )

    $('#dark-icon').toggleClass('hidden', true);
    $('#light-icon').toggleClass('hidden', false);
    document.querySelector('meta[name="theme-color"]').setAttribute('content', '#f3f4f6')
}

function pleaseWait(i) {
    var pwText = '#please-wait-text-' + i;
    var pw = '#please-wait-' + i;
    $(pwText).toggleClass('hidden', true);
    $(pw).toggleClass('hidden', false);
  //   setTimeout(donothing,2000);
}

function hamClick() {
    
}


