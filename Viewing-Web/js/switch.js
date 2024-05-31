window.onload = function() {
    // Initially hide all sections except "Dashboard"
    document.getElementById('home').style.display = 'block';
    document.getElementById('currentSemester').style.display = 'none';
    document.getElementById('lastSemester').style.display = 'none';

    // Add event listeners to the sidebar links
    document.querySelector('a[href="#head-title"]').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('home').style.display = 'block';
        document.getElementById('currentSemester').style.display = 'none';
        document.getElementById('lastSemester').style.display = 'none';
    });

    document.querySelector('a[href="#view-grade"]').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('home').style.display = 'none';
        document.getElementById('currentSemester').style.display = 'block';
        document.getElementById('lastSemester').style.display = 'none';
    });

    document.querySelector('a[href="#table-data"]').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('home').style.display = 'none';
        document.getElementById('currentSemester').style.display = 'none';
        document.getElementById('lastSemester').style.display = 'block';
    });
}

