
nav = document.querySelector('.navbar');
searchBar = document.querySelector('#search');



document.addEventListener('DOMContentLoaded', function () {

    M.Sidenav.init(document.querySelectorAll('.sidenav'));
    M.FloatingActionButton.init(document.querySelectorAll('.fixed-action-btn'), {
        hoverEnabled: false
    });
     
    M.TapTarget.init(document.querySelectorAll('.tap-target'));
     
    M.Autocomplete.init(document.querySelectorAll('.autocomplete'));
    M.Tooltip.init(document.querySelectorAll('.tooltipped'));
    M.Modal.init(document.querySelectorAll('.modal'));
});

window.onload = function () {
    const btnFixed = document.querySelectorAll('.fixed-action-btn.direction-top')
    const  tapTarget = M.TapTarget.getInstance(document.querySelector('.tap-target'));
              tapTarget.open();    
            setTimeout(() => {
                tapTarget.close();
            }, 2500);  



}
