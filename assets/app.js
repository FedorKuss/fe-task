/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';


// get the gallery container element
const galleryContainer = document.getElementById("gallery-container");


// getting the category from the query parameter in the URL
const urlParams = new URLSearchParams(window.location.search);
const category = urlParams.get('category');

// sending an AJAX request
const xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) { // display the results on the page
        const wallpapers = JSON.parse(this.responseText);
        const wallpaperContainer = document.getElementById("wallpapers");

        wallpapers.forEach(wallpaper => {
            const img = document.createElement("img");
            img.src = wallpaper;
            wallpaperContainer.appendChild(img);
        });
    }
};
xhr.open("GET", "/filter-wallpapers?category=" + category, true);
xhr.send();


// Navigation
const menuItems = document.querySelectorAll('#menuItems a');

menuItems.forEach(link => {
    link.addEventListener('click', (event) => {
    event.preventDefault();
    const category = link.getAttribute('data-category');
    localStorage.setItem('selectedCategory', category);
    window.location.href = link.href;
});

    // check if this link is the active one
    if (link.classList.contains('active')) {
        const category = link.getAttribute('data-category');
        localStorage.setItem('selectedCategory', category);
    }
});

// read the selected category from local storage and add the "active" class to the corresponding link
const selectedCategory = localStorage.getItem('selectedCategory');
if (selectedCategory) {
    menuItems.forEach(link => {
        if (link.getAttribute('data-category') === selectedCategory) {
        link.classList.add('active');
        } else {
        link.classList.remove('active');
        }
    });
}