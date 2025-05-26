<!-- footer section start -->

@if (session('success'))
    <div id="success" class="alert alert-success mt-4">
        {{ session('success') }}
    </div>
@endif
<div class="footer_section py-5" style="background-color: #c5e9f5;">
    <div class="container">
        <div class="row mb-4 align-items-center">
            <div class="col-md-6">
                <h1 class="contact_taital fw-bold text-dark d-flex align-items-center">
                    <span class="me-2">Contact</span>
                    <img src="images/icon-2.png" alt="icon" style="height: 30px;" class="me-2">
                    <span>Us</span>
                </h1>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <a href="mailto:info@elbio.org"
                    class="text-dark text-decoration-none d-flex align-items-center justify-content-md-end">
                    <img src="images/map-icon.png" alt="email icon" style="height: 20px;">
                    <span class="ms-2">info@elbio.org</span>
                </a>
            </div>
        </div>



        <div class="row">
            <div class="col-md-6 mx-auto">
                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Message" rows="5" name="message" required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.getElementById('success');
        if (successMessage) {
            successMessage.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
</script>
<!-- footer section end -->
