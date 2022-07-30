$('.sidemenu .nav-link, .submenu .nav-link').click(function(e) {
    // Setup variables
    let element = $(this); 
    let $parent = element.parent();
    let $submenu = $parent.children('ul.submenu');
    let $allmenu = $parent.siblings();
    let $sibling = $allmenu.children('ul.submenu');

    // If clicked element has submenu
    if($submenu.length > 0) {
        e.preventDefault(); // Prevent action (redirect page or add has link)

        // If has sibling, do collapse all and remove .active class
        if($sibling.length > 0) {
            $allmenu.hasClass('active') ? $allmenu.removeClass('active') : false;
            $sibling.slideUp(200);
        }

        // Action to toggle class .active & slide down the dropdown
        $parent.toggleClass('active');
        $submenu.slideToggle(200);
    }
});

$('.toggler-sidebar').click(a => {
    $('body').toggleClass('toggled');
});