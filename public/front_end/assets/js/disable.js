document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
});

// Disable F12 key and Ctrl+Shift+I combination
document.onkeydown = function (e) {
    if (
        (e.which == 123) ||
        ((e.ctrlKey || e.metaKey) && (e.shiftKey) && (e.keyCode == 73))
    ) {
        e.preventDefault();
    }
};