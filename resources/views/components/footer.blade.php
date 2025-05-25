</div> <!-- end .container -->

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-4">
    <p class="mb-0">© {{ date('Y') }} LaravelApp. All rights reserved.</p>
</footer>

<!-- Bootstrap JS Bundle (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Your Custom JS -->
<script src="{{ asset('js/app.js') }}"></script>

@stack('scripts') <!-- For extra scripts from child views -->
</body>
</html>
