   document.addEventListener('DOMContentLoaded', () => {
      const mainImage = document.getElementById('main-image');
      const previewImages = document.querySelectorAll('.product-previews img');

      previewImages.forEach(img => {
        img.addEventListener('click', () => {
          // Update main image source
          mainImage.src = img.src;

          // Update selected class
          previewImages.forEach(preview => preview.classList.remove('selected'));
          img.classList.add('selected');
        });
      });
    });