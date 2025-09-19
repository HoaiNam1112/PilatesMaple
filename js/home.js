
// JS
let index = 0;
const slides = document.querySelectorAll(".new-slide");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");
const dotsContainer = document.querySelector(".dots");

// Tạo dots
slides.forEach((_, i) => {
  const dot = document.createElement("span");
  if (i === 0) dot.classList.add("active");
  dot.addEventListener("click", () => goToSlide(i));
  dotsContainer.appendChild(dot);
});
const dots = document.querySelectorAll(".dots span");

function showSlide(n) {
  slides.forEach(s => s.classList.remove("active"));
  dots.forEach(d => d.classList.remove("active"));

  slides[n].classList.add("active");
  dots[n].classList.add("active");
}

function goToSlide(n) {
  index = n;
  showSlide(index);
}

function nextSlide() {
  index = (index + 1) % slides.length;
  showSlide(index);
}

function prevSlideFunc() {
  index = (index - 1 + slides.length) % slides.length;
  showSlide(index);
}

// Auto chạy
let autoSlide = setInterval(nextSlide, 4000);


// Reset auto chạy khi có thao tác
function resetAutoSlide() {
  clearInterval(autoSlide);
  autoSlide = setInterval(nextSlide, 4000);
}


// JS cho Swiper
document.addEventListener("DOMContentLoaded", function () {
  const sliderEl = document.querySelector(".pp-swiper-slider");
  if (sliderEl) {
    const settings = JSON.parse(sliderEl.getAttribute("data-slider-settings"));
    new Swiper(sliderEl, {
      ...settings,
      on: {
        init: function () {
          console.log("Swiper đã khởi tạo thành công!");
        }
      }
    });
  }
});

// -
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".teacher-card");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  cards.forEach(card => observer.observe(card));
});


// 
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll('.layout-left, .top-right, .bottom-card');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.2
  });

  items.forEach(item => observer.observe(item));
});

// 

const swiper = new Swiper(".quote-slider", {
  loop: true,
  autoplay: {
    delay: 5000, // 2 giây
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

//

document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll('.from-left, .from-right');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.2
  });

  elements.forEach(el => observer.observe(el));
});

// 

