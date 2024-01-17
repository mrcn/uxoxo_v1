
// // Smooth scroll for ToC in the portfolio template

// window.addEventListener('DOMContentLoaded', function() {
//     // Get all the links in the ToC column
//     var links = document.querySelectorAll('.toc-column a[href^="#"]');

//     // Add click event listener to each link
//     links.forEach(function(link) {
//       link.addEventListener('click', function(e) {
//         e.preventDefault();

//         // Get the target element's ID from the link's href attribute
//         var targetId = link.getAttribute('href').slice(1);

//         // Get the target element
//         var target = document.getElementById(targetId);

//         // Calculate the scrolling offset by subtracting the height of the sticky ToC from the target's top position
//         var offset = target.getBoundingClientRect().top - document.querySelector('.sticky-toc').getBoundingClientRect().height;

//         // Perform smooth scroll animation
//         window.scrollTo({
//           top: offset,
//           behavior: 'smooth'
//         });
//       });
//     });
//   });
