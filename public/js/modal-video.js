// modal-video.js
let videoFrame = document.getElementById('videoFrame');
const targetEl = document.getElementById('video-modal');
const pathVideo = document.getElementById('path_video'); // <-- elemen, bukan .value

const options = {
  placement: 'bottom-right',
  backdrop: 'dynamic',
  backdropClasses: 'bg-gray-900/50 dark:bg-gray-900/80 fixed inset-0 z-40',
  closable: true,
  onHide: () => {
    videoFrame.removeAttribute('src');
  },
  onShow: () => {
    const id = (pathVideo && pathVideo.value) ? pathVideo.value : '';
    // autoplay + modest branding
    videoFrame.src = 'https://www.youtube.com/embed/' + id + '?autoplay=1&rel=0&modestbranding=1';
  },
};

const modal = new Modal(targetEl, options);
window.modal = modal; // <-- penting agar bisa dipanggil dari helper
