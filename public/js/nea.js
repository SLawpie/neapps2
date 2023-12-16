/*
toggle dark/light theme
*/

$('#main').toggleClass(localStorage.theme);

function darkLight() {
/*DARK CLASS*/
    if (localStorage.theme != 'dark') {
        $('#main').toggleClass('dark', true);
        localStorage.theme = "dark";
        $('#dark-icon').toggleClass('hidden', false);
        $('#light-icon').toggleClass('hidden', true);
        document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
    } else {
        $('#main').toggleClass('dark', false);
        localStorage.theme = "light";
        $('#dark-icon').toggleClass('hidden', true);
        $('#light-icon').toggleClass('hidden', false);
        document.querySelector('meta[name="theme-color"]').setAttribute('content', '#f3f4f6')
    }
    themeSelector();
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

function themeSelector() {
    let activeThemeClasses = "stroke-blue-500 dark:stroke-fuchsia-400 stroke-[0.75px]";
    let themeClases = "stroke-gray-400 hover:stroke-[0.75px]";
    theme = localStorage.theme;
    switch(theme) {
        case 'dark':
            $('#darkTheme').addClass(activeThemeClasses).removeClass(themeClases);
            $('#lightTheme').addClass(themeClases).removeClass(activeThemeClasses);
            $('#systemTheme').addClass(themeClases).removeClass(activeThemeClasses);
            break;
        case 'light':
            $('#darkTheme').addClass(themeClases).removeClass(activeThemeClasses);
            $('#lightTheme').addClass(activeThemeClasses).removeClass(themeClases);
            $('#systemTheme').addClass(themeClases).removeClass(activeThemeClasses);
            break;
        default:
            $('#darkTheme').addClass(themeClases).removeClass(activeThemeClasses);
            $('#lightTheme').addClass(themeClases).removeClass(activeThemeClasses);
            $('#systemTheme').addClass(activeThemeClasses).removeClass(themeClases);
    }
}

function pleaseWait(i) {
    var pwText = '#please-wait-text-' + i;
    var pw = '#please-wait-' + i;
    $(pwText).toggleClass('hidden', true);
    $(pw).toggleClass('hidden', false);
  //   setTimeout(donothing,2000);
}


