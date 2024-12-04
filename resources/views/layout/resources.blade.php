<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- DataTables -->
<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>

<!-- Custom CSS -->
<style>
:root {
    --primary-color: #808080;  /* Grey */
    --secondary-color: #98FB98;  /* Pastel Green */
    --text-color: #333333;
    --bg-light: #f8f9fa;
}

body {
    color: var(--text-color);
    background-color: var(--bg-light);
    min-height: 100vh;
}

/* Top Navigation */
.top-nav {
    background-color: var(--primary-color);
    padding: 1rem;
    height: 80px;
}

.top-nav .nav-link {
    color: white;
    text-decoration: none;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
}

.logo-container {
    width: 200px;
}

.logo-container img {
    width: 100%;
    height: auto;
}

/* Sidebar */
.sidebar {
    background-color: var(--primary-color);
    min-height: calc(100vh - 80px);
    width: 250px;
    padding: 1rem;
}

.sidebar .nav-link {
    color: white;
    padding: 0.5rem 1rem;
    margin-bottom: 0.5rem;
    border-radius: 5px;
    text-decoration: none;
}

.sidebar .nav-link:hover {
    background-color: var(--secondary-color);
    color: var(--text-color);
}

.sidebar .nav-link i {
    width: 25px;
}

/* User Profile */
.user-profile {
    display: flex;
    align-items: center;
    color: white;
    padding: 0.5rem 1rem;
}

.user-profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 1rem;
}

/* Main Content */
.main-content {
    background-color: var(--bg-light);
    min-height: calc(100vh - 80px);
}

/* Cards */
.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: var(--primary-color);
    color: white;
    border-radius: 10px 10px 0 0 !important;
}

/* Buttons */
.btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn-secondary {
    background-color: var(--secondary-color);
    border-color: var(--secondary-color);
    color: var(--text-color);
}

/* Tables */
.table {
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
}

.table thead th {
    background-color: var(--primary-color);
    color: white;
    border-bottom: none;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(152, 251, 152, 0.1);
}

/* Module Submenu */
#moduleSubmenu {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
}

#moduleSubmenu .nav-link {
    font-size: 0.9rem;
    padding: 0.4rem 1rem;
}

/* Alerts */
.alert {
    border-radius: 10px;
    border: none;
}

/* Initialize DataTables */
<script>
$(document).ready(function() {
    if ($.fn.DataTable) {
        $('#dataTable').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: ['copy', 'excel', 'pdf', 'print']
        });
    }
});
</script>
</style>
