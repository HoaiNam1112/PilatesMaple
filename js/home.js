
let currentIndex = 0;
const slides = document.querySelector(".slides");
const totalSlides = document.querySelectorAll(".slide").length;

function updateSlide() {
  slides.style.transform = `translateX(${-currentIndex * 100}%)`;
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % totalSlides;
  updateSlide();
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
  updateSlide();
}

// Auto slide (optional)
setInterval(nextSlide, 5000); // chuyển slide mỗi 5 giây


// Tự động chạy sau 2 giây
setInterval(nextSlide, 5000);

// Nút điều khiển
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

// Nút điều khiển địa chỉ

document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll('.teacher-card');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.2
  });

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

