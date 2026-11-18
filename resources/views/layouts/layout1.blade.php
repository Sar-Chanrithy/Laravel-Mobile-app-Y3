<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student App')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script>
        /**
         * THEME MANAGER
         * Detects system preference and applies it to the 'auto' state.
         */
        (() => {
            'use strict'
            const getStoredTheme = () => localStorage.getItem('theme')
            const getPreferredTheme = () => {
                const storedTheme = getStoredTheme()
                if (storedTheme) {
                    return storedTheme
                }
                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }
            const setTheme = theme => {
                if (theme === 'auto') {
                    document.documentElement.setAttribute('data-bs-theme', (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'))
                } else {
                    document.documentElement.setAttribute('data-bs-theme', theme)
                }
            }
            setTheme(getPreferredTheme())
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                const storedTheme = getStoredTheme()
                if (storedTheme !== 'light' && storedTheme !== 'dark') {
                    setTheme(getPreferredTheme())
                }
            })
        })()
    </script>
</head>
<body>
    <div class="container mt-3">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function(e) {
                let form = this.closest('form');
                Swal.fire({
                    title: "តើពិតជាចង់លុបទិន្នន័យមួយនេះមែនទេ?",
                    text: "ពេលលុបចេញហើយ មិនអាចសង្រ្គោះទិន្នន័យមកវិញបានទេ",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "បញ្ជាក់ការលុប",
                    cancelButtonText: "កុំលុប",
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });

        @if(session('success'))
        Swal.fire({
            title: "ជោគជ័យ!",
            text: "{{ session('success') }}",
            icon: "success"
        });
        @endif
    </script>
</body>
</html>
