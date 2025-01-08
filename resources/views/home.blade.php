@extends('layouts.app') 
 
@section('main')
 <!-- Add Event Section -->
    <div id="add-event-section" class="container">
        <h2 class="text-center mb-4">Add a Life Event</h2>
        <form method="POST" action="{{ url('/add_event') }}" id="eventForm" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="eventName" class="form-label">Event Name</label>
                <input name="eventName" type="text" class="form-control" id="eventName" required>
            </div>
            <div class="col-md-6">
                <label for="eventDate" class="form-label">Date</label>
                <input name="eventDate" type="date" class="form-control" id="eventDate" required>
            </div>
            <div class="col-12">
                <label for="eventDescription" class="form-label">Description</label>
                <textarea name="eventDescription" class="form-control" id="eventDescription" rows="3"></textarea>
            </div>
            <div class="col-12">
                <label for="eventImage" class="form-label">Upload Image</label>
                <input name="eventImage" type="file" class="form-control" id="eventImage" accept="image/*" required>
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

      {{-- <!-- JavaScript -->
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
    </script> --}}

@endsection
 

