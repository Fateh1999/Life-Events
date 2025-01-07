<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Events Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/asset/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Life Events Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn-primary btn-sm ms-3" id="addPhotoBtn">Add Photo</button>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger btn-sm ms-3" href="/login">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Add Event Section -->
    <div id="add-event-section" class="container">
        <h2 class="text-center mb-4">Add a Life Event</h2>
        <form id="eventForm" class="row g-3">
            <div class="col-md-6">
                <label for="eventName" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="eventName" required>
            </div>
            <div class="col-md-6">
                <label for="eventDate" class="form-label">Date</label>
                <input type="date" class="form-control" id="eventDate" required>
            </div>
            <div class="col-12">
                <label for="eventDescription" class="form-label">Description</label>
                <textarea class="form-control" id="eventDescription" rows="3"></textarea>
            </div>
            <div class="col-12">
                <label for="eventImage" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="eventImage" accept="image/*" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Add Event</button>
            </div>
        </form>
    </div>

    <!-- Gallery Section -->
    <div id="gallery-section" class="container gallery">
        <h2 class="text-center mb-4">Event Gallery</h2>
        <div class="row" id="galleryGrid">
            <!-- Dynamic Event Cards will be inserted here -->
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Life Events Gallery. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript -->
    <script>
        const addPhotoBtn = document.getElementById('addPhotoBtn');
        const addEventSection = document.getElementById('add-event-section');
        const gallerySection = document.getElementById('gallery-section');

        // Toggle Add Event Form visibility
        addPhotoBtn.addEventListener('click', () => {
            if (addEventSection.style.display === 'none') {
                addEventSection.style.display = 'block';
                gallerySection.style.display = 'none';
                addPhotoBtn.innerText = 'Back to Gallery';
            } else {
                addEventSection.style.display = 'none';
                gallerySection.style.display = 'block';
                addPhotoBtn.innerText = 'Add Photo';
            }
        });

        // Handle Event Form Submission
        document.getElementById('eventForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Collect Form Data
            const name = document.getElementById('eventName').value;
            const date = document.getElementById('eventDate').value;
            const description = document.getElementById('eventDescription').value;
            const image = document.getElementById('eventImage').files[0];

            if (image) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    // Create Event Card
                    const galleryGrid = document.getElementById('galleryGrid');
                    const col = document.createElement('div');
                    col.className = 'col-lg-4 col-md-6 col-sm-12 mb-4';
                    col.innerHTML = `
                        <div class="event-card p-3">
                            <img src="${e.target.result}" class="img-fluid rounded mb-2" alt="${name}">
                            <h5>${name}</h5>
                            <p class="text-muted">${date}</p>
                            <p>${description}</p>
                            <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                        </div>
                    `;
                    galleryGrid.appendChild(col);

                    // Add Delete Functionality
                    col.querySelector('.delete-btn').addEventListener('click', function () {
                        col.remove();
                    });
                };
                reader.readAsDataURL(image);
            }

            // Clear Form
            document.getElementById('eventForm').reset();

            // Hide Form and Show Gallery
            addEventSection.style.display = 'none';
            gallerySection.style.display = 'block';
            addPhotoBtn.innerText = 'Add Photo';
        });
    </script>
</body>

</html>
