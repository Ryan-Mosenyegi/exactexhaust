// Navigation Pills Activation
function initNavPills() {
    const navLinks = document.querySelectorAll('.nav-pills .nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            document.querySelectorAll('.nav-pills .nav-link').forEach(nav => {
                nav.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
}

// Initialize when DOM loads
document.addEventListener('DOMContentLoaded', function() {
    initNavPills();
});