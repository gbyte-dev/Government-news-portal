// Optimized JavaScript with performance improvements

// 🚀 Performance optimizations applied:
// 1. Debounced search for better performance
// 2. Cached DOM elements to avoid repeated queries
// 3. Reduced setTimeout/setInterval usage
// 4. Optimized animations using requestAnimationFrame
// 5. Event delegation where possible
// 6. Minimized DOM manipulations
// 7. Added error handling

(function() {
  'use strict';
  
  // 📦 Cache frequently used DOM elements
  const domCache = {
      searchInput: null,
      loadingSpinner: null,
      searchIconBtn: null,
      searchBarContainer: null,
      pageSearchInput: null,
      seeMoreBtn: null,
      menuToggle: null,
      navLinks: null,
      updateItems: null,
      totalJobs: null,
      activeUsers: null,
      resultsToday: null
  };

  // 🎯 Initialize DOM cache
  function initDOMCache() {
      domCache.searchInput = document.getElementById('searchInput');
      domCache.loadingSpinner = document.getElementById('loadingSpinner');
      domCache.searchIconBtn = document.getElementById('searchIconBtn');
      domCache.searchBarContainer = document.getElementById('searchBarContainer');
      domCache.pageSearchInput = document.getElementById('pageSearchInput');
      domCache.seeMoreBtn = document.getElementById('seeMoreBtn');
      domCache.menuToggle = document.getElementById('menu-toggle');
      domCache.navLinks = document.getElementById('nav-links');
      domCache.updateItems = document.querySelectorAll('.update-item');
      domCache.totalJobs = document.getElementById('totalJobs');
      domCache.activeUsers = document.getElementById('activeUsers');
      domCache.resultsToday = document.getElementById('resultsToday');
  }

  // 🔍 Optimized search functionality
  function searchJobs() {
      const searchTerm = domCache.searchInput?.value?.trim() || '';
      
      if (!searchTerm) {
          alert('कृपया खोजने के लिए कुछ लिखें 🔍');
          return;
      }
      
      // Show loading spinner
      if (domCache.loadingSpinner) {
          domCache.loadingSpinner.style.display = 'block';
      }
      
      // Use requestAnimationFrame for better performance
      requestAnimationFrame(() => {
          setTimeout(() => {
              if (domCache.loadingSpinner) {
                  domCache.loadingSpinner.style.display = 'none';
              }
              alert(`"${searchTerm}" के लिए खोज पूरी हो गई! 📊 5 नए परिणाम मिले।`);
          }, 1500);
      });
  }

  // 🎨 Enhanced category selection with optimized animations
  function showCategory(category, event) {
      const categoryNames = {
          'railway': '🚂 रेलवे नौकरियां',
          'ssc': '📊 SSC नौकरियां',
          'banking': '🏦 बैंकिंग नौकरियां',
          'upsc': '🎯 UPSC नौकरियां',
          'defense': '🛡️ डिफेंस नौकरियां',
          'teaching': '📚 शिक्षक नौकरियां',
          'police': '👮 पुलिस और अर्धसैनिक बल',
          'psu': '⚙️ PSU नौकरियां',
          'court': '⚖️ न्यायपालिका नौकरियां',
          'parliament': '🏛️ संसद और सचिवालय नौकरियां'
      };

      const card = event?.currentTarget;
      if (!card) return;

      // Use CSS transitions instead of setTimeout for better performance
      card.style.transform = 'scale(0.95)';
      card.style.transition = 'transform 0.2s ease';
      
      requestAnimationFrame(() => {
          setTimeout(() => {
              card.style.transform = 'scale(1)';
              alert(`${categoryNames[category] || 'इस'} सेक्शन में जा रहे हैं... ✨`);
          }, 200);
      });
  }

  // 🌐 Optimized Google Translate initialization
  function googleTranslateElementInit() {
      try {
          new google.translate.TranslateElement({
              includedLanguages: 'en,hi',
              layout: google.translate.TranslateElement.InlineLayout.SIMPLE
          }, 'google_translate_element');
          
          // Debounced function to remove indicators
          const debouncedRemoveIndicators = debounce(removeTranslateIndicators, 100);
          setTimeout(debouncedRemoveIndicators, 2000);

          injectTranslateStyles();
      } catch (error) {
          console.error('Google Translate initialization failed:', error);
      }
  }

  // 💉 Inject translate styles (moved to separate function)
  function injectTranslateStyles() {
      if (document.getElementById('translate-styles')) return; // Avoid duplicate styles
      
      const style = document.createElement('style');
      style.id = 'translate-styles';
      style.innerHTML = `
          .goog-te-gadget-icon {
              background-image: url(${typeof BASE_URL !== 'undefined' ? BASE_URL : ''}assets/img/image.png) !important;
              background-size: contain !important;
              background-repeat: no-repeat !important;
              width: 20px !important;
              height: 17px !important;
              margin-left: 5px !important;
              display: inline-block !important;
              vertical-align: middle !important;
              background-position: 0 !important;
          }
          
          .goog-te-menu-value {
              display: flex !important;
              align-items: center !important;
              gap: 8px !important;
              padding: 8px 12px !important;
              border: 1px solid #e0e0e0 !important;
              border-radius: 4px !important;
              background: white !important;
              cursor: pointer !important;
              font-family: Arial, sans-serif !important;
              font-size: 14px !important;
              color: #333 !important;
              transition: all 0.2s ease !important;
          }
          
          .goog-te-menu-value:hover {
              border-color: #b3b3b3 !important;
              box-shadow: 0 1px 3px rgba(0,0,0,0.1) !important;
          }
          
          .goog-te-menu-value:after {
              content: "▼" !important;
              font-size: 10px !important;
              margin-left: auto !important;
              color: #555 !important;
          }
          
          .goog-te-gadget .goog-te-combo {
              margin: 0 !important;
          }
          
          .goog-logo-link,
          .goog-te-gadget-simple .goog-te-menu-value:nth-child(3),
          .goog-te-gadget-simple .goog-te-menu-value span:last-child {
              display: none !important;
          }
      `;
      document.head.appendChild(style);
  }

  // 📊 Optimized stats animation using requestAnimationFrame
  function updateStats() {
      const stats = [
          { element: domCache.totalJobs, target: 45678 },
          { element: domCache.activeUsers, target: 234567 },
          { element: domCache.resultsToday, target: 23 }
      ];

      stats.forEach(({ element, target }) => {
          if (!element) return;
          animateNumber(element, 0, target, 2000);
      });
  }

  // 🎯 Optimized number animation
  function animateNumber(element, start, end, duration) {
      if (!element) return;
      
      const startTime = performance.now();
      const difference = end - start;
      
      function step(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          
          // Use easing function for smoother animation
          const easeOut = 1 - Math.pow(1 - progress, 3);
          const current = Math.floor(start + (difference * easeOut));
          
          element.textContent = current.toLocaleString();
          
          if (progress < 1) {
              requestAnimationFrame(step);
          }
      }
      
      requestAnimationFrame(step);
  }

  // 🔗 Optimized category tracking
  function goToCategory(slug) {
      if (!slug || typeof BASE_URL === 'undefined') return;
      
      const baseUrl = BASE_URL;
      const fullUrl = baseUrl + slug;

      // Use fetch instead of jQuery for better performance
      fetch(baseUrl + 'track-category-click', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
          },
          body: JSON.stringify({ page_url: fullUrl })
      })
      .then(response => response.json())
      .then(data => {
          // Handle success if needed
      })
      .catch(error => {
          console.error('Tracking failed:', error);
      });
  }

  // 🧹 Optimized indicator removal
  function removeTranslateIndicators() {
      const indicators = document.querySelectorAll('span.indicator, #google_translate_element .indicator');
      indicators.forEach(el => {
          el.style.display = 'none';
          // Use remove() for better cleanup
          el.remove();
      });
  }

  // ⏰ Debounce utility function
  function debounce(func, wait) {
      let timeout;
      return function executedFunction(...args) {
          const later = () => {
              clearTimeout(timeout);
              func.apply(this, args);
          };
          clearTimeout(timeout);
          timeout = setTimeout(later, wait);
      };
  }

  // 🔍 Optimized live search with debouncing
  const debouncedLiveSearch = debounce(function() {
      if (!domCache.pageSearchInput || !domCache.updateItems) return;
      
      const input = domCache.pageSearchInput.value.toLowerCase().trim();
      let matchCount = 0;
      const visibleCount = 20;

      // Use DocumentFragment for batch DOM updates if needed
      domCache.updateItems.forEach(item => {
          const searchableText = item.getAttribute('data-searchable')?.toLowerCase() || '';
          const isMatch = !input || searchableText.includes(input);
          
          item.style.display = isMatch ? 'block' : 'none';
          if (isMatch) matchCount++;
      });

      // Update "See More" button visibility
      if (domCache.seeMoreBtn) {
          domCache.seeMoreBtn.style.display = 
              (input === '' && matchCount > visibleCount) ? 'block' : 'none';
      }
  }, 300);

  // 🎮 Event handlers setup
  function setupEventHandlers() {
      // Menu toggle
      if (domCache.menuToggle && domCache.navLinks) {
          domCache.menuToggle.addEventListener('click', () => {
              domCache.navLinks.classList.toggle('show');
          });
      }

      // Search icon toggle
      if (domCache.searchIconBtn && domCache.searchBarContainer) {
          domCache.searchIconBtn.addEventListener('click', () => {
              const isHidden = domCache.searchBarContainer.style.display === 'none' || 
                             domCache.searchBarContainer.style.display === '';
              
              if (isHidden) {
                  domCache.searchBarContainer.style.display = 'block';
                  if (domCache.pageSearchInput) {
                      domCache.pageSearchInput.focus();
                  }
              } else {
                  domCache.searchBarContainer.style.display = 'none';
                  if (domCache.pageSearchInput) {
                      domCache.pageSearchInput.value = '';
                  }
                  resetSearch();
              }
          });
      }

      // Live search with debouncing
      if (domCache.pageSearchInput) {
          domCache.pageSearchInput.addEventListener('input', debouncedLiveSearch);
      }

      // See more button
      if (domCache.seeMoreBtn && domCache.updateItems) {
          domCache.seeMoreBtn.addEventListener('click', () => {
              domCache.updateItems.forEach(item => {
                  item.style.display = 'block';
              });
              domCache.seeMoreBtn.style.display = 'none';
          });
      }

      // Category cards with event delegation
      document.addEventListener('click', (e) => {
          const categoryCard = e.target.closest('.category-card');
          if (categoryCard) {
              const category = categoryCard.getAttribute('data-category');
              if (category) {
                  showCategory(category, e);
              }
          }
      });
  }

  // 🔄 Reset search function
  function resetSearch() {
      if (!domCache.updateItems) return;
      
      const visibleCount = 20;
      domCache.updateItems.forEach((item, index) => {
          item.style.display = index < visibleCount ? 'block' : 'none';
      });

      if (domCache.seeMoreBtn && domCache.updateItems.length > visibleCount) {
          domCache.seeMoreBtn.style.display = 'block';
      }
  }

  // 🚀 Initialize everything when DOM is ready
  function init() {
      initDOMCache();
      setupEventHandlers();
      
      // Initialize search bar as hidden
      if (domCache.searchBarContainer) {
          domCache.searchBarContainer.style.display = 'none';
      }

      // Initialize item visibility
      const visibleCount = 20;
      if (domCache.updateItems) {
          domCache.updateItems.forEach((item, index) => {
              if (index >= visibleCount) {
                  item.style.display = 'none';
              }
          });
          
          if (domCache.seeMoreBtn && domCache.updateItems.length <= visibleCount) {
              domCache.seeMoreBtn.style.display = 'none';
          }
      }

      // Set up category active states
      const currentURL = window.location.href;
      const categoryCards = document.querySelectorAll('.category-card');
      categoryCards.forEach(card => {
          const category = card.getAttribute('data-category');
          if (category && currentURL.includes(category)) {
              card.classList.add('active');
          }
      });

      // Set up mutation observer for translate indicators
      const observer = new MutationObserver(debounce(removeTranslateIndicators, 100));
      observer.observe(document.body, {
          childList: true,
          subtree: true
      });

      // Update stats with animation
      updateStats();
  }

  // 📱 Handle Google Translate icon setup
  function setupTranslateIcon() {
      const icon = document.querySelector('.goog-te-gadget-icon');
      if (icon) {
          const bgImage = window.getComputedStyle(icon).backgroundImage;
          const match = bgImage.match(/url\(["']?(.*?)["']?\)/);
          if (match && match[1]) {
              icon.setAttribute('src', match[1]);
          }
      }
  }

  // 🎯 Export functions to global scope (if needed)
  window.searchJobs = searchJobs;
  window.showCategory = showCategory;
  window.googleTranslateElementInit = googleTranslateElementInit;
  window.goToCategory = goToCategory;
  window.liveSearch = debouncedLiveSearch;

  // 🚀 Initialize when DOM is ready
  if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', init);
  } else {
      init();
  }

  // Set up translate icon after a delay
  setTimeout(setupTranslateIcon, 2000);

})();

window.addEventListener('load', () => {
  setTimeout(() => {
    const bar = document.getElementById('notifyBar');
    bar?.classList.add('animated', 'add-shimmer');
  }, 300);
});
