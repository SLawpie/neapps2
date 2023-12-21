
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    $('#main').addClass('dark');
    document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')

    var els = document.getElementsByClassName("toggle-check");
    Array.prototype.forEach.call(els, function(el) {
        el.checked = false
    });
    $('#dark-icon').toggleClass('hidden', false).toggleClass('flex', true);
    $('#light-icon').toggleClass('hidden', true).toggleClass('flex', false);
    $('#system-icon').toggleClass('hidden', true).toggleClass('flex', false);
    // localStorage.theme = 'dark';
} else {
    $('#main').removeClass('dark');
    document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')

    var els = document.getElementsByClassName("toggle-check");
    Array.prototype.forEach.call(els, function(el) {
        el.checked = true
    });
    // $( '#toggle-check' ).prop( "checked", true )

    $('#dark-icon').toggleClass('hidden', true).toggleClass('flex', false);
    $('#light-icon').toggleClass('hidden', false).toggleClass('flex', true);
    $('#system-icon').toggleClass('hidden', true).toggleClass('flex', false);
    // localStorage.theme = 'light';
}
if (!('theme' in localStorage)) {
    $('#dark-icon').toggleClass('hidden', true).toggleClass('flex', false);
    $('#light-icon').toggleClass('hidden', true).toggleClass('flex', false);
    $('#system-icon').toggleClass('hidden', false).toggleClass('flex', true);
}

// if (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
//     $('#main').addClass('dark');
//     document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b');
// } else {
//     $('#main').removeClass('dark');
//     document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b');
// }



// switch (localStorage.theme) {
//     case 'dark':
//         $('#main').addClass('dark');
//         document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b');
//         break;
//     case 'light':
//         $('#main').removeClass('dark');
//         document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b');
//         break;
//     default:
//         if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
//             $('#main').addClass('dark');
//             document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b');
//         } else {
//             $('#main').removeClass('dark');
//             document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b');
//         }
// }

// $('#main').toggleClass(localStorage.theme);


function switchTheme(theme) {
    // alert(theme);
    switch(theme) {
        case 'system':
            localStorage.removeItem('theme');
            $('#dark-icon').toggleClass('hidden', true).toggleClass('flex', false);
            $('#light-icon').toggleClass('hidden', true).toggleClass('flex', false);
            $('#system-icon').toggleClass('hidden', false).toggleClass('flex', true);
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                $('#main').addClass('dark');
                document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
            } else {
                $('#main').removeClass('dark');
                document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
            }
            break;
        case 'dark':
            localStorage.theme = 'dark';
            $('#main').addClass('dark');
            $('#dark-icon').toggleClass('hidden', false).toggleClass('flex', true);
            $('#light-icon').toggleClass('hidden', true).toggleClass('flex', false);
            $('#system-icon').toggleClass('hidden', true).toggleClass('flex', false);
            document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
            break;
        case 'light':
            localStorage.theme = 'light';
            $('#main').toggleClass('dark', false);
            $('#dark-icon').toggleClass('hidden', true).toggleClass('flex', false);
            $('#light-icon').toggleClass('hidden', false).toggleClass('flex', true);
            $('#system-icon').toggleClass('hidden', true).toggleClass('flex', false);
            document.querySelector('meta[name="theme-color"]').setAttribute('content', '#f1f5f9')
            break;
        default:
            // if (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                localStorage.theme = 'dark';
            } else {
                localStorage.theme = 'light';
            }
            // localStorage.removeItem('theme');
    }
    themeSelector();
}

/*DARK CLASS*/
// function darkLight() {
//     if (localStorage.theme != 'dark') {
//         $('#main').toggleClass('dark', true);
//         localStorage.theme = "dark";
//         document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
//     } else {
//         $('#main').toggleClass('dark', false);
//         localStorage.theme = "light";
//         document.querySelector('meta[name="theme-color"]').setAttribute('content', '#f1f5f9')
//     }
//     themeSelector();
// }
function darkLight() {
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        $('#main').toggleClass('dark', false);
        localStorage.theme = "light";
        document.querySelector('meta[name="theme-color"]').setAttribute('content', '#f1f5f9')
    } else {
        $('#main').toggleClass('dark', true);
        localStorage.theme = "dark";
        document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
    }
}


/*Add 'checked' property to input if background == dark*/
// if ($('#main').hasClass('dark')) {
//     var els = document.getElementsByClassName("toggle-check");
//     Array.prototype.forEach.call(els, function(el) {
//         el.checked = false
//     });
//     // $( '#toggle-check' ).prop( "checked", false )

//     $('#dark-icon').toggleClass('hidden', false);
//     $('#light-icon').toggleClass('hidden', true);
//     document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1e293b')
// } else {
//     var els = document.getElementsByClassName("toggle-check");
//     Array.prototype.forEach.call(els, function(el) {
//         el.checked = true
//     });
//     // $( '#toggle-check' ).prop( "checked", true )

//     $('#dark-icon').toggleClass('hidden', true);
//     $('#light-icon').toggleClass('hidden', false);
//     document.querySelector('meta[name="theme-color"]').setAttribute('content', '#f1f5f9')
// }


function themeSelector() {
    let activeThemeClasses = "stroke-light-accent dark:stroke-dark-accent stroke-[0.75px]";
    let themeClases = "hover:stroke-light-text hover:stroke-[0.75px]";
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


