// const pillsTab = document.querySelector('#pills-tab');
// const pills = pillsTab.querySelectorAll('button[data-bs-toggle="pill"]');

// pills.forEach(pill => {
// pill.addEventListener('shown.bs.tab', (event) => {
//   const { target } = event;
//   const { id: targetId } = target;
  
//   savePillId(targetId);
// });
// });

// const savePillId = (selector) => {
//   localStorage.setItem('activePillId', selector);
// };

// const getPillId = () => {
// const activePillId = localStorage.getItem('activePillId');

// // if local storage item is null, show default tab
// if (!activePillId) return;

// // call 'show' function
// const someTabTriggerEl = document.querySelector(`#${activePillId}`)
// const tab = new bootstrap.Tab(someTabTriggerEl);

// tab.show();
// };

// // get pill id on load
// getPillId();

// Get the navbar
var navbar = document.querySelector('.navbar');

// Get all the links in the navbar
var links = navbar.querySelectorAll('.nav-link');

// Loop through the links
for (var i = 0; i < links.length; i++) {

    // Get the href attribute of the link
    var href = links[i].getAttribute('href');
    // Check if the current page URL starts with the link href
    if (window.location.href.indexOf(href) > -1) {
        console.log('true');
        // Add the active class to the link's parent element
        links[i].classList.add('active');
    }
}
