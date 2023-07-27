// ...previous code...

// Function to display courses in the card format with additional information and Google image
function displayCoursesWithAdditionalInfo(courses) {
  const courseContainer = document.getElementById('courseContainer');
  courseContainer.innerHTML = '';

  courses.forEach(course => {
    const card = document.createElement('div');
    card.classList.add('card', 'mb-3', 'animate__animated', 'animate__fadeInUp');
    let levelIcon = '';
    if (course.level === 'Beginner') {
      levelIcon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="text-secondary" width="1em" height="1em" viewBox="0 0 32 32"><path fill="currentColor" d="M30 30h-8V4h8zm-6-2h4V6h-4zm-4 2h-8V12h8zm-6-2h4V14h-4zm-4 2H2V18h8z"></path></svg>';
    } else if (course.level === 'Intermediate') {
      levelIcon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="text-secondary" width="1em" height="1em" viewBox="0 0 32 32"><path fill="currentColor" d="M30 30h-8V4h8zm-6-2h4V6h-4zm-4 2h-8V12h8zm-10 0H2V18h8z"></path></svg>';
    } else if (course.level === 'Expert') {
      levelIcon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="text-secondary" width="1em" height="1em" viewBox="0 0 32 32"><path fill="currentColor" d="M30 30h-8V4h8zm-10 0h-8V12h8zm-10 0H2V18h8z"></path></svg>';
    }
    card.innerHTML = `<div class="row no-gutters">
      <div class="col-md-3">
        <img src="${course.image}" class="card-img" alt="Course Image">
      </div>
      <div class="col-md-9">
        <div class="card-body">
          <h5 class="card-title">${course.title}</h5>
          <p class="card-category">${course.category}</p>
          <p class="card-text">${course.description}</p>
          <p class="card-price">
          <span class="original-price"><i class="fa fa-inr card-icons"></i>${new Intl.NumberFormat('en-US', { minimumFractionDigits: 2, }).format(course.price)}</span>
          <span class="discounted-price"><i class="fa fa-inr card-icons"></i>${new Intl.NumberFormat('en-US', { minimumFractionDigits: 2, }).format(course.discountedPrice)}</span>
        </p>
          <div class="card-ratings">
            <span><i class="fas fa-star card-ratings"></i> <span class="card-ratings-value">${course.ratings}</span></span>
            <span class="vertical-line"></span>
            <span class="card-students"><i class="fas fa-users card-icons text-dark"></i> <span class="card-students-count">${course.students}</span></span>
          </div>
          <div class="card-level-duration pt-3">
            <span class="level-icon">${levelIcon}</span>
            <span class="level-text">${course.level}</span>
            <span class="vertical-line"></span>
            <span class="course-duration"><i class="fas fa-clock card-icons"></i> ${course.duration}</span>
          </div>
        </div>
      </div>
    </div>`;

    courseContainer.appendChild(card);
  });
}

// ...previous code...

// Sample data of courses (you can replace this with your actual data)
const description = 'Learn the basics of HTML.Learn the basics of HTML.Learn the basics of HTML.Learn the basics of HTML.Learn the basics of HTML.Learn the basics of HTML.Learn the basics of HTML.';
const courses = [
  {
    title: 'Introduction to HTML',
    category: 'Programming',
    description: description,
    price: 19.99,
    discountedPrice: 18.00,
    level: 'Beginner',
    ratings: 4.5,
    students: 1000,
    duration: '3 weeks',
    image: 'image1.jpg',
  },
  {
    title: 'Introduction to HTML',
    category: 'Programming',
    description: description,
    price: 19.99,
    discountedPrice: 18.00,
    level: 'Intermediate',
    ratings: 4.5,
    students: 1000,
    duration: '3 weeks',
    image: 'bg.png',
  },
  {
    title: 'Introduction to HTML',
    category: 'Programming',
    description: description,
    price: 19.99,
    discountedPrice: 18.00,
    level: 'Expert',
    ratings: 4.5,
    students: 1000,
    duration: '3 weeks',
    image: 'image1.jpg',
  },
  {
    title: 'Introduction to HTML',
    category: 'Programming',
    description: description,
    price: 19.99,
    discountedPrice: 18.00,
    level: 'Beginner',
    ratings: 4.5,
    students: 1000,
    duration: '3 weeks',
    image: 'bg.png',
  },
  // Add more courses with similar properties...
];

// Initial display of all courses with animations and additional information on page load
displayCoursesWithAdditionalInfo(courses);

// ...previous code...


// Initialize Bootstrap-select after document is ready


  // ...previous code...


