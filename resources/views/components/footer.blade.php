<footer class="footer">
    <div class="container">
        <div class="personal-info">
            <div class="row">
                <div class="col medium-4">
                    <div class="logo-container">
                        <a href="#" class="logo-link">
                            <img src="{{ asset('images/logo.svg') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col medium-4">
                    <div class="info-container">
                        <p class="section-label">Address:</p>
                        <p>555 de la Jouvence</p>
                        <p>Paris, France</p>
                        <p>H1H 1H1</p>
                        <p class="section-label">Phone Number:</p>
                        <p>444 123-1234</p>
                        <p class="section-label">Email:</p>
                        <p>info@kazoku.com</p>
                    </div>
                </div>
                <div class="col medium-4">
                    <div class="contact-container">
                        <x-forms.contact-form />
                    </div>
                </div>
            </div>
        </div>
        <p class="footer-copyright">All right reserved. Alexandre St-Laurent <span>{{ \Carbon\Carbon::now()->year }}</span></p>
    </div>
</footer>
